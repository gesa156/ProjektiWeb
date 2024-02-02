<?php
session_start();

if (!isset($_SESSION['username'])) {
    
    echo '<script>alert("Please log in to access this page."); window.location.href = "login.php";</script>';
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title> 
    <link rel="stylesheet" href="Contact.css">

    <script src="contact.js"></script>
</head>

<header class="header">
<h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
    <nav class="navigation">
    <a href="Home.php">Home</a>
    <a href="AboutUs.php">About us</a>
        <a href="collection.php">Collections</a>
        <a href="funfacts.php">Fun Facts</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="donation.php">Donate</a>
        <button class="btnLogin-popup" style="display:none;" >Login</button>
        <a href="logout.php" >Logout</a>


    </nav>
</header>
<main>
<body>
    <section>
  <div class="container" >
    <div class="contactinfo">
    <div>
<h2>Contact Info</h2>
<ul class="info">
    <li>
         <span><img src="images/location_535239.png" width="20px" height="30px"></span>
        <span>438 Mehmet Gradica<br>
          Kosovo,<br>30000</span>
    </li>

    <li>
        <span><img src="images/mail.jpg"></span>
       <span>pawplanet@gmail.com</span> 
   </li>
   <li>
    <span><img src="images/phone.png"></span>
   <span>049-333-999</span> <br><br>
</li>
</ul>
</div>
<ul class="sci">
    <li><a href="#"><img src="images/facebook.png" ></a></li>
    <li><a href="#"><img src="images/instagram.png" ></a></li>
    <li><a href="#"><img src="images/pinterest.png" ></a></li>
    <li><a href="#"><img src="images/twitter.png" ></a></li>
</ul>
  </div>
  <div class="contactForm">
    <h2>Send a Message</h2>
    <div class="formBox">
    <div class="inputBox w50">
        <input type="text " id="Nameinput" name="name"  required>
        <span>First Name</span>
    </div>
    <div class="inputBox w50">
        <div>
        <input type="text" id="Lastinput"  name="surname" required>
        <span>Last Name</span>
    </div>
    <div class="inputBox w50">
        <input type="text" id="EmailInput" name="email" required>
        <span>Email Adress</span>
    </div>
    <div class="inputBox w50">
        <input type="text" id="Mobileinput" name required>
        <span>Mobile Number</span>
    </div>
    <div class="inputBox w100">
        <textarea id="Textinput"  required></textarea>
        <span>Write your message here....</span>
    </div>
    <div class="inputBox w100">
        <button type="submit"  class="btn" name="contactBtn" onclick="validateContactForm()">Send</button>
     </div>
     </div>  
    </div>
  </div>
</section>
</main>
<footer>
    <div class="f">
        <h2 style="margin-left: 20px;">About PawPlanet</h2>
        <h2>Our Links</h2>
        <div class="ff">
            <a href=""><img src="images/facebook.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="images/twitter.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="images/instagram.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="images/pinterest.png" alt="" width="32px" height="32px"></a>
    
        </div>
    </div>
    <?php include_once 'RegisterController.php';?>
  
    <div class="footermain">
      <div class="footerleft" style="margin-left: 20px;">
          <p>"Explore our website's enchanting world, where each click unveils heartwarming tales and captivating images celebrating the beauty, resilience, and charm of the animal kingdom."</p>
      </div>
      <div class="footercenter">
      <a href="Home.php" style="color:white; margin-right: 150px;">Home</a><br><br>
        <a href="collection.php"  style="color: white; margin-right: 150px;">Collections</a><br><br>
        <a href="funfacts.php"  style="color: white; margin-right: 150px;">Fun Facts</a><br><br>
        <a href="ContactUs.php"  style="color: white; margin-right: 150px;">Contact Us</a><br><br>
        <a href="donation.php"  style="color: white; margin-right: 150px;">Donation</a><br><br>
      </div>
      
      <div class="footerright" style="margin-right: 20px;">
          <p>Terms of use</p>
          <p>Privacy Policy</p>
      </div>
  </div>
  <div class="fundi">
      <p style="margin-left: 20px; margin-top:-6%">Copyright 2023 PawPlanet Website.<br>
         All rights reserved.</p>
      <p style="margin-right: 20px; margin-top:-6% ">Designed by Orgesa and Erza</p>
    </div>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>