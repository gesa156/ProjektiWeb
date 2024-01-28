<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Animal Planet</title>
    <link rel="stylesheet" href="styleee.css">
</head>
<body>
    <header class="header">
        <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon> Planet</h2>
        <nav class="navigation">
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Home.php">Home</a>
            <a href="login.php" class="btnLogin">Login</a> 
        </nav>
    </header>

    <div class="form-container login">
        <h2>Login</h2>
        <form action="#">
        <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="emailInput"  required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="passwordInput" required>
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
            <button type="submit" class="btn" onclick="validateLoginForm()">Login</button>
            <p>Don't have an account? <a href="register.php">Register</a></p>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
