<?php
$servername = "localhost";
$username = "root";
$pass = "";
$db = "school";

// Create the connection
$conn = new mysqli($servername, $username, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
print "Connected successfully";
?> 