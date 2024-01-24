
<?php
session_start();
echo "Pershendetje, " . $_SESSION['emailInput'];
echo "<button><a href='logout.php'>Log out</a></button>";

if ($_SESSION['role'] == "admin") {
    echo "<button><a href='dashboard.php'>Dashboard</a></button>";
}
?>



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
    <?php
session_start();

if(isset($_POST['loginbtn-popup'])){
    if(empty($_POST['emailInput']) || empty($_POST['passwordInput'])){
        echo "Please fill the required fields!";
    } else {
        $username = $_POST['emailInput'];
        $password = $_POST['passwordInput'];

        include_once 'users.php'; 

        foreach($users as $user){
            if($user['emailInput'] == $username && $user['passwordInput'] == $password){
                $_SESSION['emailInput'] = $username;
                $_SESSION['passwordInput'] = $password;
                $_SESSION['role'] = $user['role'];
                $_SESSION['loginTime'] = date("H:i:s");

                
                header("Location: Collection.php"); 
                exit();
            }
        }

        echo "Incorrect Username or Password!";
    }
}
?>

 
 <h3><?php echo isset($_SESSION['emailInput']) ? "Email: ".$_SESSION['emailInput']."<br>" : ""; ?></h3>
<h3><?php echo isset($_SESSION['loginTime']) ? "Login Time: ".$_SESSION['loginTime']."<br>" : ""; ?></h3>



     <div class="cc">
        <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
        <div class="from-box login">
            <h2>Login</h2>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="emailInput" required>
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

                <button type="submit" name="submit" class="btn"  onclick="validateLoginForm()">Login</button>

                <div class="login-register">
                    <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="form-box register hidden">
            <h2>Registration</h2>
            <form action="#">


                <div class="input-box">
                    <span class="icon"><ion-icon name="person"></ion-icon></span>
                    <input type="text" id="Username" required ="Username">
                    <label>Username</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <input type="email" id="registerEmailInput" required ="Email">

                    <label>Email</label>
                </div>

                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" id="registerPasswordInput" required ="Password">
                    <label>Password</label>
                </div>

                <div class="remember-forget">
                    <label><input type="checkbox" id="agreeCheckbox" > I agree to the terms and conditions. </label>
                </div>

                <button type="submit" class="btn"   onclick="validateRegisterForm() ">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="#" class="login-link">Login</a>
                    </p>
                </div>

            </form>
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