<?php

// Fetch database connection details from environment variables or use defaults
$host = getenv('DB_HOST') ? getenv("DB_HOST") : '172.17.0.3';
$port = getenv('DB_PORT') ? getenv("DB_PORT") : '3306';
$dbname = getenv('DB_NAME') ? getenv("DB_NAME") : 'laundry_service';
$username = getenv('DB_USERNAME') ? getenv("DB_USERNAME") : 'root';
$password = getenv('DB_PASSWORD') ? getenv("DB_PASSWORD") : '';


try {
    // Create a PDO instance with SSL support
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4"
       
            PDO::MYSQL_ATTR_SSL_CA => 'DigitalCertGlobalRootCA.crt.pem' 
        ]\
    );

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    // Handle connection errors
    die("Database connection failed: " . $e->getMessage());
}
?>
