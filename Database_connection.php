<?php

$dbservername = "localhost";
$dbusername = "username";
$dbpassword = "";
$dbname = "mydatabase";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
mysql_select_db(mydatabase);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$conn->close();

?>