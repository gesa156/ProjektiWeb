<?php
session_start();

if (!isset($_SESSION['username'])) {
    
    echo '<script>alert("Please log in to access this page."); window.location.href = "login.php";</script>';
    exit();
}

if (isset($_POST['donateBtn'])) {
   
    if (empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['amount'])) {
        echo "Please fill in all the required fields!";
    } else {
       
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $amount = $_POST['amount'];

        if (isset($_SESSION['username']) && isset($_POST['email']) && $_SESSION['email'] != $_POST['email']) {
            echo "Donation email must match the logged-in user's email.";
            exit();
        } 
        

        include_once 'DonationRepository.php';
        include_once 'donationn.php';

        $donation = new Donation(null, $firstname, $lastname, $email, $amount);
        $donationRepository = new DonationRepository();

        $donationRepository->insertDonation($donation);
        echo "Donation successful!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.7.0/dist/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="donationstyle.css">
</head>
<script>
        function validateForm() {
            var form = document.forms[0];
            var fields = ['firstname', 'lastname', 'email', 'city', 'state', 'nameOnCard', 'creditCardNumber', 'expMonth', 'expYear', 'cvv'];

            for (var i = 0; i < fields.length; i++) {
                var fieldName = fields[i];
                var fieldValue = form[fieldName].value.trim();

                if (!fieldValue) {
                    alert('Please fill in all the required fields.');
                    return false;
                }
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(form.email.value.trim())) {
                alert('Invalid email format.');
                return false;
            }

            var creditCardRegex = /^\d{4}-\d{4}-\d{4}-\d{4}$/;
            if (!creditCardRegex.test(form.creditCardNumber.value.trim())) {
                alert('Invalid credit card number format. Please use the format: 1111-2222-3333-4444');
                return false;
            }

            alert('Form successfully validated!');
            return true;
        }
    </script>
<body>
    
    <header class="header">
        <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
        <nav class="navigation">
            <a href="Home.php">Home</a>
            <a href="AboutUs.php">About Us</a>
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="donation.php">Donate</a>
            <button class="btnLogin-popup" style="display:none;" >Login</button>
        <a href="logout.php" >Logout</a>
        </nav>
    </header>
    <div class="container"> 
    <form action="#" method="post" >
        <div class="row">
            <div class="col">
                <h3 class="title">Billing address</h3>

                <div class="inputBox">
                    <span>First name :</span>
                    <input type="text" name="firstname" placeholder="Erza " required>
                </div>

                <div class="inputBox">
                    <span>Last name :</span>
                    <input type="text" name="lastname" placeholder="Shala" required>
                </div>

                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@example.com" required>
                </div>

    
                <div class="inputBox">
                    <span>City :</span>
                    <input type="text"  name="city"  placeholder="Prishtine" required>
                </div>

                <div class="flex">
                <div class="inputBox">
                    <span>State :</span>
                    <input type="text" name="state" placeholder="Kosove" required>
                </div>

                </div>
            </div>

                <div class="col">

                    <h3 class="title">payment</h3>
    
                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="images\card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text"  name="nameOnCard" placeholder="miss. Erza Shala" required>
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="text" name="creditCardNumber" placeholder="1111-2222-3333-4444" required>
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text"  name="expMonth" placeholder="january" required>
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" name="expYear" placeholder="2022" required>
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text"  name="cvv" placeholder="1234">
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <input type="submit" value="proceed to checkout" class="submit-btn" name="donateBtn" onclick="return validateForm()" >
        </form>
       
    </div>    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <footer>
    <div class="f">
        <h2 style="margin-left: 20px;">About PawPlanet</h2>
        <h2>Our Links</h2>
        <div class="ff">
            <a href=""><img src="images\facebook.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="images\twitter.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="images\instagram.png" alt="" width="32px" height="32px"></a>
            <a href=""><img src="images\pinterest.png" alt="" width="32px" height="32px"></a>
    
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
      <p style="margin-left: 20px; margin-top:-8%;">Copyright 2023 PawPlanet Website.<br>
         All rights reserved.</p>
      <p style="margin-right: 20px; margin-top:-8%;">Designed by Orgesa and Erza</p>
    </div>
  </footer>


    
    </body>
    </html>