<?php
$servername = "localhost";
$username = "register";
$pass = "register";
$db = "register";

// Create the connection
$conn = new mysqli($servername, $username, $pass, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
print "Connected successfully";
?> 
