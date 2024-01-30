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
    } else {
        
        $error_message = "Login failed. Please check your email and password.";
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

<body>

    <header class="header">
    <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
        <nav class="navigation">
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="logout.php">Logout</a>

            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') : ?>
                <a href="dashboard.php">Dashboard</a>
            <?php endif; ?>

        </nav>
    </header>

    <?php if (!isset($_SESSION['username'])) : ?>
        
        <div class="form-container login">
            <h2>Login</h2>

            <?php if (isset($error_message)) : ?>
                <div class="error"><?php echo $error_message; ?></div>
            <?php else : ?>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" id="emailInput" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" id="passwordInput" name="password" required>
                        <label>Password</label>
                    </div>

                    <button type="submit" class="btn" name="Loginbtn">Login</button>
                    <p>Don't have an account? <a href="register.php">Register</a></p>
                </form>
            <?php endif; ?>
        </div>
    <?php else : ?>
       
        <div class="welcome">
            <?php
            echo "Welcome, " . $_SESSION['username'];
            if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
                echo ' | <a href="dashboard.php">Dashboard</a>';
            }
            ?>
        </div>
    <?php endif; ?>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
