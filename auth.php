<?php
require_once("connect.php");
$cardId=$_REQUEST['id'];
$query="select * from cards where cardId='$cardId'";
$result=mysql_query($query) or die(mysql_error());
  if(mysql_num_rows($result)>0)
    {
      $row=mysql_fetch_array($result);
      $name=$row['name'];
    $auth=$row['authorized'];
      
    }
else
  {
    $name="who dat?";
    $auth="0";
  }
$responseString="<name>$name</name><auth>$auth</auth><id>$cardId</id>";
echo $responseString;
?>