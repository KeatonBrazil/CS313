<?php 
    require('notes_db.php');
    $db = get_db();

    $course = $_GET['course_id'];
?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Notes | Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    
<?php
    $course_name = $course['name'];
    $course_code = $course['course_code'];
    echo "<h1>Notes for $course_code - $course_name</h1>";

?>

<form action="insert_note.php" method="post">
    <input type="date" name="date">
    <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
    <textarea name="content" cols="30" rows="10"></textarea>
    <input type="submit" value="insert_note">
</form>

</body>
</html>