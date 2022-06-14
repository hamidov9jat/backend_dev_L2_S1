<?php

// you can change to your host if you want to see changes
ini_set("display_errors", 1);
$host = "mysql-nijat-hamidov.alwaysdata.net";
$user = "214864_l2s2";
$passwd = "vt0roy_semester2021";
$bd = "nijat-hamidov_pw4_l2";

//$link=mysqli_connect()
$link = mysqli_connect($host, $user, $passwd, $bd);
mysqli_set_charset($link, "utf-8");

//if mysqli_connect_errno
if(mysqli_connect_errno()){
    echo "Error No :".mysqli_connect_errno()." , Msg : ".mysqli_connect_error()."<br>";
    exit();
}