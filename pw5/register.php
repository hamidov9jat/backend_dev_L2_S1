<?php

include_once "connect_db.php";
global $link;

$register_sqlquery = "INSERT INTO registered_users (user_name, password, 
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

