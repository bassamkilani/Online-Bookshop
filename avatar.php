<?php 
$msg = '';
$db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");
$username = trim($_POST["username"]);
$image = trim($_POST["image"]);
$user_check_query = "SELECT * FROM billinginfo WHERE username = '$username'";
$results = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($results);   
if($user){
    // Path to store the image.
    $target = "profilePictures/" . basename($_FILES[$image]['name']);
    //connect to db
    $db = mysqli_connect('localhost', 'root', '', 'mywebsite');
    //get submitted data
    $image = $_FILES[$image]['name'];
    $sql = "UPDATE user SET image = '$image' WHERE username = '$username';";
    mysqli_query($db, $sql);
    //moving uplodad picture to the folder
    if (move_uploaded_file($_FILES[$image]['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    } else {
        $msg = "There was an problem uploading image";
    }
}
?>