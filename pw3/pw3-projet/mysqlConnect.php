<?php

//arguments, parameters
ini_set("display_errors", 1);
$host = "mysql-nijat-hamidov.alwaysdata.net";
$user = "214864_l2s2";
$passwd = "vt0roy_semester2021";
$bd = "nijat-hamidov_pw3_l2_s2";

//$link=mysqli_connect()
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link, "utf-8");

$query = "SELECT courses.course_id, professors.first_name, professors.last_name, subjects.subject, class.class_full_name
FROM courses
INNER JOIN professors ON courses.professor_id = professors.professor_id
INNER JOIN  subjects ON `courses`.`subject_id` = subjects.subject_id
INNER JOIN class ON `courses`.class_id = `class`.class_id;";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PW3</title>
</head>
</html>
