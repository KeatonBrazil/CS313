<?php 
    require('notes_db.php');
    $db = get_db();

    $course = $_GET['course_id'];

    $query = 'SELECT id, name, course_code FROM course WHERE id=:id';
    $statement = $db->prepare($query);
    $statement->bindValue(':id', $course_id, PDO::PARAM_INT);
    $statement->execute();
    $course = $statement->fetch(PDO::FETCH_ASSOC);

    $query = 'SELECT id, date, content FROM note WHERE course_id=:course_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
    $statement->execute();
    $notes = $statement->fetchAll(PDO::FETCH_ASSOC);
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
    <input type="date" name="date"><br>
    <input type="hidden" name="course_id" value="<?php echo $course_id; ?>">
    <textarea name="content" cols="30" rows="10"></textarea><br>
    <input type="submit" value="insert_note">
</form>

<?php
foreach ($notes as $note) {
    $date = $note['date'];
    $content = $note['content'];
    echo "<p>Date: $date</p>";
    echo "<p>$content</p>";
}
?>
</body>
</html>