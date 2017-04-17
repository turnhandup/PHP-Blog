<?php
$mysql_hostname ="127.0.0.1";
$mysql_username ="root";
$mysql_password = "";
$mysql_database ="blog";
$db = mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password) or die ("Something is broken");
mysqli_select_db($db,$mysql_database) or die("Couldn't find database");

function db_connect(){
  $mysql_hostname ="127.0.0.1";
  $mysql_username ="root";
  $mysql_password = "";
  $mysql_database ="blog";
  $link=mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password, $mysql_database) or die ("Something is broken");
  return $link;
}
?>
