<?php

require_once("parking_db.php");
$db = get_db();

$query = 'SELECT lot_id, lot_location, parking_pass FROM parking_lot';
$stmt = $db->prepare($query);
$stmt->execute();
$lots = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
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
                <li><a href="enter_info.php">Checkin</a></li>
                <li class="active"><a href="lot_view.php">Parking</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4">
            <table class="table">
                <thead class="thead-dark">
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
                    
                    echo "<tr><td scope='row'><a href='lot_detail.php?lot_id=$id'>$lot_loc</a></td><td scope='row'>$lot_pass</td></tr>";
                }

                
            ?>
            </table>
        </div>
    </body>
</html>