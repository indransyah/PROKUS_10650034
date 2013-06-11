<?php

session_start();
include '../../config/config.php';
$fileName = $_FILES['file']['name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$deskripsi = $_POST['deskripsi'];
$url = 'http://localhost/prokus_10650034/files/' . $fileName;
$status = 1;
$id_admin = $_SESSION['id_admin'];
if ($fileSize > 0 || $fileError == 0) {
    $move = move_uploaded_file($_FILES['file']['tmp_name'], '../../files/' . $fileName);
    if ($move) {
        echo "File sudah diupload";
        $sql = "INSERT INTO file VALUES ('','$fileName','$deskripsi','$url',now(),$status,$id_admin)";
        $result = mysql_query($sql) or die(mysql_error());
        if ($result) {
            header('location:../index.php?page=files');
        } else {
            header('location:../index.php?page=upload-file&error=1');
        }
    } else {
        echo "Gagal mengupload file";
    }
} else {
    echo "Gagal mengupload file: " . $fileError;
}
?>