<?PHP 

require_once("parking_db.php");
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
                <li><a href="login_page.php">Login</a></li>
                <li class="active"><a href="#">Signup</a></li>
                </ul>
            </div>
        </nav>
        <div class="col-md-4 col-md-offset-4">
            <div class="my_layout">
            <?php
                $fail = $_GET['fail'];
                if ($fail)
                {
                    echo "<span style='color:red;'>Please fill in the starred fields.</span>";
                }
            ?>
            <form action="add_user.php" method="post">
                <label for="user">Username<span style='color:red;'>*</span></label><br>
                <input type="text" id="user" name="uzer"><br>
                <?php
                $noMatch = $_GET['noMatch'];
                if ($noMatch)
                {
                    echo "<span style='color:red;'>The passwords don't match.</span><br>";
                }
                ?>
                <label for="pass">Password<span style='color:red;'>*</span></label><br>
                <input type="text" id="pass" name="passw"><br>
                <label for="cpass">Confirm Password<span style='color:red;'>*</span></label><br>
                <input type="text" id="cpass" name="comfpass"><br>
                <label for="email">Email<span style='color:red;'>*</span></label><br>
                <input type="text" id="email" name="e_mail"><br>
                <label for="relation">School Relation<span style='color:red;'>*</span></label><br>
                <select id="relation" name="member"><br>
                    <option value="Student">Student</option>
                    <option value="Faculty">Faculty</option>
                    <option value="Visitor">Visitor</option>
                </select><br>
                <label for="major">Department<span style='color:red;'>*</span></label><br>
                <input type="text" id="major" name="degree"><br>
                <label for="no">Pregnant?</label><br>
                <input type="radio" id="no" value="False" name="preg" checked>No<br>
                <input type="radio" id="yes" value="True" name="preg">Yes<br>
                <label for="apt">Apartment Complex</label><br>
                <input type="text" id="apt" name="home"><br>
                <input type="submit" value="Join">
                <input type="reset" value="Reset">
            </form>
            
            </div>
        </div>
        
    </body>
</html>