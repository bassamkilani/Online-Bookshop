<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
</head>

<body>
    <div class="header">
        <h2>Register</h2>
    </div>

    <form action="login.php" method="post">
        <?php include('errors.php') ?>
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" name="login_user">Log In</button>
        <p>Not a user? <a href="register.php"><b>Register here</b></a></p>
    </form>
</body>

</html>