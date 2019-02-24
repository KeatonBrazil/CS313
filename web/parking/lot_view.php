<?php

session_start();
if (isset($_SESSION['username']))
{
	$username = $_SESSION['username'];
}
else
{
	header("Location: signIn.php");
	die();
}

require_once("parking_db.php");
$db = get_db();

$query = 'SELECT lot_id, lot_location, parking_pass FROM parking_lot ORDER BY lot_location, parking_pass';
$stmt = $db->prepare($query);
$stmt->execute();
$lots = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Parking Lots | BYU-I Parking</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="parking.css">
        <script src="main.js"></script>
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
                <li class="active"><a href="lot_view.php">Parking</a></li>
                <li><a href="enter_info.php">Check In</a></li>
                <li><a href="checkout.php">Check Out</a></li>
                <li><a href="reserve.php">Reserve</a></li>
                <li><a href="sign_out.php">Sign Out</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4">
            <div class="my_layout">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Parking Lot</th>
                            <th scope="col">Parking Pass</th>
                        </tr>
                    </thead>
                <?php
                    foreach ($lots as $lot) {
                        $id = $lot['lot_id'];
                        $lot_loc = $lot['lot_location'];
                        $lot_pass = $lot['parking_pass'];
                        
                        echo "<tr><td><a href='lot_detail.php?lot_id=$id'>$lot_loc</a></td><td>$lot_pass</td></tr>";
                    }

                    
                ?>
                </table>
            </div>
        </div>
    </body>
</html>