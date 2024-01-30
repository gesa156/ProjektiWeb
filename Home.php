<?php
if(isset($_SESSION['role'])){

    $_SESSION['role']=$user_role=$_SESSION['role'];
}else{
    $user_role='user';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal Planet</title>
    <link rel="stylesheet" href="styleee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.7.0/dist/ionicons/css/ionicons.min.css">
    
</head>

<body>

    <header class="header">
    <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
        <nav class="navigation">
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Home.php">Home</a>
            <a href="login.php">Login</a>
           <?php if($user_role==='admin'){?>
             <a href="dashboard.php">Dashboard </a> 
       <?php } ?>
        </nav>
    </header>
  

    <div class="cover">
        <h1 class="logo">WELCOME TO <ion-icon name="paw-sharp"></ion-icon>PLANET</h1>
        <p><b>Discover and appreciate where nature meets the web.</b><br><b>Understand the animal world!</b></p>
        <button class="btn" onclick="redirectToCollection()">Read More</button>
    </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
