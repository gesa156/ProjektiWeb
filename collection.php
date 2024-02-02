
<?php


/*session_start();


if (!isset($_SESSION['username'])) {
  
    header("Location: login.php");
    exit("Please log in to access this page."); 
}*/


session_start();

if (!isset($_SESSION['username'])) {
    
    echo '<script>alert("Please log in to access this page."); window.location.href = "login.php";</script>';
    exit();
}



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "animals";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function fetchAnimalsByCategory($conn, $category) {
    $sql = $conn->prepare("SELECT * FROM animal_details WHERE category = ?");
    $sql->bind_param("s", $category);
    $sql->execute();
    $result = $sql->get_result();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="rubrika">';
            echo '<img src="' . htmlspecialchars($row['image_url']) . '" alt="" class="img">';
            echo '<div class="caption"><b>' . htmlspecialchars($row['name']) . '</b> <br>' . htmlspecialchars($row['description']) . '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>No ' . htmlspecialchars($category) . ' found.</p>';
    }

    $sql->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Collection</title>
    <link rel="stylesheet" href="styleee.css">
    <link rel="stylesheet" href="collectionstyle.css">
</head>
<style>
    .hidden {
      display: none;
    }

</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const pages = document.querySelectorAll('.page');
        const pageButtons = document.querySelectorAll('.numrat button');

        function showPage(pageNumber) {
            pages.forEach((page, index) => {
                const isActive = index + 1 === pageNumber;
                if (isActive) {
                    page.classList.remove('hidden');
                } else {
                    page.classList.add('hidden');
                }
            });
        }
        function btnClicked(button) {
            const pageNumber = parseInt(button.innerText);
            showPage(pageNumber);

            pageButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');

            window.scrollTo(0, 0);
        }
        showPage(1);
        pageButtons.forEach((button) => button.addEventListener('click', () => btnClicked(button)));
    });
    

    document.addEventListener("DOMContentLoaded", function () {
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1;
            }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change image every 3 seconds
        }
        });
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
    <!-- Slider -->
    <div class="slideshow-container" style="max-width: 500px; margin: 110px auto 0 auto; position: relative; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); border-radius: 10px;">
    <div class="mySlides fade" style="display: none; width: 100%; height: auto;">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Eurasian_wolf_2.jpg" style="width: 100%; height: auto; border-radius: 10px 10px 0 0; object-fit: cover;">
    </div>
    <div class="mySlides fade" style="display: none; width: 100%; height: auto;">
        <img src="https://media.graphassets.com/resize=height:360,width:500/output=format:webp/9JrMeDVZTbO7AKMsI5NL" style="width: 100%; height: auto; border-radius: 10px 10px 0 0; object-fit: cover;">
    </div>
    <div class="mySlides fade" style="display: none; width: 100%; height: auto;">
        <img src="https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcSQ0vQ0fQvRZloilSoCObNMBPznznKNG8b7Z6IBuzKHF-qszEz8zaCshcx95vKrzzLb" style="width: 100%; height: auto; border-radius: 10px 10px 0 0; object-fit: cover;">
    </div>
    <div class="mySlides fade" style="display: none; width: 100%; height: auto;">
        <img src="https://nationaltoday.com/wp-content/uploads/2022/07/25-World-Parrot-Day-1200x834.jpg" style="width: 100%; height: auto; border-radius: 10px 10px 0 0; object-fit: cover;">
    </div>
    <div class="mySlides fade" style="display: none; width: 100%; height: auto;">
        <img src="https://discovery.sndimg.com/content/dam/images/discovery/fullset/2022/2/23/GettyImages-a0047-000046.jpg.rend.hgtvcom.1280.720.suffix/1645674239984.jpeg" style="width: 100%; height: auto; border-radius: 10px 10px 0 0; object-fit: cover;">
    </div>
</div>


        <div class="bgfoto">    
        </div>
        <div class="page" id="page1">
            <div class="latestphoto">
                <h3>Mammals</h3>
                <p>Page <a href="#page1"><button onclick="btnClicked(1, this)" class="active">1</button></a> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Mammals'); ?>
    </div>
        </div>
        
        <div class="page hidden" id="page2">
            <div class="latestphoto">
                <h3>Reptiles</h3>
                <p>Page <button onclick="btnClicked(2)" class="active">2</button> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Reptiles'); ?>
    </div>
        </div>
        
        <div class="page hidden" id="page3">
            <div class="latestphoto">
                <h3>Amphibians</h3>
                <p>Page <a href="#page3"><button onclick="btnClicked(3, this)" class="active">3</button></a> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Amphibians'); ?>
    </div>
        </div>
        

        <div class="page hidden" id="page4">
            <div class="latestphoto">
                <h3>Birds</h3>
                <p>Page <button onclick="btnClicked(4, this)" class="active">4</button> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Birds'); ?>
       
            </div>
        </div>

        <div class="permifooter">
            <div class="numrat">
                <button onclick="btnClicked(this)" id="btnPage1" class="active">1</button>
                <button onclick="btnClicked(this)">2</button>
                <button onclick="btnClicked(this)">3</button>
                <button onclick="btnClicked(this)">4</button>
            </div>
        </div>
    </main>
   
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        </body>
        </html>
        