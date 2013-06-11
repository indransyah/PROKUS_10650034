<?php

include '../../config/config.php';
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
if ($password === $_POST['confirm-password']) {
    $sql = "INSERT INTO admin (id_admin, username, password, nama, email) VALUES ('','$username','md5($password)','$nama','$email')";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=users');
    } else {
        echo 'Error';
    }
} else {
    echo 'Error';
}
?>