<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- link reset -->
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styleee.css">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@5.7.0/dist/ionicons/css/ionicons.min.css">
    <!-- links for Poppins font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            display: unset;
            min-height: unset;
            background: unset;
            margin-top: unset;
        }

        .main_wrapper {
            width: 85%;
            margin: 0 auto;
        }

        .about-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }

        .left-section {
            width: 48%;
        }

        .right-section {
            width: 48%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .paragraph {
            margin-top: 15px;
            line-height: 1.6;
        }

        .vertical-things {
            margin-top: 20px;
        }

        .vertical-thing {
            margin-bottom: 10px;
        }

        .button {
            background-color: #2ecc71;
            color: #fff;
            padding: 10px 15px;
            text-decoration: none;
            display: inline-block;
            border-radius: 5px;
            margin-top: 20px;
        }

        .images-container {
            display: flex;
            justify-content: space-between;
        }

        .main-image {
            width: 100%;
            margin-bottom: 10px;
        }

        .sub-images {
            width: 48%;
        }

        .text-primary {
            color: #ed6436 !important;
        }

        .text-secondary {
            color: #65c178 !important;
        }

        .left-section h1 {
            font-size: 55px;
            font-weight: 700;
            line-height: 1.2;
        }

        .right-section h1 {
            font-size: 55px;
            font-weight: 700;
            line-height: 1.2;
        }

        .why-choose-us-section {
            background-color: #f2f2f4;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px;
        }

        .left-section {
            width: 48%;
        }

        .right-section {
            width: 48%;
        }

        .paragraph {
            margin-top: 15px;
            line-height: 1.6;
        }

        .reasons {
            margin-top: 20px;
            width: 100%;
        }

        .reason {
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }

        .reason-icon {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .team-section {
            padding: 50px;
            text-align: center;
        }

        .team-section h1 {
            font-size: 55px;
            font-weight: 700;
            line-height: 1.2;
        }

        h2 {
            color: #3498db;
        }

        .team-member {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 30px;
        }

        .member-card {
            width: 200px;
            margin: 15px;
            position: relative;
            cursor: pointer;
        }

        .member-image {
            width: 100%;
            border-radius: 50%;
            transition: transform 0.3s ease-in-out;
        }

        .member-details {
            margin-top: 10px;
        }

        .member-name {
            font-weight: 500;
            font-size: 26px;
        }

        .member-role {
            font-style: italic;
        }

        .member-name,
        .member-role {
            margin: 5px 0;
        }

        .social-media {
            margin-top: 10px;
        }

        .social-media a {
            margin-right: 5px;
            color: #3498db;
            text-decoration: none;
        }

        .social-media a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                padding: 30px;
            }

            .left-section,
            .right-section {
                width: 100%;
                padding-top: 10px;
            }

            .sub-images {
                width: 100%;
            }

            .images-container {
                display: flex;
                flex-direction: column;
                width: 100%;
                gap: 10px;
            }

            .why-choose-us-section {
                display: flex;
                justify-content: space-between;
                align-items: center;
                flex-direction: column;
            }

            .team-member {
                flex-direction: column;
                align-items: center;
            }

            .member-card {
                width: 80%;
            }

        }
    </style>
</head>

<body>
<header class="header">
        <h2 class="logo"><ion-icon name="paw-sharp"></ion-icon>Planet</h2>
        <nav class="navigation">
        <a href="Home.php">Home</a>
        <a href="AboutUs.php">About US</a>
         <a href="collection.php">Collections</a>
         <a href="funfacts.php">Fun Facts</a>
        <a href="donation.php">Donate</a>
        <a href="ContactUs.php">Contact Us</a>
            <button class="btnLogin-popup" style="display:none;" >Login</button>
        <a href="logout.php" >Logout</a>
        </nav>
    </header>
    <section class="about_page" style="padding-top: 13rem;">
        <div class="main_wrapper">
            <div class="about-section">
                <div class="left-section">
                    <h4 class="text-secondary">About Us</h4>
                    <h1><span class="text-primary">Explore</span> the Animal Kingdom</span>
                    </h1>
                    <p class="paragraph">The Amazon Rainforest, home to unparalleled biodiversity, is under threat. Join us in our mission to conserve its wildlife, protect habitats, and support the indigenous communities that depend on this vital ecosystem.</p>
                    
                    <a href="collection.php" class="button">Explore the Amazon</a>
                </div>

                <div class="right-section">
                    <img src="https://www.shutterstock.com/image-photo/aerial-photo-river-amazon-rainforest-600nw-1677523960.jpg" alt="Main Image" class="main-image">
                    <div class="images-container">
                        <img src="https://media.istockphoto.com/id/157375891/photo/scarlet-macaws.jpg?s=612x612&w=0&k=20&c=rrvMxRyLm77jcnmnrGtdOpw0PTxo8mkNOUA_hO3RO1g=" alt="Sub Image 1" class="sub-images">
                        <img src="https://images.squarespace-cdn.com/content/v1/5c5a2aeb4d87119c580d4736/1675113525945-QJZ1CLNIXSPZM10SO8MY/IMG_3982.jpeg?format=1000w" alt="Sub Image 2" class="sub-images">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="why-choose-us-section">
        <div class="left-section">
        <img src="images/amazonn.jpg" alt="Conservation Efforts" style="width: 100%;">
        </div>
        <div class="right-section">
            <h4 class="text-secondary">Why Support Us?</h4>
            <h1><span class="text-primary">Dedicated Conservation</span> &amp; <span class="text-secondary">Education</span></h1>
            <p class="paragraph">Join us in our commitment to preserve the Amazon Rainforest, a vital ecosystem that serves as the lungs of our planet. With unmatched dedication to conservation, research, and community education, we strive to protect the diversity of life and promote sustainable living.</p>

            <div class="reasons">
                <div class="reason">
                    &#x21d2; Unmatched Conservation Efforts
                </div>
                <div class="reason">
                    &#x21d2; Research & Rehabilitation
                </div>
                <div class="reason">
                    &#x21d2; Educational Outreach
                </div>
                <div class="reason">
                    &#x21d2; Community Empowerment
                </div>
            </div>
        </div>
    </div>
</section>


    <section>
        <div class="team-section">
            <h1><span class="text-primary">Meet Our</span> <span class="text-secondary">Team Members</span></h1>
            <div class="team-member">
                <div class="member-card">
                    <img src="images/team-1.jpg" alt="Team Member 1" class="member-image">
                    <div class="member-details">
                        <div class="member-name">Orgesa Morina</div>
                        <div class="member-role">Founder & CEO</div>
                        <div class="social-media">
                            <a href="#">Facebook</a>
                            <a href="#">Twitter</a>
                            
                        </div>
                    </div>
                </div>
                <div class="member-card">
                    <img src="images/team-2.jpg" alt="Team Member 1" class="member-image">
                    <div class="member-details">
                        <div class="member-name">Erza Shala</div>
                        <div class="member-role">Chef Executive</div>
                        <div class="social-media">
                            <a href="#">Facebook</a>
                            <a href="#">Twitter</a>
                            
                        </div>
                    </div>
                </div>
                <div class="member-card">
                    <img src="images/team-3.jpg" alt="Team Member 1" class="member-image">
                    <div class="member-details">
                        <div class="member-name">Arlind Demaku</div>
                        <div class="member-role">Doctor</div>
                        <div class="social-media">
                            <a href="#">Facebook</a>
                            <a href="#">Twitter</a>
                            
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>