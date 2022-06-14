<?php
include("connectDB.php");
global $link;
//var_dump($_POST);

$title = $_POST['title'];
$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$address1 = $_POST['address 1'];
$address2 = $_POST['address 2'];
$zipcode = $_POST['zipcode'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sqlquery = "INSERT INTO customer (title, first_name, last_name, address_1, address_2, zip_code, phone, email, 
                     registration_date) VALUES ('$title','$first_name', '$last_name', '$address1', '$address2', '$zipcode', '$phone',
                                                '$email', CURRENT_DATE())";


if (mysqli_query($link, $sqlquery)) {
    echo "<h3>data stored in a database successfully.</h3>";
} else {
    echo "ERROR: Hush! Sorry sqlquery. " . mysqli_error($link);
}
// Change location for your website or localhost
header("Location: https://nijat-hamidov.alwaysdata.net/back-end-development-l2s1/pw4/");
exit();

