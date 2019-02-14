<?php 
    require_once('notes_db.php');
    $db = get_db();

    $query = 'SELECT id, name, course_code FROM course';
    $statement = $db->prepare($query);
    $statement->execute();
    $courses = $statement->fetchALL(PDO::FETCH_ASSOC);
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
foreach ($courses as $course) {
    $id = $course['id'];
    $name = $course['name'];
    $course_code = $course['course_code'];

    echo "<li><a href='notes.php?course_id=$id'>$course_code - $name</li>\n";
} 
?>
</body>
</html>