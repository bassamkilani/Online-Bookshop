<?php
    $db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
    $username = trim($_POST["username"]);
    $user_check_query = "SELECT * FROM billinginfo WHERE username = '$username'";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);
    if($user){
        $query = "UPDATE billinginfo SET 
        fullname = '',
        address1 = '',
        address2 = '',
        zip = '',
        city = '',
        country = ''
        WHERE username = '$username';";
        mysqli_query($db, $query);
    }
?>
