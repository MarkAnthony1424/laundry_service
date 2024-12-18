<?php
session_start(); // Start the session at the very beginning of the file

include 'db.php'; // Include database connection
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare a statement to retrieve user data based on email
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if a user with the given email exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, log the user in
            $_SESSION['user_id'] = $user_id; // Store user ID in session
            $_SESSION['email'] = $email; // Store user email in session
            header("Location: service_order.php"); // Redirect to the service order page
            exit();
        } else {
            $_SESSION['error'] = "Invalid email or password.";
        }
    } else {
        $_SESSION['error'] = "Invalid email or password.";
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Welcome Back</h1>
            <p>Please enter your details.</p>

            <?php
            // Display error message if set
            if (isset($_SESSION['error'])) {
                echo '<p class="error">' . $_SESSION['error'] . '</p>';
                unset($_SESSION['error']); // Clear the error message
            }
            ?>

            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="**********" required>
                </div>
                <div class="form-group1" style="display: flex; align-items: center; justify-content: space-between;">
                    <div>
                        <input type="checkbox" id="remember-me" name="remember">
                        <label for="remember-me">Remember me</label>
                    </div>
                </div>
                <button type="submit" class="btn">Sign in</button>
                <button type="button" class="google-btn">
                    <img src="image/google.png" alt="Google Icon" width="20"> Sign in with Google
                </button>
            </form>
            <div class="signup">
                Don't have an account? <a href="register.php">Sign up for free!</a>
            </div>
        </div>
        <div class="image-section">
            <div class="overlay"></div>
        </div>
    </div>
</body>
</html>
