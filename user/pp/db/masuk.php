<?php

session_start();
require_once 'dbconnect.php';
$username   = $_POST['username'];
$password   = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$q = mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");


if (mysql_num_rows($q) == 1)
{
    $_SESSION['username'] = $username;
    header('location: ../index.php');
}
else
{
    header('location:login.php?error=1');
}

?>