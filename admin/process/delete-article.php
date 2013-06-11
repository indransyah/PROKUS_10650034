<?php

include '../../config/config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM artikel WHERE id_artikel=$id";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=articles');
    } else {
        header('location:../index.php?page=articles&error=1');
    }
} else {
    header('location:../index.php?page=articles');
}
?>
