<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user details
$stmt = $conn->prepare("SELECT first_name, last_name, address, contact_number, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $address, $contact_number,  $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="css/styleservice.css"> <!-- Link to the CSS file -->
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
    <a href="#" class="navbar-brand">FreshFold</a>
    <ul class="navbar-nav">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="service_order.php">Service Order</a></li>
        <li><a href="About_us.php">About Us</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>


    <div class="container">
        <div class="profile-pic">
            <img src="profilepic.jpg" alt="Profile Picture"> <!-- Ensure this path is correct -->
        </div>
        <div class="profile-info">
            <h2><?php echo htmlspecialchars($first_name . ' ' . $last_name); ?></h2>
            

            <div class="contact-info">
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($contact_number); ?></p>
                <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            </div>

            <a href="edit_profile.php" class="edit-button">Edit Profile</a>
        </div>
        <div class="transaction-history">
            <h2>Transaction History</h2>
            <table>
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                <?php
// Fetch transaction history
$stmt = $conn->prepare("SELECT id, order_date, 'Completed' AS status, total FROM orders WHERE user_id = ? ORDER BY order_date DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($order_id, $order_date, $status, $total);

while ($stmt->fetch()) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($order_id) . "</td>";
    echo "<td>" . htmlspecialchars($order_date) . "</td>";
    echo "<td>" . htmlspecialchars($status) . "</td>";
    echo "<td>" . htmlspecialchars($total) . "</td>";
    echo "</tr>";
}

$stmt->close();
?>

                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
