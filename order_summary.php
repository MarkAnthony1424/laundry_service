<?php
session_start();

// If no order summary exists in session, redirect back to the service order form
if (!isset($_SESSION['order_summary'])) {
    header("Location: service_order.php");
    exit();
}

$order_summary = $_SESSION['order_summary'];
$dropoff_date = isset($_SESSION['dropoff_date']) ? $_SESSION['dropoff_date'] : '';
$dropoff_time = isset($_SESSION['dropoff_time']) ? $_SESSION['dropoff_time'] : '';
$special_instructions = isset($_SESSION['special_instructions']) ? $_SESSION['special_instructions'] : '';

// Connect to the database
$mysqli = new mysqli("localhost", "root", "", "laundry_service");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get the user details from the users table based on the user_id in session
$user_id = $_SESSION['user_id']; // Assuming user_id is stored in session
$query = "SELECT first_name, last_name, address, contact_number FROM users WHERE id = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("i", $user_id); // Bind the user_id to the query
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Summary</title>
    <link rel="stylesheet" href="css/styleservice.css">
</head>
<body>
<div class="container">
    <h2>Order Summary</h2>

    <h3>Customer Details</h3>
    <?php if (isset($user['first_name']) && isset($user['last_name'])): ?>
        <p><strong>Name:</strong> <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></p>
    <?php endif; ?>

    <?php if (isset($user['address'])): ?>
        <p><strong>Address:</strong> <?php echo $user['address']; ?></p>
    <?php endif; ?>

    <?php if (isset($user['contact_number'])): ?>
        <p><strong>Contact Number:</strong> <?php echo $user['contact_number']; ?></p>
    <?php endif; ?>

    <p><strong>Order Date:</strong> <?php echo date('Y-m-d'); ?></p>

    <h3>Order Details</h3>
    <?php if (isset($order_summary) && is_array($order_summary)): ?>
        <table>
            <tr>
                <th>Category</th>
                <th>Service</th>
                <th>Kilos</th>
                <th>Total</th>
            </tr>
            <?php foreach ($order_summary as $item): ?>
                <tr>
                    <td><?php echo isset($item['category']) ? $item['category'] : 'N/A'; ?></td>
                    <td><?php echo isset($item['service']) ? $item['service'] : ''; ?></td>
                    <td><?php echo isset($item['kilos']) ? $item['kilos'] : ''; ?></td>
                    <td><?php echo isset($item['total']) ? $item['total'] : ''; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>No order details available.</p>
    <?php endif; ?>

    <p><strong>Drop-off Date:</strong> <?php echo $dropoff_date; ?></p>
    <p><strong>Drop-off Time:</strong> <?php echo $dropoff_time; ?></p>
    <p><strong>Special Instructions:</strong> <?php echo $special_instructions; ?></p>

    <form method="POST" action="save_order.php">
        <button type="submit" name="confirm" value="yes">Confirm Order</button>
        <button type="submit" name="cancel" value="yes">Cancel Order</button>
    </form>
</div>
</body>
</html>

<?php
// Close the database connection
$mysqli->close();
?>
