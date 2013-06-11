<?php

include '../../config/config.php';
$id_admin = $_POST['id_admin'];
$password = $_POST['password'];
$confirm = $_POST['confirm-password'];
if ($password != $confirm) {
    header('location:../index.php?page=edit-user&id=' . $id_admin);
} else {
    $password = md5($password);
    $sql = "UPDATE admin SET password='$password' WHERE id_admin='$id_admin'";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=users');
    } else {
        header('location:../index.php?page=edit-user&id=' . $id_admin);
    }
}
?>