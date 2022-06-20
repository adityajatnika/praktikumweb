<?php

$username = 'user';
$password = 'admin';

session_start();
$user = $_POST['username'];
$pass = $_POST['password'];

if ($user==$username && $pass==$password) {
    session_start();
    $_SESSION['username'] = $username;
    header("Location: Lat3_4a.php");
} else {
    header("Location: login.php");
}
?>
