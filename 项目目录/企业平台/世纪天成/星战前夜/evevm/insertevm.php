<?php
$hostname = SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT;
$dbuser = SAE_MYSQL_USER;
$dbpass = SAE_MYSQL_PASS;
$dbname = SAE_MYSQL_DB;
$con =  mysql_connect($hostname,$dbuser,$dbpass);//连接sql
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("app_evevm", $con);//选择数据库

$sql="INSERT INTO Evm (Sale,Buy,Name,word)//sql创建一个表，并且填充字段的命令
VALUES
('$_POST[Sale]','$_POST[Buy]','$_POST[Name]','$_POST[word]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";

mysql_close($con)
?>