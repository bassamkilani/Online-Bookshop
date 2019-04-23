<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <!-- <form action="register.php" method="post">
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group ">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" name="username_login" required>
                </div>
                <div class="group ">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password" name="password_login" required>
                </div>
                <div class="group">
                    <input id="check" type="checkbox" class="check" checked>
                    <label class="keep-me" for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <button type="submit" name="login_user">SignIn</button>
                </div>
                <div class="hr"></div>
                <div class="foot-lnk">
                    <a href="#forgot">Forgot Password?</a>
                </div>
            </div>
        </div>
    </form> -->
    <form action="register.php" method="post">
        <?php include('errors.php') ?>
        <div class="sign-up-htm">
            <div class="group">
                <label for="username" class="label">Username</label>
                <input id="user" type="text" class="input" name="username" required>
            </div>
            <div class="group">
                <label for="email" class="label">Email Address</label>
                <input id="pass" type="email" class="input" name="email" required>
            </div>
            <div class="group">
                <label for="password1" class="label">Password</label>
                <input id="pass" type="password" class="input" data-type="password" name="password" required>
            </div>
            <div class="group">
                <label for="password2" class="label">Repeat Password</label>
                <input id="pass" type="password" class="input" data-type="password" name="password2" required>
            </div>
            <div class="group">
                <button type="submit" name="reg_user">Sign Up</button>
            </div>
            <div class="hr"></div>
        </div>
    </form>
</body>

</html>