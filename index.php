<?php
// Database connection parameters
$servername = "3306";
$username = "Elias Mwita";
$password = "Elias@12";
$dbname = "Elias Mang'era Mwita";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$conn->close();
?>
