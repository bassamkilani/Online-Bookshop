<?php
session_start();

if(isset($_GET['username'])){
    $_SESSION['msg'] = "You must login to view this page";
    header("location : login.php");
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <h1>This is the homepage</h1>
    <?php
    if(isset($_SESSION['success'])) : ?>
    
    <div>
        <h3>
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </h3>
    </div>
    <?php endif ?>

    //if the user logs in print information about them
    <?php if(isset($_SESSION['username'])) : ?>
    <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    <button><a href="goto.php?logout='1'">Log Out</a></button>
    <?php endif ?>
</body>
</html>