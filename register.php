

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Animal Planet</title>
    <link rel="stylesheet" href="styleee.css">
</head>
<style>
    .form-container {
    background: transparent;
    background-color: rgba(255, 255, 255, 0.3); 
    backdrop-filter: blur(5px); 
    border-radius: 10px; 
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.18); 
}

</style>
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

    <div class="form-container register">
        <h2>Register</h2>
        <form onsubmit="return validateRegisterForm();" method="POST" >
        <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="Username" name="username" required ="Username">
                    <label>Username</label>
                </div>

                <div class="input-box">
                   <!-- <span class="icon"><ion-icon name="mail"></ion-icon></span>-->
                    <input type="email" id="registerEmailInput" name="email" required ="Email">

                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="registerPasswordInput" name="password" required ="Password">
                    <label>Password</label>
                </div>

              
            <button type="submit" class="btn" name="registerBtn">Register</button>
            <p>Already have an account? <a href="login.php">Login</a></p>
            </form>
             <?php include_once 'RegisterController.php';?>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
</body>
</html>
