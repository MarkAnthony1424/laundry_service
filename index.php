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
