<?php
require_once("connect.php");
$threshhold=$_REQUEST['threshhold'];
echo $threshhold;
$query="update threshhold set threshhold='$threshhold'";
mysql_query($query) or die(mysql_error());
?>