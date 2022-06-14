<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>
<body>
    <?php
        if ($_SESSION["name"]) {
    ?>
            <h2 style='text-align: center; color: aqua'>Welcome <?php
            echo $_SESSION["name"];?>.
                Want to logout, click to<a href="logout.php">Logout</a> </h2>
        <?php
        } else echo "<h1>You need to login first </h1>";
        ?>
</body>
</html>