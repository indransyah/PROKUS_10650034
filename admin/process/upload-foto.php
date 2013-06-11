<?php

include '../../config/config.php';
if (isset($_GET['id-album'])) {
    $id_album = $_GET['id-album'];
    $fileName = $_FILES['file']['name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $url = 'http://localhost/prokus_10650034/galleries/' . $fileName;
    if ($fileSize > 0 || $fileError == 0) {
        $move = move_uploaded_file($_FILES['file']['tmp_name'], '../../galleries/' . $fileName);
        if ($move) {
            echo "File sudah diupload";
            $sql = "INSERT INTO foto VALUES ('','$fileName','$url',$id_album)";
            $result = mysql_query($sql) or die(mysql_error());
            if ($result) {
                header('location:../index.php?page=upload-foto&id-album=' . $id_album);
            } else {
                header('location:../index.php?page=upload-foto&id-album=' . $id_album . '&error=1');
            }
        } else {
            echo "Gagal mengupload file";
        }
    } else {
        echo "Gagal mengupload file: " . $fileError;
    }
} else {
    header('location:../index.php?page=upload-foto&id-album=' . $id_album);
}
?>
