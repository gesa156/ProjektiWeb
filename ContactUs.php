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
    <h2 class="logo">PawPlanet</h2>
    <nav class="navigation">
        <a href="collection.php">Collections</a>
        <a href="funfacts.php">Fun Facts</a>
        <a href="donation.php">Donate</a>
        <a href="ContactUs.php">Contact Us</a>
        <a href="Home.php">Home</a>
        <button class="btnLogin-popup">Login</button>

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
         <span><img src="location_535239.png" width="20px" height="30px"></span>
        <span>438 Mehmet Gradica<br>
          Kosovo,<br>30000</span>
    </li>

    <li>
        <span><img src="mail.jpg"></span>
       <span>pawplanet@gmail.com</span> 
   </li>
   <li>
    <span><img src="phone.png"></span>
   <span>049-333-999</span> <br><br>
</li>
</ul>
</div>
<ul class="sci">
    <li><a href="#"><img src="facebook.png" ></a></li>
    <li><a href="#"><img src="instagram.png" ></a></li>
    <li><a href="#"><img src="pinterest.png" ></a></li>
    <li><a href="#"><img src="twitter.png" ></a></li>
</ul>
  </div>
  <div class="contactForm">
    <h2>Send a Message</h2>
    <div class="formBox">
    <div class="inputBox w50">
        <input type="text " id="Nameinput"  required>
        <span>First Name</span>
    </div>
    <div class="inputBox w50">
        <div>
        <input type="text" id="Lastinput"  required>
        <span>Last Name</span>
    </div>
    <div class="inputBox w50">
        <input type="text" id="EmailInput"  required>
        <span>Email Adress</span>
    </div>
    <div class="inputBox w50">
        <input type="text" id="Mobileinput"  required>
        <span>Mobile Number</span>
    </div>
    <div class="inputBox w100">
        <textarea id="Textinput"  required></textarea>
        <span>Write your message here....</span>
    </div>
    <div class="inputBox w100">
        <button type="submit"  class="btn" onclick="validateContactForm()">Send</button>
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
            <a href=""><img src="facebook.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="twitter.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="instagram.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="pinterest.png" alt="" width="32px" height="32px"></a>
    
        </div>
    </div>
  
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

</body>
</html>