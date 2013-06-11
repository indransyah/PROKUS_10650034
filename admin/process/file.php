<?php

include '../../config/config.php';
$id_file = $_GET['id'];
$sql = "SELECT * FROM file";
$result = mysql_query($sql) or die(mysql_error());
while ($rows = mysql_fetch_array($result)) :
    $status = $rows['status'];
endwhile;
if ($status == 1) {
    $status = 0;
} else {
    $status = 1;
}
$sql = "UPDATE file SET status=$status WHERE id_file=$id_file";
$result = mysql_query($sql) or die(mysql_error());
if ($result) {
    header('location:../index.php?page=files');
} else {
    header('location:../index.php?page=files&error=1');
}
?>
