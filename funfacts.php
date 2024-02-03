<?php
session_start();

// Check if the user is logged in, if not then redirect to login page
if (!isset($_SESSION['username'])) {
    echo '<script>alert("Please log in to access this page."); window.location.href = "login.php";</script>';
    exit();
}

// Database connection parameters
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "animals"; 

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch animals and their fun facts
$sql = "SELECT name, funfact, image_url FROM animal_details";
$result = $conn->query($sql);

$animals = [];
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $animals[] = $row;
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fun Facts</title>
  
  
</head>

<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    display: unset;
    margin: 0;
    padding: 0;
    background-color: unset;
    height: 100%;
    background: unset;
    background-position: unset;
    min-height: unset;
  }

  .wrapper {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    width: auto;
    height: auto;
    position: relative;
  }

  main {
    flex: 1;
    padding-top: 9rem;
  }


  .header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background-color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 99;
  }

  .logo {
    font-size: 2em;
    color: white;
    user-select: none;
  }

  .navigation a {
    position: relative;
    font-size: 1.1em;
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    margin-left: 40px;
  }

  .navigation a::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: -6px;
    width: 100%;
    height: 3px;
    background: #fff;
    border-radius: 5px;
    transform-origin: right;
    transform: scaleX(0);
    transition: transform 0.5s;
  }

  .navigation a:hover::after {
    transform-origin: left;
    transform: scaleX(1);
  }

  .navigation .btnLogin-popup {
    width: 130px;
    height: 50px;
    background: transparent;
    border: 2px solid #fff;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1.1em;
    color: #fff;
    font-weight: 500;
    margin-left: 40px;
    transition: .5s;
  }

  .navigation .btnLogin-popup:hover {
    background: #fff;
    color: black;
  }

  .container {
    max-width: 85%;
    margin: 50px auto;
    text-align: center;
    padding: 20px;
  }

  .image-gallery {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
  }

  .zoom-wrapper {
    margin: 10px;
    height: 300px;
    width: calc(25% - 20px);
    overflow: hidden;
    border-radius: 16px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    display: flex;
    flex-direction: column;
  }

  .zoom-wrapper img {
    width: 100%;
    height: 70%;
    object-fit: cover;
    border-radius: 16px;
  }

  .caption {
    padding: 20px;
    background-color: #fff;
    border-radius: 0 0 16px 16px;
    margin-top: 0px;
    overflow: hidden;
    max-height: 250px;
  }

  .zoom-wrapper:hover {
    transform: scale(1.05);
  }

  .sorting-buttons button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #fff;
    color: #000;
    border: none;
    border-radius: 5px;
    border: 1px solid #000;
  }

  .sorting-buttons button:hover {
    background-color: gray;
  }

  .bb {
    justify-content: right;
  }

  footer {
    background-color: black;
    color: white;
    padding: 20px;

  }

  .f {
    display: flex;
    justify-content: space-between;

  }



  .footermain {
    display: flex;
    color: white;
    justify-content: space-between;
  }

  .footerleft {
    text-align: left;
    width: 300px;
  }

  .footercenter>p {
    text-align: center;
    justify-content: center;


  }

  .footerright p {
    text-align: right;
  }

  .fundi {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    color: white;
  }

  .ff {
    margin-right: 20px;
  }



@media only screen and (max-width: 768px) {
    .container {
      padding: 0;
    }

    .image-gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      flex-direction: column;
    }

    .zoom-wrapper {
      margin: 10px;
      height: 300px;
      width: 100%;
    }
    .navigation {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .navigation a {
        position: relative;
        font-size: 1.1em;
        color: #fff;
        text-decoration: none;
        font-weight: 500;
        margin-left: 20px;
    }
  
  }

</style>
  

  <script>
    function sortImages(category) {
      const zoomWrappers = document.querySelectorAll('.zoom-wrapper');

      zoomWrappers.forEach(wrapper => {
        const isCategoryMatch = category === 'all' || category === wrapper.getAttribute('data-category');
        const displayStyle = isCategoryMatch ? 'block' : 'none';

        wrapper.style.display = displayStyle;
        wrapper.querySelector('.caption').style.marginTop = isCategoryMatch ? '-10px' : '0';
      });
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
<main>
  <div class="container">
    <br><br><br>

    <div class="image-gallery">
                <?php foreach ($animals as $animal): ?>
                    <div class="zoom-wrapper">
                        <img src="<?php echo htmlspecialchars($animal['image_url']); ?>" alt="<?php echo htmlspecialchars($animal['name']); ?>">
                        <div class="caption">
                            <b><?php echo htmlspecialchars($animal['name']); ?></b><br>
                            <?php echo htmlspecialchars($animal['funfact']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
  </div>
</main>
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
      <p style="margin-left: 20px; margin-top:-6%;">Copyright 2023 PawPlanet Website.<br>
         All rights reserved.</p>
      <p style="margin-right: 20px; margin-top:-6%;">Designed by Orgesa and Erza</p>
    </div>
  </footer>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>