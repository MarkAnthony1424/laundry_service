
<?php
session_start();
include 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch user information
$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT first_name, last_name, address, contact_number FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $first_name = $user['first_name'];
    $last_name = $user['last_name'];
    $address = $user['address'];
    $contact_number = $user['contact_number'];
} else {
    echo "User details not found.";
    exit();
}

$order_date = date('Y-m-d');

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $categories = $_POST['category'] ?? [];
    $services = $_POST['service'] ?? [];
    $kilos = $_POST['kilo'] ?? [];
    $dropoff_date = $_POST['dropoff_date'];
    $dropoff_time = $_POST['dropoff_time'];
    $special_instructions = $_POST['special_instructions'] ?? '';

    $rates = [
        'clothes' => ['wash_fold' => 60, 'wash_iron' => 75, 'dry_cleaning' => 100],
        'jeans' => ['wash_jeans' => 70, 'dry_cleaning_jeans' => 85, 'jeans_ironing' => 110],
        'bedding' => ['wash_bedding' => 100, 'dry_cleaning_bedding' => 160, 'bedding_ironing' => 130],
    ];

    $order_summary = [];
    foreach ($categories as $category) {
        $service = $services[$category] ?? null;
        $kilo = isset($kilos[$category]) ? (float)$kilos[$category] : 0;

        if ($service && $kilo > 0) {
            $rate = $rates[$category][$service] ?? 0;
            $total = $rate * $kilo;

            $order_summary[] = [
                'category' => ucfirst($category),
                'service' => $services[$category],
                'kilos' => $kilo,
                'total' => $total
            ];
        }
    }

    // Store order details in session to be accessed in the order summary page
    $_SESSION['order_summary'] = $order_summary;
    $_SESSION['dropoff_date'] = $dropoff_date;
    $_SESSION['dropoff_time'] = $dropoff_time;
    $_SESSION['special_instructions'] = $special_instructions;

    header("Location: order_summary.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laundry Service Order Form</title>
    <link rel="stylesheet" href="css/styleservice.css">
    <link rel="stylesheet" href="css/promo.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <a href="#" class="navbar-brand">FreshFold</a>
        <ul class="navbar-nav">
            <li><a href="service_order.php">Service Order</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="subscribe_weekly.php">Subscriptions</a></li>
            <li><a href="About_us.php">About Us</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

    <div class="container">
        <h2>Laundry Service Order Form</h2>

        <!-- Promo Section -->
        <div class="promo-section">
            <div class="promo-banner">
                <h3>Free Delivery</h3>
                <p>On Orders above PHP 299</p>
                <img src="images/free_delivery.jpg" alt="Free Delivery">
            </div>
            <div class="promo-banner">
                <h3>Get 20% Off</h3>
                <p>On your first 3 orders</p>
                <img src="images/discount_offer.jpg" alt="Discount Offer">
            </div>
        </div>

        <!-- Service Section -->
        <h3>Services</h3>
        <div class="service-grid">
            <div class="service-item">
                <img src="image/wash2.jpg" alt="Washing">
                <p>Washing</p>
            </div>
            <div class="service-item">
                <img src="image/ironing.jpg" alt="Ironing">
                <p>Ironing</p>
            </div>
            <div class="service-item">
                <img src="image/wash_iron.jpg" alt="Wash & Iron">
                <p>Wash & Iron</p>
            </div>
            <div class="service-item">
                <img src="image/dry_clean.jpg" alt="Dry Clean">
                <p>Dry Clean</p>
            </div>
        </div>

        <!-- Customer Details -->
        <div class="customer-details">
            <h3>Customer Details</h3>
            <p><strong>Name:</strong> <?php echo $first_name . ' ' . $last_name; ?></p>
            <p><strong>Address:</strong> <?php echo $address; ?></p>
            <p><strong>Contact Number:</strong> <?php echo $contact_number; ?></p>
            <p><strong>Order Date:</strong> <?php echo $order_date; ?></p>
        </div>

        <form method="POST">
            <table>
                <tr>
                    <th>Category</th>
                    <th>Service</th>
                    <th>Kilos</th>
                </tr>
                <?php
                $categories = ['clothes', 'jeans', 'bedding'];
                $services = [
                    'clothes' => [
                        'wash_fold' => 'Wash & Fold (PHP 60/kg)',
                        'wash_iron' => 'Wash & Iron (PHP 75/kg)',
                        'dry_cleaning' => 'Dry Cleaning (PHP 100/kg)'
                    ],
                    'jeans' => [
                        'wash_jeans' => 'Wash & Fold (PHP 70/kg)',
                        'dry_cleaning_jeans' => 'Dry Cleaning (PHP 85/kg)',
                        'jeans_ironing' => 'Ironing (PHP 110/kg)'
                    ],
                    'bedding' => [
                        'wash_bedding' => 'Wash & Fold (PHP 100/kg)',
                        'dry_cleaning_bedding' => 'Dry Cleaning (PHP 160/kg)',
                        'bedding_ironing' => 'Ironing (PHP 130/kg)'
                    ]
                ];

                $images = [
                    'clothes' => 'image/clothes.jpg',
                    'jeans' => 'image/jeans.jpg',
                    'bedding' => 'image/bedding.jpg'
                ];

                foreach ($categories as $category) : ?>
                    <tr>
                        <td>
                            <input type="checkbox" name="category[]" value="<?php echo $category; ?>" id="<?php echo $category; ?>">
                            <label for="<?php echo $category; ?>"><?php echo ucfirst($category); ?></label>
                            <br>
                            <img src="<?php echo $images[$category]; ?>" alt="<?php echo ucfirst($category); ?>" class="service-img" style="width: 100px; height: auto; margin-top: 10px;">
                        </td>
                        <td>
                            <select name="service[<?php echo $category; ?>]" id="service_<?php echo $category; ?>">
                                <option value="">Select Service</option>
                                <?php foreach ($services[$category] as $key => $label) : ?>
                                    <option value="<?php echo $key; ?>"><?php echo $label; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </td>
                        <td>
                            <input type="number" name="kilo[<?php echo $category; ?>]" id="kilo_<?php echo $category; ?>" step="0.1" min="0">
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>

            <div class="form-group">
                <label for="special_instructions">Special Instrucrtions:</label>
                <textarea name="special_instructions" id="special_instructions" rows="4" placeholder="Laundry preferences (e.g., water temperature, detergent type, drying method)"></textarea>
            </div>

            <div class="form-group">
                <label for="dropoff_date">Drop-off Date:</label>
                <input type="date" name="dropoff_date" required min="<?php echo date('Y-m-d'); ?>">
            </div>

            <div class="form-group">
                <label for="dropoff_time">Drop-off Time:</label>
                <input type="time" name="dropoff_time" required>
            </div>

            <button type="submit">Submit Order</button>
        </form>
    </div>
</body>
</html>
