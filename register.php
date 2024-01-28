<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Animal Planet</title>
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
            <a href="login.php" class="btnLogin">Login</a> <!-- Link to login.php -->
        
        
        </nav>
    </header>

    <div class="form-container register">
        <h2>Register</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="Username" name="username" required ="Username">
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="registerEmailInput" name="email" required ="Email">

                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="registerPasswordInput" name="password" required ="Password">
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox" id="agreeCheckbox" > I agree to the terms and conditions. </label>
                </div>
            <button type="submit" class="btn" onclick="validateRegisterForm()">Register</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
             <?php include ('RegisterController.php');?>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
