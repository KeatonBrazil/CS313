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
$statement = $db->prepare($query);
$statement->execute();
$lots = $statement->fetchAll(PDO::FETCH_ASSOC);

$query2 = "SELECT DISTINCT parking_pass FROM parking_lot";
$statement = $db->prepare($query);
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
        <script></script>
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
                <select name="plot" id="lot">
                    <?php
                        foreach ($lots as $lot) {
                            $location = $lot['lot_location'];
                            echo "<option value=' " . $location . " '>$location</option>";                        
                        }
                    ?>
                </select><br>
                <label for="pass">Parking Pass</label><br>
                <select name="ppass" id="pass">
                    <?php
                        foreach ($passes as $pass) {
                            $ppass = $pass['parking_pass'];
                            echo "<option value=' " . $ppass . " '>$ppass</option>";
                        }
                    ?>
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