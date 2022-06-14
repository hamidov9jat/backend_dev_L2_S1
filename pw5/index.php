<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$message = "";
if (count($_POST) > 0) {
    //    $link = mysqli_connect("mysql-nijat-hamidov.alwaysdata.net",
    //        "214864_l2s2",
    //        "vt0roy_semester2021",
    //        "nijat-hamidov_pw5") or die('Unable To connect');

    include_once "connect_db.php";
    global $link;

    $result_from_logged_user = mysqli_query($link, "SELECT * FROM registered_users WHERE user_name='" . $_POST["user_name"] . "' and password = '" . $_POST["password"] . "'");

    $row_in_logged_users = mysqli_fetch_array($result_from_logged_user);

    if (is_array($row_in_logged_users)) {
//        $_SESSION["id"] = $row_in_logged_users['id'];
//        $_SESSION["name"] = $row_in_logged_users['name'];
        $_SESSION["id"] = $row_in_logged_users['id'];
        $_SESSION["name"] = $row_in_logged_users['name'];
    } else {
        $message = "Invalid Username or Password! Please register first!";
    }
}
if (isset($_SESSION["id"])) {
    header("Location: https://nijat-hamidov.alwaysdata.net/back-end-development-l2s1/pw5/index.php");
}
?>

<head>
    <meta charset="UTF-8">
    <title>My webpage</title>
</head>
<body>
<form name="frmUser" method="post" action="" align="center">
    <div class="message">
        <?php if ($message != "") {
            echo $message;
        } ?>
    </div>

    <h3 align="center">Login Here</h3>
    Username:<br>
    <label>
        <input type="text" name="user_name">
    </label>
    <br>
    Password:<br>
    <label>
        <input type="password" name="password">
    </label>
    <br><br>
<!--    <input type="submit" name="submit" value="Submit">-->
    <input type="submit" name="submit" value="Login">
    <input type="submit" name="register" value="Register">

    <input type="reset">

</form>
</body>
</html>