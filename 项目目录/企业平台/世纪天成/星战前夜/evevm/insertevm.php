<?php
$hostname = SAE_MYSQL_HOST_M;
$dbuser = SAE_MYSQL_USER;
$dbpass = SAE_MYSQL_PASS;
$dbname = SAE_MYSQL_DB;
$dbport = SAE_MYSQL_PORT;
$con =  mysqli_connect($hostname,$dbuser,$dbpass,$dbname,$dbport);//连接sql
if (!$con)
  {
  die('Could not connect: ' .mysql_error());
  }

mysqli_select_db($con,"app_3a3online");//选择数据库

$sql="INSERT INTO Market(sale,buy,price,word)VALUES('$_POST[sale]','$_POST[buy]','$_POST[price]','$_POST[word]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' .mysqli_error($con));
  }
echo "1 record added";

mysqli_close($con)
?>