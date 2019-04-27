<?php
include('server.php');

//init variables

$username = $_SESSION['username'];
$email = "";
$errors = array();

//connect to DB

$db = mysqli_connect('localhost', 'root', '', 'mywebsite') or die("could not connect to database");

//register users
if (isset($_POST['addBook'])) {
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $author = mysqli_escape_string($db, $_POST['author']);
    $language = mysqli_escape_string($db, $_POST['language']);
    $type = mysqli_escape_string($db, $_POST['type']);
    $price = mysqli_escape_string($db, $_POST['price']);
    $publicationDate = mysqli_escape_string($db, $_POST['publication']);
    $reference = mysqli_escape_string($db, $_POST[ 'reference']);
    $country = mysqli_escape_string($db, $_POST[ 'country']);
    $description = mysqli_escape_string($db, $_POST[ 'description']);
    $target = "booksCovers/" . basename($_FILES['bookCover']['name']);
    $image = $_FILES['bookCover']['name'];


    //form validation

    if (empty($title)) {
        array_push($errors, "Title is required");
    }

    if (empty($author)) {
        array_push($errors, "Author is required");
    }
    if (empty( $language)) {
        array_push($errors, "language is required");
    }
    if (empty( $type)) {
        array_push($errors, "type is required");
    }
    if (empty( $price)) {
        array_push($errors, "price is required");
    }
    if (empty( $publicationDate)) {
        array_push($errors, "publication date is required");
    }
    if (empty( $reference)) {
        array_push($errors, "reference is required");
    }
    if (empty( $country)) {
        array_push($errors, "country date is required");
    }
    if (empty( $description)) {
        array_push($errors, "description is required");
    }
    if (empty( $image)) {
        array_push($errors, "image date is required");
    }
    

    //check db for existing user with the same username

   /*  $user_check_query = "SELECT * FROM user WHERE username = '$username' or email = '$email' LIMIT 1";
    $results = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($results);

    if ($user) {
        if ($user['username'] === $username) {
            array_push($errors, "Username already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "This email id already has a registered username");
        }
    } */

    //register user if no errors

    if (count($errors) == 0) {
        mysqli_query($db, "INSERT INTO books (bookname, owner, description, price, available, cover) VALUES ('$title', '$username', '$description', '$price', '$type', '$image');");
        header('location: mybooks.php');
    }
}
?>