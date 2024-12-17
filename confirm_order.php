<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // If not logged in, redirect to login page
    exit();
}

// Check if the order summary is set
if (!isset($_SESSION['order_summary'])) {
    header("Location: service_order.php"); // If no order summary, redirect back to service order
    exit();
}

// Fetch order summary from session
$order_summary = $_SESSION['order_summary'];
$dropoff_date = $_SESSION['dropoff_date'];
$dropoff_time = $_SESSION['dropoff_time'];
$special_instructions = $_SESSION['special_instructions'];
$user_id = $_SESSION['user_id']; // Assuming the user is logged in

// Insert the order into the database
include 'db.php'; // Database connection

foreach ($order_summary as $order) {
    $category = $order['category'];
    $service = $order['service'];
    $kilos = $order['kilos'];
    $total = $order['total'];

    // Prepare and execute the insert statement
    $stmt = $conn->prepare("INSERT INTO orders (user_id, category, service, kilos, total, order_date, dropoff_date, dropoff_time, special_instructions) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issddssss", $user_id, $category, $service, $kilos, $total, $order_date, $dropoff_date, $dropoff_time, $special_instructions);

    if (!$stmt->execute()) {
        echo "Error: " . $stmt->error;
    }
}

// Clear the session data related to the order, but not the user session
unset($_SESSION['order_summary']);
unset($_SESSION['dropoff_date']);
unset($_SESSION['dropoff_time']);
unset($_SESSION['special_instructions']);

// Redirect back to the service order form
header("Location: service_order.php");
exit();
