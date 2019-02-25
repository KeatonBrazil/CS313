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

    $lot_id = $_GET['lot_id'];
    $lot_loc = $_GET['lot_loc'];
    $lot_pass = $_GET['lot_pass'];

    $query = 'SELECT COUNT(info_id) AS capacity FROM parking_info WHERE lot_id=:lot_id';
    $stmt = $db->prepare($query);
    $stmt->bindValue(':lot_id', $lot_id, PDO::PARAM_INT);
    $stmt->execute();
    $lot = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
                </ul>
            </div>
        </nav>      
        <div class="col-md-4 col-md-offset-4">
            <div class="my_layout">  
                <h2>Spots available at <?php echo "$lot_loc - $lot_pass"; ?></h2>
            </div>
        </div>
    </body>
</html>