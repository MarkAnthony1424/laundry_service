<?php
// db.php
$servername = "localhost";
$username = "root"; // Update if your database uses a different username
$password = ""; // Update if your database uses a password
$dbname = "laundry_service";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

