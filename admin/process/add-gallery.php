<?php

session_start();
include '../../config/config.php';
$id_admin = $_SESSION['id_admin'];
$nama = $_POST['nama'];
$deskripsi = $_POST['deskripsi'];
if ($nama != NULL OR $deskripsi != NUL) {
    $sql = "INSERT INTO album VALUES ('','$nama','$deskripsi',$id_admin)";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=galleries');
    } else {
        header('location:../index.php?page=add-gallery&error=1');
    }
} else {
    header('location:../index.php?page=add-gallery');
}
?>
