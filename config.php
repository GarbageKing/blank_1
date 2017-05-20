<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "messages";
$site = "http://localhost/blank_1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
