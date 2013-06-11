<?php

include '../../config/config.php';
$id_file = $_POST['id-file'];
$deskripsi = $_POST['deskripsi'];
$sql = "UPDATE file SET deskripsi_file='$deskripsi' WHERE id_file='$id_file'";
$result = mysql_query($sql) or die(mysql_error());
if ($result) {
    header('location:../index.php?page=files');
} else {
    header('location:../index.php?page=edit-file&error=1&id=' . $id_file);
}
?>
