<?php
$base_url = "http://localhost/prokus_10650034/";

//Database
$host = "localhost";
$username = "root";
$password = "";
$db_name = "prokus_10650034";
mysql_connect("$host", "$username", "$password") or die("cannot connect" . mysql_error());
mysql_select_db("$db_name") or die(mysql_error());
?>
