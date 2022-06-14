<?php

include 'connect_db.php';

$id=0;
$new_name = '';
$new_password = '';
$update = false;


if (isset($_POST['save'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT into `users` (username, password, registration_date)
                     VALUES ('$username', '$password', CURRENT_DATE())";

    $res = mysqli_query($link, $query) or die(mysqli_error());

    header("Location: welcome.php");

}
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

//    $link->query() or die($link->error());
    $res = mysqli_query($link, "DELETE FROM `users` WHERE  id=$id") or die(mysqli_error($link));

//    header("Location: welcome.php");

}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
//    $res = $link->query("SELECT * FROM `users` WHERE  id=$id") or die($link->error());
    $res = mysqli_query($link, "SELECT * FROM `users` WHERE  id=$id") or die(mysqli_error($link));

    if (mysqli_num_rows($res) == 1) {
        $row = $res->fetch_array();
        $new_name = $row['username'];
        $new_password = $row['password'];
    }

}
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $new_name = $_POST['username'];
    $new_password = $_POST['password'];

    $res = mysqli_query($link, "UPDATE `users` SET username='$new_name', password='$new_password' WHERE  id=$id") or die(mysqli_error($link));

    header("Location: welcome.php");

}
