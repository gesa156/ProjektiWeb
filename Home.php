
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
    <link rel="stylesheet" href="styleee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.7.0/dist/ionicons/css/ionicons.min.css">
</head>
<style>
 .hidden {
        display: none;   
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
            <button class="btnLogin-popup" >Login</button>
        
        
        </nav>
    </header>
    

 
 

     <div class="cc">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="from-box login">
            <h2>Login</h2>
            <form action="#">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="emailInput" name="email" required>
                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="passwordInput"name="password" required>
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox"> Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>

                <button type="submit" name="submit" class="btn"  onclick="validateLoginForm()">Login</button>

                <div class="login-register">
                    <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register hidden">
            <h2>Registration</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">


                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="Username" name="Username" required ="Username">
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="registerEmailInput" name="registerEmailInput" required ="Email">

                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="registerPasswordInput" name="registerPasswordInput" required ="Password">
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox" id="agreeCheckbox" > I agree to the terms and conditions. </label>
                </div>

                <button type="submit" class="btn" name="registerBtn"  onclick="validateRegisterForm() ">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a>
                    </p>
                </div>

            </form>
             <?php include ('RegisterController.php');?>
        </div>
    </div>
    
   

    <div class="cover">
        <h1 class="logo">WELCOME TO&nbsp;<ion-icon name="paw-sharp"></ion-icon>PLANET</h1>
		<p> <b> Discover and appreciate where nature meets the web.</b><br> <b>Understand the animal world!</b> </p>
        <button class="btn" onclick="redirectToCollection()">Read More</button>
        
    </div>
    
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    


</body>
</html>