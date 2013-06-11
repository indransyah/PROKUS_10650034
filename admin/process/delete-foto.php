<?php

include '../../config/config.php';
if (isset($_GET['id'])) {
    $id_album = $_GET['id-album'];
    $id = $_GET['id'];
    $sql = "SELECT * FROM foto WHERE id_foto=$id";
    $result = mysql_query($sql) or die(mysql_error());
    while ($rows = mysql_fetch_array($result)) :
        $url = '../../galleries/' . $rows['nama_foto'];
    endwhile;
    $sql = "DELETE FROM foto WHERE id_foto=$id";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        unlink($url);
        header('location:../index.php?page=upload-foto&id-album=' . $id_album);
    } else {
        header('location:../index.php?page=upload-foto&id-album=' . $id_album . '&error=1');
    }
} else {
    header('location:../index.php?page=upload-foto&id-album=' . $id_album);
}
?>
