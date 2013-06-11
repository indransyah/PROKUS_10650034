<?php

include '../../config/config.php';
$id_admin = $_POST['id_admin'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$sql = "UPDATE admin SET nama='$nama', email='$email', username='$username' WHERE id_admin='$id_admin'";
$result = mysql_query($sql) or die(mysql_error());
if ($result) {
    header('location:../index.php?page=users');
} else {
    echo("Ups");
}
?>