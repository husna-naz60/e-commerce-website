<?php
$host = "localhost";
$user = "root";
$pass = "";  // leave blank for XAMPP
$dbname = "eshop-db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
  echo "✅ Database connected successfully!";
}
?>
