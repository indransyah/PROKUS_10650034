<?php

include '../../config/config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM file WHERE id_file=$id";
    $result = mysql_query($sql) or die(mysql_error());
    while ($rows = mysql_fetch_array($result)) :
        $url = '../../files/'.$rows['nama_file'];
    endwhile;
    $sql = "DELETE FROM file WHERE id_file=$id";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        unlink($url);
        header('location:../index.php?page=files');
    } else {
        header('location:../index.php?page=files&error=1');
    }
} else {
    header('location:../index.php?page=files');
}
?>
