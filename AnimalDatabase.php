<?php

class AnimalDatabase {
    private $conn;

    // Constructor to establish database connection
    public function __construct() {
        // Modify the connection parameters as needed
        $servername = "localhost";
        $username = "root";
        $password = ""; // No password
        $dbname = "animals";

        // Create connection
        $this->conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Method to add animal to the database
    public function addAnimal($name, $category, $description) {
        // Prepare the SQL statement
        $stmt = $this->conn->prepare("INSERT INTO animal_details (name, category, description) VALUES (?, ?, ?)");
        
        // Bind parameters
        $stmt->bind_param("sss", $name, $category, $description);
    
        // Execute the statement
        if ($stmt->execute() === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    public function pullAnimals($animals) {
        foreach ($animals as $animal) {
            $name = $animal[0]; // Accessing by numeric index
            $category = $animal[1]; // Accessing by numeric index
            $description = $animal[2]; // Accessing by numeric index
    
            // Add animal to the database
            $this->addAnimal($name, $category, $description);
        }
    }

    public function __destruct() {
        
        $this->conn->close();
    }
}
$animals = array(
    array("Wolf", "Mammals", "The Eurasian Wolf, a highly social and intelligent predator.", "https://upload.wikimedia.org/wikipedia/commons/6/68/Eurasian_wolf_2.jpg"),
    array("Bear", "Mammals", "The Brown Bear, known for its strength and impressive hibernation abilities.", "https://files.worldwildlife.org/wwfcmsprod/images/Brown_Bear_/hero_small/7h2u6tj3h3_brownbear_hero.jpg"),
    array("Polar Bear", "Mammals", "The largest land carnivore, well-adapted to its icy habitat.", "https://th-thumbnailer.cdn-si-edu.com/XIhsUgi95b0G3mpm15ZlxGFBFPE=/800x800/filters:focal(800x602:801x603)/https://tf-cmsv2-smithsonianmag-media.s3.amazonaws.com/filer_public/7f/0b/7f0be491-c840-425e-90f1-916424359e9f/p1159704_web.jpg"),
    array("Chimpanzee", "Mammals", "The Chimpanzee, an intelligent and social primate, our closest living relatives.", "https://www.fauna-flora.org/wp-content/uploads/2023/05/GettyImages-625850102-scaled-1.jpg"),
    array("Tiger", "Mammals", "The Tiger, a powerful big cat and an endangered species.", "https://files.worldwildlife.org/wwfcmsprod/images/Tiger_resting_Bandhavgarh_National_Park_India/hero_small/6aofsvaglm_Medium_WW226365.jpg"),
    array("Elephant", "Mammals", "The Elephant, the largest land mammal known for its intelligence and memory.", "https://i.natgeofe.com/k/e7ba8001-23ac-457f-aedb-abd5f2fdda62/moms5.png?w=1084.125&h=745.5"),
    array("Rhinoceros", "Mammals", "The Rhinoceros, a massive herbivore with distinctive horns and endangered status.", "https://cdn.britannica.com/89/162189-050-9CFBC925/Kavango-Zambezi-Transfrontier-Conservation-Area-rhino-species-March-2012.jpg"),
    array("Bat", "Mammals", "The Bat, a nocturnal mammal crucial for insect control and pollination.", "https://www.mos.org/sites/dev-elvis.mos.org/files/images/main/uploads/slides/Pulsar-Bat-Header.jpg"),
    array("Lion", "Mammals", "The Lion, the king of the jungle, known for its majestic appearance and social structure.", "https://cdn.britannica.com/29/150929-050-547070A1/lion-Kenya-Masai-Mara-National-Reserve.jpg"),
    array("Fox", "Mammals", "The Fox, a clever and adaptable carnivore with a distinctive bushy tail.", "https://upload.wikimedia.org/wikipedia/commons/3/30/Vulpes_vulpes_ssp_fulvus.jpg"),
    array("Panda", "Mammals", "The Panda, a symbol of conservation efforts, known for its bamboo diet.", "https://assets.wwf.org.au/image/upload/f_auto/q_auto/v1674791331/elcom/416/img-panda-in-tree-1000px.jpg"),
    array("Cat", "Mammals", "The Cat, a domesticated companion with diverse breeds and playful behavior.", "https://media.graphassets.com/resize=height:360,width:500/output=format:webp/9JrMeDVZTbO7AKMsI5NL"),
    array("Giraffe", "Mammals", "The Giraffe, the world's tallest land animal, known for its long neck and unique spots.", "https://s.abcnews.com/images/US/giraffe-gty-jt-201014_1602687277857_hpMain_16x9_1600.jpg"),
    array("Blue Whale", "Mammals", "The Blue Whale, the largest animal on Earth, known for its massive size and gentle nature.", "https://www.antarctica.gov.au/site/assets/files/45670/ia40342.1200x630.jpg"),
    array("Hippo", "Mammals", "The Hippopotamus, a large and semi-aquatic herbivore with a powerful presence.", "https://e360.yale.edu/assets/site/_1500x1500_fit_center-center_80/Botswana-Hippos_Alamy-Small.jpg"),
    array("Dolphin", "Mammals", "The Dolphin, an intelligent marine mammal known for its playful behavior and social bonds.", "https://cdn.creatureandcoagency.com/uploads/2014/06/Bottlenose-dolphin-facts-3.jpg"),
    //
        array("Salamander", "Amphibians", "Known for their smooth, moist skin and ability to regenerate lost body parts.", "https://cdn.pixabay.com/photo/2021/10/04/10/02/salamander-6675129_960_720.jpg"),
            array("Frog", "Amphibians", "Amphibians with long hind legs, known for their jumping ability.", "https://cdn.pixabay.com/photo/2021/09/23/11/18/frog-6648241_960_720.jpg"),
            array("Toad", "Amphibians", "Similar to frogs but characterized by dry, warty skin and shorter hind legs.", "https://cdn.pixabay.com/photo/2016/07/17/19/33/toad-1528452_960_720.jpg"),
            array("Newt", "Amphibians", "Small, usually bright-colored amphibians known for their regenerative abilities.", "https://cdn.pixabay.com/photo/2021/09/25/11/53/newt-6649955_960_720.jpg"),
            array("Axolotl", "Amphibians", "A unique amphibian that retains its aquatic larval characteristics throughout its life.", "https://cdn.pixabay.com/photo/2021/09/21/16/36/axolotl-6644040_960_720.jpg"),
            array("Caecilian", "Amphibians", "Legless and nearly blind amphibians with a serpent-like appearance.", "https://cdn.pixabay.com/photo/2021/10/07/10/25/caecilian-6685763_960_720.jpg"),
            array("Tree Frog", "Amphibians", "Frogs that are typically small, arboreal, and have adhesive toe pads.", "https://cdn.pixabay.com/photo/2019/05/17/19/47/tree-frog-4211684_960_720.jpg"),
            array("Lissamphibia", "Amphibians", "A subclass of amphibians including frogs, salamanders, and caecilians.", "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Centrolene_buckleyi01.jpeg/330px-Centrolene_buckleyi01.jpeg"),
            array("Toads", "Amphibians", "Amphibians characterized by dry, warty skin and parotoid glands.", "https://mdc.mo.gov/sites/default/files/mo_nature/media/images/2010/05/american_toad.jpg"),
            array("Giant Salamanders", "Amphibians", "Found in freshwater habitats with a fascinating life cycle.", "https://animals.sandiegozoo.org/sites/default/files/2020-02/salamander-giant_0.jpg"),
    // Reptiles
    array("Chameleon", "Reptiles", "A master of camouflage with the ability to change color to blend into its surroundings.", "chameleon.jpg"),
    array("Gecko", "Reptiles", "Known for its adhesive toe pads allowing it to climb on various surfaces.", "Gecko.jpeg"),
    array("Gila monster", "Reptiles", "A venomous lizard found in the southwestern United States and Mexico.", "https://i.natgeofe.com/n/4ab840f4-92fb-424c-a642-f58105e0b07d/NationalGeographic_1066541_4x3.jpg"),
    array("Komodo dragon", "Reptiles", "The world's largest lizard, known for its impressive size and deadly bite.", "dd.jpeg"),
    array("Boa Constrictor", "Reptiles", "A large snake known for its powerful constriction method when hunting prey.", "Boa Constrictor.jpeg"),
    array("Burmese Python", "Reptiles", "One of the largest snake species, known for its beautiful pattern and size.", "Burmese Python.jpeg"),
    array("Anaconda", "Reptiles", "A large aquatic snake, known for its incredible size.", "Anaconda.jpeg"),
    array("King Cobra", "Reptiles", "The world's longest venomous snake, known for its impressive hood and deadly bite.", "https://www.naturesafariindia.com/wp-content/uploads/2023/10/King-cobra-in-Kaziranga-national-park-india-930x620.jpg"),
    array("Crocodiles", "Reptiles", "Ancient reptiles with powerful jaws and a stealthy aquatic lifestyle.", "https://cdn.mos.cms.futurecdn.net/B3iinpTazCJnx4LskepukZ-1200-80.jpg"),
    array("American Alligator", "Reptiles", "A large and powerful reptile native to the southeastern United States.", "https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/American_Alligator.jpg/330px-American_Alligator.jpg"),
    array("Gila monster", "Reptiles", "A venomous lizard found in the southwestern United States and Mexico.", "https://i.natgeofe.com/n/4ab840f4-92fb-424c-a642-f58105e0b07d/NationalGeographic_1066541_4x3.jpg"),
    array("King Cobra", "Reptiles", "The world's longest venomous snake, known for its impressive hood and deadly bite.", "https://www.naturesafariindia.com/wp-content/uploads/2023/10/King-cobra-in-Kaziranga-national-park-india-930x620.jpg"),
    array("Rattlesnake", "Reptiles", "A venomous snake with a distinctive rattle on its tail used as a warning signal.", "https://www.anipedia.net/imagenes/serpientes-cascabel-800x375.jpg"),
    array("Turtles", "Reptiles", "Characterized by their protective shells and slow-moving nature.", "https://t2.gstatic.com/licensed-image?q=tbn:ANd9GcSQ0vQ0fQvRZloilSoCObNMBPznznKNG8b7Z6IBuzKHF-qszEz8zaCshcx95vKrzzLb"),
    array("Loggerhead Sea Turtle", "Reptiles", "Known for its powerful jaw and distinctive head shape.", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTP4-JVVN06ml94zPG2lMYspr4Ah4pONAqxh7exfLHzznc-LhA6LCoKqDIMkLmePgF3iAA&usqp=CAU"),
    // Birds
    array("Pigeon", "Birds", "The Pigeon, a common and adaptable bird found in urban areas worldwide.", "https://www.allaboutbirds.org/guide/assets/photo/308074031-480px.jpg"),
    array("Owl", "Birds", "The Owl, a nocturnal bird of prey known for its silent flight and keen hunting skills.", "https://www.allaboutbirds.org/guide/assets/photo/297363481-480px.jpg"),
    array("Penguins", "Birds", "Penguins, birds adapted to aquatic life, known for their unique waddling walk.", "https://nzbirdsonline.org.nz/sites/all/files/2X2A1697%20King%20Penguin%20bol.jpg"),
    array("Woodpeckers", "Birds", "Woodpeckers, birds with specialized beaks for drilling into tree bark in search of insects.", "https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Woodpecker_20040529_151837_1c_cropped.JPG/640px-Woodpecker_20040529_151837_1c_cropped.JPG"),
    array("Bald Eagle", "Birds", "The Bald Eagle, a majestic bird of prey and a symbol of freedom and strength.", "https://media.audubon.org/nas_birdapi/web_apa_2015_lorirothstein_278631_bald_eagle_kk-adult.jpg"),
    array("Kingfisher", "Birds", "The Kingfisher, a brightly colored bird known for its diving skills to catch fish.", "https://res.cloudinary.com/roundglass/image/upload/w_1104,h_736,c_fill/q_auto:best,f_auto/v1632484088/rg/collective/media/common-kingfisher-dhritiman-mukherjee-1632484087720.jpg"),
    array("Parrot", "Birds", "The Parrot, an intelligent and colorful bird known for its ability to mimic human speech.", "https://nationaltoday.com/wp-content/uploads/2022/07/25-World-Parrot-Day-1200x834.jpg"),
    array("Ostriches", "Birds", "Ostriches, the largest and heaviest bird species, known for their impressive running speed.", "https://www.treehugger.com/thmb/RXeq-0l-3gU8i8f7DBbxUYXYXjI=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/GettyImages-521324136-634374426780412bbd2fdb3bb8c0ba2a.jpg"),
    array("Hummingbirds", "Birds", "Hummingbirds are the only birds that can fly backwards.", "https://www.rogersgardens.com/cdn/shop/articles/costa_s_hummingbird.jpg?v=1690393363"),
    // Fish
    array("Goldfish", "Fish", "The Goldfish, a popular freshwater aquarium fish known for its bright colors.", "https://discovery.sndimg.com/content/dam/images/discovery/fullset/2022/2/23/GettyImages-a0047-000046.jpg.rend.hgtvcom.1280.720.suffix/1645674239984.jpeg"),
        array("Angelfish", "Fish", "The Angelfish, a popular aquarium fish known for its distinct shape and coloration.", "https://reefbuilders.com/wp-content/blogs.dir/1/files/2016/01/longfin-clownfish-1.jpg"),
        array("Tetra Fish", "Fish", "The Tetra Fish, a small and colorful freshwater fish popular in home aquariums.", "https://www.swellpets.co.uk/wp-content/uploads/shutterstock_1559114396-1-880x660.jpg"),
        array("Guppy", "Fish", "The Guppy, a small and hardy freshwater fish known for its vibrant colors and live-bearing reproduction.", "https://www.mediastorehouse.com.au/p/708/giraffe-drinking-water-25371438.jpg.webp"),
        array("Betta Fish", "Fish", "The Betta Fish, also known as Siamese Fighting Fish, prized for its vibrant colors and aggressive behavior.", "https://imagine5.com/wp-content/uploads/2021/02/5_seafood-business_01_hero_W2Y5J1_2000.jpg"),
        array("Koi Fish", "Fish", "The Koi Fish, a colorful ornamental variety of common carp often kept in ponds.", "https://res.cloudinary.com/roundglass/image/upload/w_1104,h_736,c_fill/q_auto:best,f_auto/v1632484088/rg/collective/media/common-kingfisher-dhritiman-mukherjee-1632484087720.jpg"),
        array("Catfish", "Fish", "The Catfish, a diverse group of ray-finned fish known for their prominent barbels and whisker-like protrusions.", "dd.jpeg"),
        array("Swordfish", "Fish", "The Swordfish, a large and highly migratory fish known for its distinctive long, flat bill.", "Swordfish.jpg"),
        array("Clown Fish", "Fish", "The Clown Fish, a small and colorful saltwater fish known for its symbiotic relationship with sea anemones.", "https://discovery.sndimg.com/content/dam/images/discovery/fullset/2022/2/23/GettyImages-a0047-000046.jpg.rend.hgtvcom.1280.720.suffix/1645674239984.jpeg")
        );


$animalDatabase = new AnimalDatabase();


$animalDatabase->pullAnimals($animals);

?>
