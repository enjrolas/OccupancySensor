<?php
$username="hackjam";
$password="XXXXXXXXX";
$host="localhost";
$database="occupancy";

$connection = mysql_connect($host, $username, $password) or die ('Error connecting to mysql');
mysql_select_db($database, $connection);


?>
