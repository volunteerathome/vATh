<meta http-equiv="Content-Type" content="text/html; charset=utf8">//申明编码格式
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

mysql_select_db("app_evevm", $con);//从sql中选择数据库

$result = mysql_query("SELECT * FROM Evm");

echo "<table border='1'>
<tr>
<th>卖</th>
<th>买</th>
<th>ID</th>
<th>发言</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['sale'] . "</td>";
  echo "<td>" . $row['buy'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['word'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>