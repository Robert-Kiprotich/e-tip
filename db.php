<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="e-tip";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
