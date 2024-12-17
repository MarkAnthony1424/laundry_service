<?php
session_start();

// Check if the order summary is set
if (!isset($_SESSION['order_summary'])) {
    header("Location: service_order.php");
    exit();
}

// Fetch order summary from session
$order_summary = $_SESSION['order_summary'];
$dropoff_date = $_SESSION['dropoff_date'];
$dropoff_time = $_SESSION['dropoff_time'];
$special_instructions = $_SESSION['special_instructions'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="css/styleservice.css">
</head>
<body>
<div class="container">
    <h2>Order Confirmation</h2>

    <h3>Order Summary:</h3>
    <table>
        <thead>
            <tr>
                <th>Category</th>
                <th>Service</th>
                <th>Kilos</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $total_amount = 0;
            foreach ($order_summary as $order) {
                $total_amount += $order['total'];
                echo "<tr>
                        <td>{$order['category']}</td>
                        <td>{$order['service']}</td>
                        <td>{$order['kilos']}</td>
                        <td>" . number_format($order['total'], 2) . "</td>
                      </tr>";
            }
            ?>
        </tbody>
    </table>

    <h3>Additional Information:</h3>
    <p><strong>Drop-off Date:</strong> <?php echo $dropoff_date; ?></p>
    <p><strong>Drop-off Time:</strong> <?php echo $dropoff_time; ?></p>
    <p><strong>Special Instructions:</strong> <?php echo nl2br($special_instructions); ?></p>

    <h3>Total Amount: <?php echo number_format($total_amount, 2); ?> PHP</h3>

    <form method="POST" action="confirm_order.php">
        <button type="submit" name="confirm_order">Confirm Order</button>
    </form>

    <form method="POST" action="service_order.php">
        <button type="submit" name="cancel_order">Cancel Order</button>
    </form>

</div>
</body>
</html>
