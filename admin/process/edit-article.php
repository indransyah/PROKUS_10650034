<?php

include '../../config/config.php';
$id_artikel = $_POST['id'];
if ($_POST['judul'] != NULL AND $_POST['isi'] != NULL AND $_POST['status'] != NULL) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $status = $_POST['status'];
    $sql = "UPDATE artikel SET judul_artikel='$judul', isi_artikel='$isi', status=$status WHERE id_artikel='$id_artikel'";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=articles');
    } else {
        header('location:../index.php?page=edit-article&error=1');
    }
} else {
    header('location:../index.php?page=add-article&error=1');
}
?>