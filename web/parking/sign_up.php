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
        <script></script>
    </head>
    <body>
        <div>
            <header>

            </header>        
        </div>
        <div>
            <form action="add_user.php">
                <label for="user">Username</label>
                <input type="text" id="user">
                <label for="pass">Password</label>
                <input type="text" id="pass">
                <label for="cpass">Confirm Password</label>
                <input type="text" id="cpass">
                <label for="email">Email</label>
                <input type="text" id="email">
                <label for="relation">School Relation</label>
                <select name="" id="relation">
                    <option value="">Student</option>
                    <option value="">Faculty</option>
                    <option value="">Visitor</option>
                </select>
                <label for="major">Department</label>
                <input type="text" id="major">
                <label for="no">Pregnant?</label>
                <input type="radio" id="no" name="preg" checked> No
                <input type="radio" id="yes" name="preg"> Yes
                <label for="apt">Apartment Complex</label>
                <input type="text" id="apt">
                <input type="submit" value="Join">
                <input type="reset" value="Reset">
            </form>
        </div>
        
    </body>
</html>