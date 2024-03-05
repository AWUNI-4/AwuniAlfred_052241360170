<?php
$servername = "localhost";
$username = "regular";
$password = "your_password";
$database = "regular";

// Create connection
$conn = new mysqli($servername, $regular, $password, $regular);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to the database!";

// Close the connection (optional, as PHP automatically closes it at the end of the script)
$conn->close();
?>
