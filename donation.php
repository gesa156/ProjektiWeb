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
    <title>Donation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.7.0/dist/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="donationstyle.css">
</head>

<script>
    function validateForm() {
    var form = document.forms[0];
    var fields = ['fullName', 'email', 'address', 'city', 'state', 'zipCode', 'nameOnCard', 'creditCardNumber', 'expMonth', 'expYear', 'cvv'];

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
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Home.php">Home</a>
            <button class="btnLogin-popup" style="display:none;" >Login</button>
        <a href="logout.php" >Logout</a>
        </nav>
    </header>
    <div class="container">
    <form action="#" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">Billing address</h3>

                <div class="inputBox">
                    <span>Full name :</span>
                    <input type="text" name="fullName" placeholder="Erza Shala">
                </div>

                <div class="inputBox">
                    <span>Email :</span>
                    <input type="email" name="email" placeholder="example@example.com">
                </div>

                <div class="inputBox">
                    <span>Address :</span>
                    <input type="text"  name="address" placeholder="room - street - locality">
                </div>

                <div class="inputBox">
                    <span>City :</span>
                    <input type="text"  name="city"  placeholder="Prishtine">
                </div>

                <div class="flex">
                <div class="inputBox">
                    <span>State :</span>
                    <input type="text" name="state" placeholder="Kosove">
                </div>

                <div class="inputBox">
                    <span>Zip code :</span>
                    <input type="text"  name="zipCode" placeholder="10000">
                </div>

                </div>
            </div>

                <div class="col">

                    <h3 class="title">payment</h3>
    
                    <div class="inputBox">
                        <span>cards accepted :</span>
                        <img src="card_img.png" alt="">
                    </div>
                    <div class="inputBox">
                        <span>name on card :</span>
                        <input type="text"  name="nameOnCard" placeholder="miss. Erza Shala">
                    </div>
                    <div class="inputBox">
                        <span>credit card number :</span>
                        <input type="text" name="creditCardNumber" placeholder="1111-2222-3333-4444">
                    </div>
                    <div class="inputBox">
                        <span>exp month :</span>
                        <input type="text"  name="expMonth" placeholder="january">
                    </div>
    
                    <div class="flex">
                        <div class="inputBox">
                            <span>exp year :</span>
                            <input type="number" name="expYear" placeholder="2022">
                        </div>
                        <div class="inputBox">
                            <span>CVV :</span>
                            <input type="text"  name="cvv" placeholder="1234">
                        </div>
                    </div>
    
                </div>
        
            </div>
    
            <input type="submit" value="proceed to checkout" class="submit-btn" onclick="return validateForm()">

    
        </form>
    
    </div>    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
      <p style="margin-left: 20px; margin-top:-8%;">Copyright 2023 PawPlanet Website.<br>
         All rights reserved.</p>
      <p style="margin-right: 20px; margin-top:-8%;">Designed by Orgesa and Erza</p>
    </div>
  </footer>


    
    </body>
    </html>