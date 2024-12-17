<?php
session_start();
include 'db.php';  // Include the database connection

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Check if the order was successful
if (isset($_GET['status']) && $_GET['status'] == 'success') {
    $message = "Your order has been placed successfully!";
} else {
    $message = "There was an issue with your order. Please try again.";
}

// Retrieve the latest order details for the user
$query = "SELECT * FROM orders WHERE user_id = ? ORDER BY created_at DESC LIMIT 1";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Check if the query returned any rows
if ($result->num_rows > 0) {
    $order = $result->fetch_assoc();
    $service = $order['service'];
    $kilos = $order['kilos'];
    $total = $order['total'];
    $dropoff_date = $order['dropoff_date'];
    $dropoff_time = $order['dropoff_time'];
} else {
    $message = "No order found.";
}

$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="css/styleservice.css">
</head>
<body>
    <div class="container">
        <h2>Order Confirmation</h2>
        
        <!-- Display success or error message -->
        <div class="message">
            <p><?php echo $message; ?></p>
        </div>
        
        <!-- Display order details -->
        <?php if (isset($order)): ?>
            <div class="order-details">
                <h3>Order Details</h3>
                <p><strong>Service:</strong> <?php echo htmlspecialchars($service); ?></p>
                <p><strong>Kilos:</strong> <?php echo htmlspecialchars($kilos); ?> kg</p>
                <p><strong>Total Price:</strong> $<?php echo htmlspecialchars($total); ?></p>
                <p><strong>Drop-off Date:</strong> <?php echo htmlspecialchars($dropoff_date); ?></p>
                <p><strong>Drop-off Time:</strong> <?php echo htmlspecialchars($dropoff_time); ?></p>
            </div>
        <?php else: ?>
            <p>No order details available.</p>
        <?php endif; ?>
        
        <!-- Back to service order page -->
        <a href="service_order.php">Go back to Service Order</a>
    </div>
</body>
</html>
