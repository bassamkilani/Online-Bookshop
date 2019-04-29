<?php

session_start();

//init variables

$username = "";
$email = "";

$errors = array();

//connect to DB

$db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");

//register users
if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_escape_string($db, $_POST['email']);
    $password1 = mysqli_escape_string($db, $_POST['password1']);
    $password2 = mysqli_escape_string($db, $_POST['password2']);

    //form validation

    if (empty($username)) {
        array_push($errors, "Username is required");
    }

    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password1)) {
        array_push($errors, "Password is required");
    }
    if ($password1 != $password2) {
        array_push($errors, "Passwords aren't the same");
    }

    //check db for existing user with the same username

    $user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "This email id already has a registered username");
        }
    }

    //register user if no errors

    if (count($errors) == 0) {
        $password = md5($password1); //this will encrypt password
        $query = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $query);
        mysqli_query($db,"INSERT INTO billinginfo (username) VALUES ('$username')");
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('Location: ' . $_SERVER['PHP_SELF']);
    }
}

//login user

if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($db, $query);

        if (mysqli_num_rows($results)) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Logged in successfully";
            header('Location: ' . $_SERVER['PHP_SELF']);
        } else {
            $query = "SELECT * FROM user WHERE email = '$username' AND password = '$password'";
            $results = mysqli_query($db, $query);
            if (mysqli_num_rows($results)) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Logged in successfully";
                header('Location: ' . $_SERVER['PHP_SELF']);
            } else {
            array_push($errors, "Wrong username/password combination.");
        }
    }
}
}
?>