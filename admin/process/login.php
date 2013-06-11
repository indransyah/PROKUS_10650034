<?php

session_start();
require_once '../../config/config.php';
$username = $_POST['username'];
$password = md5($_POST['password']);
$result = mysql_query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
if (mysql_num_rows($result) == 1) {
    $admin = mysql_fetch_array($result);
    $_SESSION['id_admin'] = $admin['id_admin'];
    $_SESSION['username'] = $admin['username'];
    header("location:../index.php");
} else {
    header("location:../login.php");
}
?>
