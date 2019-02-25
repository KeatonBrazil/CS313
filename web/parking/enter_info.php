<?php

session_start();
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: login_page.php");
	die();
}

require_once("parking_db.php");
$db = get_db();

$query = "SELECT lot_location, parking_pass, to_char(start_at_date, 'Month DD YYYY') AS start_date, to_char(start_at_time, 'HH24:MI') AS start_time FROM parking_info JOIN parking_lot USING(lot_id) JOIN member USING(member_id) WHERE username=:username ORDER BY info_id DESC";
$statement = $db->prepare($query);
$statement->bindValue(':username', $username, PDO::PARAM_STR);
$statement->execute();
$logs = $statement->fetchAll(PDO::FETCH_ASSOC);

$query1 = "SELECT DISTINCT lot_location FROM parking_lot";
$statement = $db->prepare($query1);
$statement->execute();
$lots = $statement->fetchAll(PDO::FETCH_ASSOC);

$query2 = "SELECT DISTINCT parking_pass FROM parking_lot";
$statement = $db->prepare($query2);
$statement->execute();
$passes = $statement->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Check In | BYU-I Parking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="parking.css">
        <script>
            function pass(x) {
                var doc = x;
                var docn = document.getElementById("north");
                var docs = document.getElementById("south"); 
                var doca = document.getElementById("admin");
                console.log(doc.value)
                if (doc.value === "Taylor") {
                    docn.style.display = 'inline';
                    docs.style.display = 'none';
                    doca.style.display = 'none';
                } else if (doc.value === "STC") {
                    docn.style.display = 'none';
                    docs.style.display = 'inline';
                    doca.style.display = 'none';
                } else if (doc.value === "Snow") {
                    docn.style.display = 'none';
                    docs.style.display = 'none';
                    doca.style.display = 'inline';
                } else if (doc.value === "Kimball") {
                    docn.style.display = 'inline';
                    docs.style.display = 'none';
                    doca.style.display = 'inline';
                } else if (doc.value === "I-Center") {
                    docn.style.display = 'inline';
                    docs.style.display = 'none';
                    doca.style.display = 'none';
                };
            };
        </script>
    </head>
    <body>
        <div>
            <header class="parking_center">
                <h1>BYU-I Parking</h1>
            </header>        
        </div>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                <li><a href="lot_view.php">Parking</a></li>
                <li class="active"><a href="enter_info.php">Check In</a></li>
                <li><a href="checkout.php">Check Out</a></li>
                <li><a href="reserve.php">Reserve</a></li> 
                <li><a href="sign_out.php">Sign Out</a></li>               
                </ul>
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4">
            <div class="my_layout">
            <form action="insert_checkin.php" method="post">
                <label for="lot">Parking Lot</label><br>
                <select name="plot" id="lot" onchange="pass(this)">
                    <option value="Taylor">Taylor</option>
                    <option value="STC">STC</option>
                    <option value="Snow">Snow</option>
                    <option value="Kimball">Kimball</option>
                    <option value="I-Center">I-Center</option>
                </select><br>
                <label for="pass">Parking Pass</label><br>
                <select name="ppass" id="pass">
                    <option id="north" value="North">North</option>
                    <option id="south" value="South">South</option>
                    <option id="admin" value="Admin">Admin</option>
                </select><br>
                <input type="submit" value="Submit">
            </form>
            </div><br><br>
            <div class="my_layout">
                <h2 class='parking_center'>My Parking Log</h2>
                <table class="table">
                    <tr>
                       <th>Lot</th>
                       <th>Pass</th>
                       <th>Start Date</th>
                       <th>Start Time</th> 
                    </tr>
                <?php
                    foreach ($logs as $log) {
                        $lot = $log['lot_location'];
                        $pass = $log['parking_pass'];
                        $start_date = $log['start_date'];
                        $start_time = $log['start_time'];
                        echo "<tr><td>$lot</td><td>$pass</td><td>$start_date</td><td>$start_time</td></tr>";

                    }               
                ?>        
                </table>        
            </div>
        </div>
    </body>
</html>