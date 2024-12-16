<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to your CSS file -->
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
.container {
    display: flex;
    width: 1100px;
    background-color: #fff;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.15);
    border-radius: 10px;
    overflow: hidden;
    
}
.form-section {
    padding: 40px;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.form-section h1 {
    margin-bottom: 10px;
    font-size: 28px;
}
.form-section p {
    margin-bottom: 20px;
    color: #666;
}
.form-group {
    margin-bottom: 15px;
    text-align: left;
}
.form-group label {
    display: block;
    margin-bottom: 5px;
}
.form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
.form-group button, .google-btn {
    width: 100%;
    padding: 12px;
    background-color: #007bff;
    color: white;
    border: none;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}
.google-btn {
    background-color: #0069f3;
    margin-top: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.google-btn img {
    margin-right: 10px;
}
.signup {
    margin-top: 15px;
    color: #666;
}
.signup a {
    color: #007bff;
    text-decoration: none;
}
.image-section {
    flex: 1;
    background: url('https://static.vecteezy.com/system/resources/previews/026/721/193/original/washing-machine-and-laundry-laundry-sticker-png.png') center center/cover no-repeat;
    position: relative;
}
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, 0.3);
}
.error {
    color: red;
    text-align: center;
    margin-bottom: 15px;
}

/* Container styling for remember-me and forgot password link */
.remember-me-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Flex styling to align checkbox with label */
.remember-me {
    display: flex;
    align-items: center;
}

/* Spacing between checkbox and label */
.remember-me label {
    margin-left: 5px; /* Adjust as needed */
}

/* Forgot password link styling */
.forgot-password {
    font-size: 14px;
    text-decoration: none;
    color: #007bff;
}

.forgot-password:hover {
    text-decoration: underline;
}

    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h1>Welcome Back</h1>
            <p>Please enter your details.</p>


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
                    <style>
                        .btn {
                            display: block;
                            margin: 20px auto;
                            padding: 10px 20px;
                            font-size: 18px;
                            color: white;
                            background-color: #007bff;
                            border: none;
                            border-radius: 5px;
                            cursor: pointer;
                            transition: background-color 0.3s ease;
                        }

                        .btn:hover {
                            background-color: #0056b3;
                        }
                    </style> </div>
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
