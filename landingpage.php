<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FreshFold Laundry</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f9fc;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #007b5e;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        .nav-links li {
            display: inline;
        }

        .nav-links a {
            text-decoration: none;
            color: #007b5e;
            font-size: 16px;
        }

        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 50px 20px;
        }

        .hero-content {
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 36px;
            color: #007b5e;
        }

        .hero p {
            font-size: 18px;
            color: #555555;
            margin-bottom: 20px;
        }

        .subscribe-button {
            background-color: #007b5e;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .subscribe-button:hover {
            background-color: #005a45;
        }

        .hero img {
            max-width: 80%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">FreshFold</div>
        <ul class="nav-links">
            <li><a href="#">Sign In</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">FAQ</a></li>
        </ul>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>FreshFold Laundry</h1>
            <p>Experience the ultimate laundry care with our reliable services. Now offering weekly subscriptions for your convenience.</p>
            <a href="login.php" class="subscribe-button">Subscribe Now</a>
        </div>
        <img src="image/laundry1.jpg" alt="Laundry Icon">
    </section>
</body>
</html>
