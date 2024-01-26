
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="collectionstyle.css">
    <style>
        /* Add any additional styles here */
    </style>
</head>
<body>
    <header class="header">
        <h2 class="logo">PawPlanet</h2>
        <nav class="navigation">
            <!-- Add navigation links similar to collection.php -->
            <a href="collection.php">Collections</a>
            <a href="funfacts.php">Fun Facts</a>
            <a href="donation.php">Donate</a>
            <a href="ContactUs.php">Contact Us</a>
            <a href="Home.php">Home</a>
            <!-- Add a logout button -->
            <a href="logout.php">Logout</a>
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

        <div class="editor">
        <form id="addAnimalForm">
            <h3>Add Animal</h3>
            <label for="animalName">Name:</label>
            <input type="text" id="animalName" name="animalName" required>
            <label for="animalCategory">Category:</label>
            <input type="text" id="animalCategory" name="animalCategory" required>
            <label for="animalImage">Image URL:</label>
            <input type="text" id="animalImage" name="animalImage" required>
            <button type="submit">Add Animal</button>
        </form>
        <!-- Example form for editing animal caption -->
        <form id="editCaptionForm">
            <h3>Edit Caption</h3>
            <label for="animalId">Animal ID:</label>
            <input type="text" id="animalId" name="animalId" required>
            <label for="newCaption">New Caption:</label>
            <input type="text" id="newCaption" name="newCaption" required>
            <button type="submit">Edit Caption</button>
        </form>
        <!-- Example form for deleting an animal -->
        <form id="deleteAnimalForm">
            <h3>Delete Animal</h3>
            <label for="animalIdToDelete">Animal ID:</label>
            <input type="text" id="animalIdToDelete" name="animalIdToDelete" required>
            <button type="submit">Delete Animal</button>
        </form>
        </div>
        <div class="page" id="page1">
            <div class="latestphoto">
                <h3>Mammals</h3>
            </div>
            <div class="fotografit">
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/Eurasian_wolf_2.jpg" alt="" class="img">
                    <div class="caption"> <b>Wolf</b> <br>The Eurasian Wolf, a highly social and intelligent predator.</div>
                </div>
                <div class="rubrika">
                    <img src="https://files.worldwildlife.org/wwfcmsprod/images/Brown_Bear_/hero_small/7h2u6tj3h3_brownbear_hero.jpg" alt="" class="img">
                    <div class="caption"> <b>Bear</b> <br>The Brown Bear, known for its strength and impressive hibernation abilities.</div>
                </div>
                <div class="rubrika">
                    <img src="https://th-thumbnailer.cdn-si-edu.com/XIhsUgi95b0G3mpm15ZlxGFBFPE=/800x800/filters:focal(800x602:801x603)/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer_public/7f/0b/7f0be491-c840-425e-90f1-916424359e9f/p1159704_web.jpg" alt="" class="img">
                    <div class="caption"> <b>Polar Bear</b> <br>The largest land carnivore, well-adapted to its icy habitat.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.fauna-flora.org/wp-content/uploads/2023/05/GettyImages-625850102-scaled-1.jpg" alt="" class="img">
                    <div class="caption"> <b>Chimpanzee</b> <br>The Chimpanzee, an intelligent and social primate, our closest living relatives.</div>
                </div>
                <div class="rubrika">
                    <img src="https://files.worldwildlife.org/wwfcmsprod/images/Tiger_resting_Bandhavgarh_National_Park_India/hero_small/6aofsvaglm_Medium_WW226365.jpg" alt="" class="img">
                    <div class="caption"> <b>Tiger</b> <br>The Tiger, a powerful big cat and an endangered species.</div>
                </div>
                <div class="rubrika">
                    <img src="https://i.natgeofe.com/k/e7ba8001-23ac-457f-aedb-abd5f2fdda62/moms5.png?w=1084.125&h=745.5" alt="" class="img">
                    <div class="caption"> <b>Elephant</b> <br>The Elephant, the largest land mammal known for its intelligence and memory.</div>
                </div>
                <div class="rubrika">
                    <img src="https://cdn.britannica.com/89/162189-050-9CFBC925/Kavango-Zambezi-Transfrontier-Conservation-Area-rhino-species-March-2012.jpg" alt="" class="img">
                    <div class="caption"> <b>Rhinoceros</b> <br>The Rhinoceros, a massive herbivore with distinctive horns and endangered status.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.mos.org/sites/dev-elvis.mos.org/files/images/main/uploads/slides/Pulsar-Bat-Header.jpg" alt="" class="img">
                    <div class="caption"> <b>Bat</b> <br>The Bat, a nocturnal mammal crucial for insect control and pollination.</div>
                </div>
                <div class="rubrika">
                    <img src="https://cdn.britannica.com/29/150929-050-547070A1/lion-Kenya-Masai-Mara-National-Reserve.jpg" alt="" class="img">
                    <div class="caption"> <b>Lion</b> <br>The Lion, the king of the jungle, known for its majestic appearance and social structure.</div>
                </div>
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/30/Vulpes_vulpes_ssp_fulvus.jpg" alt="" class="img">
                    <div class="caption"> <b>Fox</b> <br>The Fox, a clever and adaptable carnivore with a distinctive bushy tail.</div>
                </div>
                <div class="rubrika">
                    <img src="https://assets.wwf.org.au/image/upload/f_auto/q_auto/v1674791331/elcom/416/img-panda-in-tree-1000px.jpg" alt="" class="img">
                    <div class="caption"> <b>Panda</b> <br>The Panda, a symbol of conservation efforts, known for its bamboo diet.</div>
                </div>
                <div class="rubrika">
                    <img src="https://media.graphassets.com/resize=height:360,width:500/output=format:webp/9JrMeDVZTbO7AKMsI5NL" alt="" class="img">
                    <div class="caption"> <b>Cat</b> <br>The Cat, a domesticated companion with diverse breeds and playful behavior.</div>
                </div>
                <div class="rubrika">
                    <img src="https://s.abcnews.com/images/US/giraffe-gty-jt-201014_1602687277857_hpMain_16x9_1600.jpg" alt="" class="img">
                    <div class="caption"> <b>Giraffe</b> <br>The Giraffe, the world's tallest land animal, known for its long neck and unique spots.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.antarctica.gov.au/site/assets/files/45670/ia40342.1200x630.jpg" alt="" class="img">
                    <div class="caption"> <b>Blue Whale</b> <br>The Blue Whale, the largest animal on Earth, known for its massive size and gentle nature.</div>
                </div>
                <div class="rubrika">
                    <img src="https://e360.yale.edu/assets/site/_1500x1500_fit_center-center_80/Botswana-Hippos_Alamy-Small.jpg" alt="" class="img">
                    <div class="caption"> <b>Hippo</b> <br>The Hippopotamus, a large and semi-aquatic herbivore with a powerful presence.</div>
                </div>
                <div class="rubrika">
                    <img src="https://cdn.creatureandcoagency.com/uploads/2014/06/Bottlenose-dolphin-facts-3.jpg" alt="" class="img">
                    <div class="caption"> <b>Dolphin</b> <br>The Dolphin, an intelligent marine mammal known for its playful behavior and social bonds.</div>
                </div>
            </div>
        </div>
        
        <div class="page" id="page2">
            <div class="latestphoto">
                <h3>Reptiles</h3>
            </div>
            <div class="fotografit">
                <div class="rubrika">
                    <img src="regal.avif" alt="" class="img">
                    <div class="caption"> <b>Regal Horned Lizard</b> <br>Known for its unique horns and flattened body.</div>
                </div>
                <div class="rubrika">
                    <img src="https://cdn.mos.cms.futurecdn.net/B3iinpTazCJnx4LskepukZ-1200-80.jpg" alt="" class="img">
                    <div class="caption"> <b>Crocodiles</b> <br>Ancient reptiles with powerful jaws and a stealthy aquatic lifestyle.</div>
                </div>
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/American_Alligator.jpg/330px-American_Alligator.jpg" alt="" class="img">
                    <div class="caption"> <b>American Alligator</b> <br>A large and powerful reptile native to the southeastern United States.</div>
                </div>
                <div class="rubrika">
                    <img src="chameleon.jpg" alt="" class="img">
                    <div class="caption"> <b>Chameleon</b> <br>A master of camouflage with the ability to change color to blend into its surroundings.</div>
                </div>
                <div class="rubrika">
                    <img src="Gecko.jpeg" alt="" class="img">
                    <div class="caption"> <b>Gecko</b> <br>A small lizard known for its adhesive toe pads allowing it to climb on various surfaces.</div>
                </div>
                <div class="rubrika">
                    <img src="https://i.natgeofe.com/n/4ab840f4-92fb-424c-a642-f58105e0b07d/NationalGeographic_1066541_4x3.jpg" alt="" class="img">
                    <div class="caption"> <b>Gila monster</b> <br>A venomous lizard found in the southwestern United States and Mexico.</div>
                </div>
                <div class="rubrika">
                    <img src="dd.jpeg" alt="" class="img">
                    <div class="caption"> <b>Komodo dragon</b> <br>The world's largest lizard, known for its impressive size and deadly bite.</div>
                </div>
                <div class="rubrika">
                    <img src="Boa Constrictor.jpeg" alt="" class="img">
                    <div class="caption"> <b>Boa Constrictor</b> <br>A large snake known for its powerful constriction method when hunting prey.</div>
                </div>
                <div class="rubrika">
                    <img src="Burmese Python.jpeg" alt="" class="img">
                    <div class="caption"> <b>Burmese Python</b> <br>One of the largest snake species, known for its beautiful pattern and size.</div>
                </div>
                <div class="rubrika">
                    <img src="Anaconda.jpeg" alt="" class="img">
                    <div class="caption"> <b>Anaconda</b> <br>A large aquatic snake, known for its incredible size.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.naturesafariindia.com/wp-content/uploads/2023/10/King-cobra-in-Kaziranga-national-park-india-930x620.jpg" alt="" class="img">
                    <div class="caption"> <b>King Cobra</b> <br>The world's longest venomous snake, known for its impressive hood and deadly bite.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.anipedia.net/imagenes/serpientes-cascabel-800x375.jpg" alt="" class="img">
                    <div class="caption"> <b>Rattlesnake</b> <br>A venomous snake with a distinctive rattle on its tail used as a warning signal.</div>
                </div>
                <div class="rubrika">
                    <img src="https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcSQ0vQ0fQvRZloilSoCObNMBPznznKNG8b7Z6IBuzKHF-qszEz8zaCshcx95vKrzzLb" alt="" class="img">
                    <div class="caption"> <b>Turtles</b> <br>Characterized by their protective shells and slow-moving nature.</div>
                </div>
                <div class="rubrika">
                    <img src="Desert Tortoise.jpeg" alt="" class="img">
                    <div class="caption"> <b>Desert Tortoise</b> <br>A slow-moving reptile adapted to arid desert environments.</div>
                </div>
                <div class="rubrika">
                    <img src="galápagos tortoise.jpg" alt="" class="img">
                    <div class="caption"> <b>Galápagos Tortoise</b> <br>Native to the Galápagos Islands known for its longevity.</div>
                </div>
                <div class="rubrika">
                    <img src="Green Sea Turtle.avif" alt="" class="img">
                    <div class="caption"> <b>Green Sea Turtle</b> <br>Recognized for its herbivorous diet and vibrant green color.</div>
                </div>
                <div class="rubrika">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP4-JVVN06ml94zPG2lMYspr4Ah4pONAqxh7exfLHzznc-LhA6LCoKqDIMkLmePgF3iAA&usqp=CAU" alt="" class="img">
                    <div class="caption"> <b>Loggerhead Sea Turtle</b> <br>Known for its powerful jaw and distinctive head shape.</div>
                </div>
            </div>
        </div>
        
        <div class="page" id="page3">
            <div class="latestphoto">
                <h3>Amphibians</h3>
            </div>
            <div class="fotografit">
                <div class="rubrika">
                    <img src="https://static.scientificamerican.com/sciam/cache/file/41DF7DA0-EE58-4259-AA815A390FB37C55_source.jpg" alt="" class="img">
                    <div class="caption"> <b>Frog</b> <br>The Frog, an amphibian known for its distinctive jumping ability and unique croaking sounds.</div>
                </div>
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Hynobius_fossigenus.png/640px-Hynobius_fossigenus.png" alt="" class="img">
                    <div class="caption"> <b>Salamander</b> <br>The Salamander, a group of amphibians with a wide range of habitats and appearances.</div>
                </div>
                <div class="rubrika">
                    <img src="https://c402277.ssl.cf1.rackcdn.com/photos/20852/images/magazine_medium/axolotl_WWsummer2021.jpg?1618758847" alt="" class="img">
                    <div class="caption"> <b>Axolotl</b> <br>Known for its regenerative abilities and neotenic features.</div>
                </div>
                <div class="rubrika">
                    <img src="https://animals.sandiegozoo.org/sites/default/files/2020-02/salamander-giant_0.jpg" alt="" class="img">
                    <div class="caption"> <b>Giant Salamanders</b> <br>The Giant Salamanders, found in freshwater habitats with a fascinating life cycle.</div>
                </div>
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Centrolene_buckleyi01.jpeg/330px-Centrolene_buckleyi01.jpeg" alt="" class="img">
                    <div class="caption"> <b>Lissamphibia</b> <br>Lissamphibia, a subclass of amphibians including frogs, salamanders, and caecilians.</div>
                </div>
                <div class="rubrika">
                    <img src="https://mdc.mo.gov/sites/default/files/mo_nature/media/images/2010/05/american_toad.jpg" alt="" class="img">
                    <div class="caption"> <b>Toads</b> <br>Toads, amphibians characterized by dry, warty skin and parotoid glands.</div>
                </div>
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Siren_intermedia_nettingi_UMFS_2015_1.JPG/220px-Siren_intermedia_nettingi_UMFS_2015_1.JPG" alt="" class="img">
                    <div class="caption"> <b>Lesser Siren</b> <br>The Lesser Siren, an eel-like amphibian found in aquatic environments.</div>
                </div>
            </div>
        </div>
        

        <div class="page" id="page4">
            <div class="latestphoto">
                <h3>Birds</h3>
            </div>
            <div class="fotografit">
                <div class="rubrika">
                    <img src="https://www.allaboutbirds.org/guide/assets/photo/308074031-480px.jpg" alt="" class="img">
                    <div class="caption"> <b>Pigeon</b> <br>The Pigeon, a common and adaptable bird found in urban areas worldwide.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.allaboutbirds.org/guide/assets/photo/297363481-480px.jpg" alt="" class="img">
                    <div class="caption"> <b>Owl</b> <br>The Owl, a nocturnal bird of prey known for its silent flight and keen hunting skills.</div>
                </div>
                <div class="rubrika">
                    <img src="https://nzbirdsonline.org.nz/sites/all/files/2X2A1697%20King%20Penguin%20bol.jpg" alt="" class="img">
                    <div class="caption"> <b>Penguins</b> <br>Penguins,birds adapted to aquatic life, known for their unique waddling walk.</div>
                </div>
                <div class="rubrika">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Woodpecker_20040529_151837_1c_cropped.JPG/640px-Woodpecker_20040529_151837_1c_cropped.JPG" alt="" class="img">
                    <div class="caption"> <b>Woodpeckers</b> <br>Woodpeckers, birds with specialized beaks for drilling into tree bark in search of insects.</div>
                </div>
                <div class="rubrika">
                    <img src="https://media.audubon.org/nas_birdapi/web_apa_2015_lorirothstein_278631_bald_eagle_kk-adult.jpg" alt="" class="img">
                    <div class="caption"> <b>Bald Eagle</b> <br>The Bald Eagle, a majestic bird of prey and a symbol of freedom and strength.</div>
                </div>
                <div class="rubrika">
                    <img src="https://res.cloudinary.com/roundglass/image/upload/w_1104,h_736,c_fill/q_auto:best,f_auto/v1632484088/rg/collective/media/common-kingfisher-dhritiman-mukherjee-1632484087720.jpg" alt="" class="img">
                    <div class="caption"> <b>Kingfisher</b> <br>The Kingfisher, a brightly colored bird known for its diving skills to catch fish.</div>
                </div>
                <div class="rubrika">
                    <img src="https://nationaltoday.com/wp-content/uploads/2022/07/25-World-Parrot-Day-1200x834.jpg" alt="" class="img">
                    <div class="caption"> <b>Parrot</b> <br>The Parrot, an intelligent and colorful bird known for its ability to mimic human speech.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.treehugger.com/thmb/RXeq-0l-3gU8i8f7DBbxUYXYXjI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-521324136-634374426780412bbd2fdb3bb8c0ba2a.jpg" alt="" class="img">
                    <div class="caption"> <b>Ostriches</b> <br>Ostriches, the largest and heaviest bird species, known for their impressive running speed.</div>
                </div>
                <div class="rubrika">
                    <img src="https://www.rogersgardens.com/cdn/shop/articles/costa_s_hummingbird.jpg?v=1690393363" alt="" class="img">
                    <div class="caption"> <b>Hummingbirds</b> <br>Hummingbirds are the only birds that can fly backwards.</div>
                </div>
            </div>

    </main>

    <!-- Include your JavaScript file for handling form submissions and other functionality -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
    // Add event listener for the "Add Animal" form submission
    document.getElementById("addAnimalForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Prevent the default form submission behavior
        
        // Retrieve form data
        let animalName = document.getElementById("animalName").value;
        let animalCategory = document.getElementById("animalCategory").value;
        let animalImage = document.getElementById("animalImage").value;

        // Create a FormData object to send form data
        let formData = new FormData();
        formData.append('animalName', animalName);
        formData.append('animalCategory', animalCategory);
        formData.append('animalImage', animalImage);

        // Send AJAX request to add animal
        fetch('add_animal.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Parse response JSON
        })
        .then(data => {
            // Handle success response
            console.log('Success:', data);
        })
        .catch(error => {
            // Handle error
            console.error('Error:', error);
        });
    });
});


    </script>
</body>
</html>
