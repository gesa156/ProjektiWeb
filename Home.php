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
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.7.0/dist/ionicons/css/ionicons.min.css">
    <!-- links for Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    
</head>

<body>

    <header class="header">
    <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
        <nav class="navigation">
            <a href="Home.php">Home</a>
            <a href="AboutUs.php">About US</a>
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="donation.php">Donate</a>
            <a href="login.php">Login</a>
           <?php if($user_role==='admin'){?>
             <a href="dashboard.php">Dashboard </a> 
       <?php } ?>
        </nav>
    </header>
  
    <div class="cover txt_cover">
        <h1>WELCOME TO&nbsp;<ion-icon name="paw-sharp"></ion-icon>PLANET</h1>
        <p> <b> Discover and appreciate where nature meets the web.</b><br> <b>Understand the animal world!</b> </p>
        <a href="collection.php" class="read_btn">Read more</a>
        <!-- <button class="btn" onclick="redirectToCollection()">Read More</button> -->
    </div>


    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
