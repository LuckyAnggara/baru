<?php

session_start();
require 'function.php';
$username = $_SESSION['username'];
$result = mysqli_query($koneksi, "UPDATE users SET status ='0' WHERE username = '$username'");
session_unset();
$_SESSION = [];
session_destroy();
header("Location: ../pages/sign-in/");
exit;


?>