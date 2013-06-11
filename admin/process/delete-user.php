<?php

include '../../config/config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM admin WHERE id_admin=$id";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=users');
    } else {
        header('location:../index.php?page=users&error=1');
    }
} else {
    header('location:../index.php?page=users');
}
?>
