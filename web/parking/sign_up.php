<?PHP 

require "parking_db.php";
$db = get_db();

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Parking | Signup</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="parking.css">
        <style></style>
        <script></script>
    </head>
    <body>
        <div>
            <header class="parking_center">
                <h1>BYU-I Parking</h1>
            </header>        
        </div>
        <nav class="navbar navbar-inverse sticky_all">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                <li><a href="login_page.php">Login</a></li>
                <li class="active"><a href="#">Signup</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4">
            <form action="add_user.php">
                <label for="user">Username</label><br>
                <input type="text" id="user"><br>
                <label for="pass">Password</label><br>
                <input type="text" id="pass"><br>
                <label for="cpass">Confirm Password</label><br>
                <input type="text" id="cpass"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email"><br>
                <label for="relation">School Relation</label><br>
                <select name="" id="relation"><br>
                    <option value="">Student</option>
                    <option value="">Faculty</option>
                    <option value="">Visitor</option>
                </select>
                <label for="major">Department</label><br>
                <input type="text" id="major"><br>
                <label for="no">Pregnant?</label><br>
                <input type="radio" id="no" name="preg" checked>No<br>
                <input type="radio" id="yes" name="preg">Yes<br>
                <label for="apt">Apartment Complex</label><br>
                <input type="text" id="apt"><br>
                <input type="submit" value="Join">
                <input type="reset" value="Reset">
            </form>
        </div>
        
    </body>
</html>