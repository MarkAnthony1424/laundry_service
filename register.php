<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Check if password and confirm password match
    if ($password === $confirm_password) {
        // Check if the email already exists
        $checkEmailStmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $checkEmailStmt->bind_param("s", $email);
        $checkEmailStmt->execute();
        $checkEmailStmt->store_result();

        if ($checkEmailStmt->num_rows > 0) {
            // Email already exists
            echo "<p>This email address is already registered.</p>";
        } else {
            // Hash the password
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Insert user into the database
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, address, contact_number, password, email) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $first_name, $last_name, $address, $contact_number, $hashed_password, $email);

            if ($stmt->execute()) {
                echo "<p>Registration successful!</p>";
                header("Location: login.php"); // Redirect to login page
                exit();
            } else {
                echo "<p>Error: " . $conn->error . "</p>";
            }

            $stmt->close();
        }

        $checkEmailStmt->close();
    } else {
        echo "<p>Passwords do not match!</p>";
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to the CSS file -->
</head>
<body>
    <div class="signup-container">
        <div class="signup-left">
            <h2>Welcome!</h2>
            <p>Let us handle your laundry with care and convenience.</p>
            <img src="image/laundrysignup.png" alt="Laundry Signup Image" style="width: 100%; height: auto;">
        </div>
        <div class="signup-right">
            <h2>Register</h2>
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required>
                </div>
                
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" required>
                </div>
                
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea id="address" name="address" rows="3" required></textarea>
                </div>
                
                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="text" id="contact_number" name="contact_number" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                </div>
                
                <div class="form-group">
                    <button type="submit">Register</button>
                </div>
                
                <div class="form-group">
                    <p>Already have an account? <a href="login.php">Sign In</a></p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
