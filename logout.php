<?php
session_start();
unset($_SESSION['username']);
session_destroy();
header('Location: index-loggedin.php');
exit;
?>