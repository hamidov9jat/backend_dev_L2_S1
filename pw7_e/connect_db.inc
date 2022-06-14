<?php
// you can change to your host if you want to see changes

$host = "mysql-nijat-hamidov.alwaysdata.net";
$user = "214864_l2s2";
$passwd = "vt0roy_semester2021";
$bd = "nijat-hamidov_pw7_e";

$host_and_dbname = "mysql:host=" . $host . ";dbname=" . $bd;

try {
    $dbh = new PDO($host_and_dbname, $user, $passwd);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("SET NAMES 'utf8'");

    print "Connected successfully";

} catch (PDOException $e) { //if mysqli_connect_errno
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}