<?php
// Use environment variables for database connection
$DB_HOST = getenv('DB_HOST') ?: 'db';  // Default to 'db' if not set in .env
$DB_USERNAME = getenv('DB_USERNAME') ?: 'app_user';  // Default to 'app_user' if not set
$DB_PASSWORD = getenv('DB_PASSWORD') ?: 'admin';  // Default to 'admin' if not set
$DB_NAME = getenv('DB_NAME') ?: 'laundry_service';  // Default to 'laundry_service' if not set

$conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME, 3306);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
