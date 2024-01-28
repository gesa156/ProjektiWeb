
<?php
// Database connection
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
                let dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length) {
                    slideIndex = 1;
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                setTimeout(showSlides, 3000); 
            }
        });
</script>
<body>

    <header class="header">
        <h2 class="logo">PawPlanet</h2>
        <nav class="navigation">
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Home.php">Home</a>
            <button class="btnLogin-popup" style="display:none;" >Login</button>
            <button class="btnLogout-popup">Logout</button>

        </nav>
    </header>
    <main>
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext"  style=" margin-left:53%;"    >1 / 4<br>Mammals</div>
                <img src="ff.jpg" style="width: 40%; height: 40%; margin-left: 22%;">
            
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext"  style=" margin-left: 54%;">2 / 4 <br>Reptiles </div>
                <img src="chameleon.jpg"  style="width: 40%; height: 40%; margin-left: 22%;">
              
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext" style="margin-left: 52%;">3 / 4 <br>Amphibians</div>
                <img src="aaa.jpg"  style="width: 40%; height: 40%; margin-left: 22%;">
             
            </div>
    
            <div class="mySlides fade">
                <div class="numbertext" style="margin-left: 59%;">4 / 4 <br>Birds</div>
                <img src="parrots.webp" style="width: 50%; height: 50%;   margin-left: 16%;">
                
            </div>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                
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
        
        <div class="page" id="page2">
            <div class="latestphoto">
                <h3>Reptiles</h3>
                <p>Page <button onclick="btnClicked(2)" class="active">2</button> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Reptiles'); ?>
    </div>
        </div>
        
        <div class="page" id="page3">
            <div class="latestphoto">
                <h3>Amphibians</h3>
                <p>Page <a href="#page3"><button onclick="btnClicked(3, this)" class="active">3</button></a> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Amphibians'); ?>
    </div>
        </div>
        

        <div class="page" id="page4">
            <div class="latestphoto">
                <h3>Birds</h3>
                <p>Page <button onclick="btnClicked(4, this)" class="active">4</button> of 4</p>
            </div>
            <div class="fotografit">
        <?php fetchAnimalsByCategory($conn, 'Birds'); ?>
    </div>
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
   

        </body>
        </html>
        