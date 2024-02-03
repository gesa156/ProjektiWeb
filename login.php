<?php
session_start();
include_once 'userRepository.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 

   
    $email = $_POST['email']; 
    $password = $_POST['password'];

    $userRepository = new UserRepository();
    $user = $userRepository->checkLogin($email, $password);

    if ($user) {
   
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role']; 
    }  else {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Animal Planet</title>
    <link rel="stylesheet" href="styleee.css">
</head>
<style>
   
.dropdown {
    position: relative;
    display: inline-block;
    margin-left: 20px;
}

.dropbtn {
    background-color: #007bff; 
    color: white; 
    padding: 12px 20px; 
    font-size: 16px; 
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #0056b3; 
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f8f9fa; 
    min-width: 200px; 
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); 
    border-radius: 5px;
    padding: 12px 0; 
    z-index: 1; 
}


.dropdown-content a {
    color: #333; 
    padding: 10px 20px; 
    text-decoration: none; 
    display: block; 
    transition: background-color 0.3s;
}


.dropdown-content a:hover {
    background-color: #ddd; 
}


.dropbtn:after {
    content: ' ▼'; 
    margin-left: 5px; 
}

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
    <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
        <nav class="navigation">
        <a href="Home.php">Home</a>
        <a href="AboutUs.php">About Us</a>
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="logout.php">Logout</a>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin'): ?>
            <!-- Dropdown for admin -->
            <div class="dropdown">
                <button class="dropbtn">Dashboard</button>
                <div class="dropdown-content">
                    <a href="dashboard.php">User Dashboard</a>
                    <a href="dashboard_funfacts.php">Fun Facts Dashboard</a>
                    <a href="admin_dashboard.php">Animal Dashboard</a>
                    <a href="DonationDashboard.php">Donation Dashboard</a>

                </div>
            </div>
        <?php endif; ?>

        </nav>
    </header>

    <?php if (!isset($_SESSION['username'])) : ?>
        
        <div class="form-container login">
            <h2>Login</h2>

            <?php if (isset($error_message)) : ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php else : ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateLoginForm();">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" id="emailInput" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <!---<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>-->
                        <input type="password" id="passwordInput" name="password" required>
                        <label>Password</label>
                    </div>

                    <button type="submit" class="btn" name="Loginbtn" >Login</button>
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </form>
            <?php endif; ?>
        </div>
    <?php else : ?>
       
        <div class="welcome">
            <?php
            echo "Welcome, " . $_SESSION['username'];
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                echo ' (Admin)';
            }
            ?>
        </div>
    <?php endif; ?>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdown = document.querySelector('.dropdown');
            var dropdownContent = document.querySelector('.dropdown-content');

            dropdown.onclick = function(event) {
                dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
                event.stopPropagation();
            };

            document.addEventListener('click', function(event) {
                if (!event.target.matches('.dropbtn')) {
                    dropdownContent.style.display = 'none';
                }
            });
        });
    </script>

</body>

</html>
