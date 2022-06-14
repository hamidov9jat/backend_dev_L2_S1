<?php
require('connect_db.php');
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<div class="form">
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="logout.php">Logout</a></p>

</div>

<?php require_once 'process.php';?>


<?php
include('connect_db.php');
$query = "SELECT * FROM users";
$result = mysqli_query($link, $query) or die(mysqli_error());
?>

<div>
    <table border="1" cellspacing="2" cellpadding="2">

        <thead>
            <tr>
                <td><span style="font-family: Arial; ">id</span></td>
                <td><span style="font-family: Arial; ">User name</span></td>
                <td><span style="font-family: Arial; ">Password</span></td>
                <td><span style="font-family: Arial; ">Registration date</span></td>
                <td><span style="font-family: Arial; ">Action</span></td>
            </tr>
        </thead>

        <?php
           while ($row = $result->fetch_array()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['registration_date']; ?>
                </td>
                <td>
                <a href="welcome.php?edit=<?php echo $row['id']; ?>">Edit</a>
                <a href="welcome.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </td>
            </tr>
    <?php endwhile; ?>
    </table>

</div>

<?php //$result->free(); ?>

<form action="process.php" method="post">
    <input type="hidden" name="id" value = "<?php echo $id; ?>">
    <h1 class="login-title">Save a user or edit existing one</h1>
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $new_name; ?>" placeholder="Username"/>
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $new_password; ?>" placeholder="Password"/>
    <?php
    if ($update):
        ?>
        <button type="submit" name="update">Update</button>
    <?php else: ?>
        <button type="submit" name="save">Save</button>
    <?php endif; ?>

</form>

</body>
</html>