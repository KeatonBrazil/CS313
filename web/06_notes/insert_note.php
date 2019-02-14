<?php

$course_id = htmlspecialchars($_POST['course_id']);
$date = htmlspecialchars($_POST['date']);
$content = htmlspecialchars($_POST['content']);

$query = 'INSERT INTO note(date, content, course_id) VALUES(:id, :content, :course_id)';
$statement = $db->prepare($query);
$statement->execute();
$courses = $statement->fetchALL(PDO::FETCH_ASSOC);

echo "Trying to insert $course_id , $date , $content"
?>