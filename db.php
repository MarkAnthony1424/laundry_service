
<?php
// db.php
$DB_HOST = "localhost"; // Azure MySQL server address
$DB_USERNAME = "root"; // Azure username format
$DB_PASSWORD = ""; // Your password for the database
$DB_NAME = "laundry_service";

// Create connection
$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


