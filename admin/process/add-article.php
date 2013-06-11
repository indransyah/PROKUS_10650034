<?php

session_start();
include '../../config/config.php';
$id_admin = $_SESSION['id_admin'];
if ($_POST['judul'] != NULL AND $_POST['isi'] != NULL AND $_POST['status'] != NULL) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $status = $_POST['status'];
    $sql = "INSERT INTO artikel VALUES ('','$judul','$isi',now(),now(),$status,$id_admin)";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=articles');
    } else {
        header('location:../index.php?page=add-article&error=1');
    }
} else {
    header('location:../index.php?page=add-article&error=1');
}
?>