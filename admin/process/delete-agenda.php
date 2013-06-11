<?php

include '../../config/config.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM agenda WHERE id_agenda=$id";
    $result = mysql_query($sql) or die(mysql_error());
    if ($result) {
        header('location:../index.php?page=agendas');
    } else {
        header('location:../index.php?page=agendas&error=1');
    }
} else {
    header('location:../index.php?page=agendas');
}
?>
