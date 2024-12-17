<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$user_id = $_SESSION['user_id'];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Prepare the SQL statement to update the user data
    $stmt = $conn->prepare("UPDATE users SET first_name = ?, last_name = ?, address = ?, contact_number = ?, username = ?, email = ? WHERE id = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ssssssi", $first_name, $last_name, $address, $contact_number, $username, $email, $user_id);

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Profile updated successfully!";
        header("Location: profile.php");
        exit();
    } else {
        echo "Error updating profile: " . $stmt->error;
    }

    $stmt->close();
}

// Fetch user data to pre-fill the form
$stmt = $conn->prepare("SELECT first_name, last_name, address, contact_number, email FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($first_name, $last_name, $address, $contact_number, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="css/styleservice.css"> <!-- Link to the CSS file -->
</head>
<body>
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
        <h2>Edit Profile</h2>
        <form method="POST" action="edit_profile.php">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo htmlspecialchars($first_name); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo htmlspecialchars($last_name); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required><?php echo htmlspecialchars($address); ?></textarea>
            </div>
            
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" value="<?php echo htmlspecialchars($contact_number); ?>" required>
            </div>
            
           
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            </div>
            
            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
