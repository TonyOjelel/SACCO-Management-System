<?php
$servername = 'localhost';  // Change this if your database is on a different server
$username = 'root';
$password = 'Elizabeth26';
$database = 'sacco';  // Change this to the actual database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// You can remove the "or die(mysqli_connect_error($conn));" part as it's not necessary

// Now, you can use the $conn object for database operations
?>
