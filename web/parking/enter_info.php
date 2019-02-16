<?php

require_once("parking_db.php");
$db = get_db();

$query = "SELECT lot_location, parking_pass, to_char(start_at_date, 'Month DD YYYY') AS start_date, to_char(start_at_time, 'HH24:MI') AS start_time FROM parking_info JOIN parking_lot USING(lot_id) ORDER BY info_id DESC";
$statement = $db->prepare($query);
$statement->execute();
$logs = $statement->fetchAll(PDO::FETCH_ASSOC);
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
                </ul>
            </div>
        </nav>
        <div class="col-md-6 col-md-offset-3">
            <div class="my_layout">
            <form action="">
                <label for="lot">Parking Destination</label><br>
                <select name="" id="lot">
                    <option value="">Taylor N parking</option>
                    <option value="">Benson A parking</option>
                    <option value="">Kymball N parking</option>
                    <option value="">Kymball A parking</option>
                    <option value="">STC S parking</option>
                </select><br>
                <label for="start_time">Arrival Time</label><br>
                <input type="time" name="" id="start_time"><br>
                <label for="start_date">Arrival Date</label><br>
                <input type="date" name="" id="start_date"><br><br>
                <input type="submit" value="Submit">
            </form>
            </div><br><br>
            <div class="my_layout">
                <h2 class='parking_center'>My Parking Log</h2>
                <table>
                    <tr>
                       <th>Lot</th>
                       <th>Pass</th>
                       <th>Start Date</th>
                       <th>Start Time</th>
                       <th>Building</th> 
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