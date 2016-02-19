<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<?php

$hostname = SAE_MYSQL_HOST_M;
$dbuser = SAE_MYSQL_USER;
$dbpass = SAE_MYSQL_PASS;
$dbname = SAE_MYSQL_DB;
$dbport = SAE_MYSQL_PORT;
$con =  mysqli_connect($hostname,$dbuser,$dbpass,$dbname,$dbport);//连接sql
$mysqli = new mysqli($hostname,$dbuser,$dbpass,$dbname,$dbport);

if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }

mysqli_select_db($con,"app_3a3online");//从sql中选择数据库

$result = $mysqli->query("SELECT * FROM Market");

echo "<table border='1'>
<tr>
<th>sale</th>
<th>buy</th>
<th>price</th>
<th>word</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['sale'] . "</td>";
  echo "<td>" . $row['buy'] . "</td>";
  echo "<td>" . $row['price'] . "</td>";
  echo "<td>" . $row['word'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>