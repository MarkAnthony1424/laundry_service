<?php
session_start();

// Check if the form is submitted
if (isset($_POST['confirm']) && $_POST['confirm'] === 'yes') {
    // Connect to the database
    $mysqli = new mysqli("localhost", "root", "", "laundry_service");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Prepare order details for insertion
    $user_id = $_SESSION['user_id']; // Assuming user_id is stored in session
    $order_summary = $_SESSION['order_summary'];
    $dropoff_date = isset($_SESSION['dropoff_date']) ? $_SESSION['dropoff_date'] : '';
    $dropoff_time = isset($_SESSION['dropoff_time']) ? $_SESSION['dropoff_time'] : '';
    $special_instructions = isset($_SESSION['special_instructions']) ? $_SESSION['special_instructions'] : '';

    // Debug: Check the session data
    var_dump($order_summary);
    var_dump($dropoff_date);
    var_dump($dropoff_time);

    // Insert order details into the orders table
    $query = "INSERT INTO orders (user_id, service, kilos, total, dropoff_date, dropoff_time, special_instructions) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    // Loop through order summary and insert each item
    foreach ($order_summary as $item) {
        // Check if the category (service) and other details are present
        if (!isset($item['category']) || empty($item['category'])) {
            echo "Missing category for item!";
            continue; // Skip this item if category is missing
        }

        // Bind parameters and execute the insert query
        $stmt->bind_param("isddsss", $user_id, $item['service'], $item['kilos'], $item['total'], $dropoff_date, $dropoff_time, $special_instructions);
        $stmt->execute();
    }

    // Clear the session data to reset the order form
    unset($_SESSION['order_summary']);
    unset($_SESSION['dropoff_date']);
    unset($_SESSION['dropoff_time']);
    unset($_SESSION['special_instructions']);

    // Redirect back to the service order form
    header("Location: service_order.php");
    exit();
}

// Handle canceling the order
if (isset($_POST['cancel']) && $_POST['cancel'] === 'yes') {
    // Clear session data for the current order
    unset($_SESSION['order_summary']);
    unset($_SESSION['dropoff_date']);
    unset($_SESSION['dropoff_time']);
    unset($_SESSION['special_instructions']);

    // Redirect back to the service order form
    header("Location: service_order.php");
    exit();
}
?>
