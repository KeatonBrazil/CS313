<?php 
require_once("parking_db.php");
$db = get_db();

$lot = htmlspecialchars($_POST['plot']);
$pass = htmlspecialchars($_POST['ppass']);
$start_date = htmlspecialchars($_POST['sdate']);
$start_time = htmlspecialchars($_POST['stime'])

$query = 'INSERT INTO parking_info(date, content, course_id) VALUES(:date, :content, :course_id)';
$statement = $db->prepare($query);
$statement->bindValue(':date', $date, PDO::PARAM_STR);
$statement->bindValue(':content', $content, PDO::PARAM_STR);
$statement->bindValue(':course_id', $course_id, PDO::PARAM_INT);
$result = $statement->execute();

flush();
header("Location:enter_info.php");
die();
?>