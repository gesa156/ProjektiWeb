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
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color:rgb(136, 183, 206);
    height: 100%;
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

  .navigation .btnLogout-popup {
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

  .navigation .btnLogout-popup:hover {
    background: #fff;
    color: black;
  }

  .container {
    max-width: 800px;
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

  button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: black;
    color: white;
    border: none;
    border-radius: 5px;
  }

  button:hover {
    background-color: gray;
  }

  .bb {
    justify-content: right;
  }

  footer {
    background-color:black;
    color: white;
    padding: 20px;
    
}

.f{
 display: flex;
 justify-content: space-between;
  
}



.footermain{

    display: flex;
    color: white;
    justify-content: space-between;
}

.footerleft{


text-align: left;
width: 300px;


 }
 .footercenter >p{
    text-align: center;
    justify-content: center;
    
    
}
.footerright p{
    text-align: right;
}

.fundi {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px;
    color: white;
}
.ff{
  margin-right: 20px;
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
  <div class="container">
    <br><br><br>
    <div class="sorting-buttons">
      <button onclick="sortImages('all')">All</button>
      <button onclick="sortImages('mammals')">Mammals</button>
      <button onclick="sortImages('reptiles')">Reptiles</button>
      <button onclick="sortImages('amphibians')">Amphibians</button>
      <button onclick="sortImages('birds')">Birds</button>
      <button onclick="sortImages('other')">Other</button>
    </div>
    <br><br>

    <div class="image-gallery">
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://cdn-prd.content.metamorphosis.com/wp-content/uploads/sites/6/2022/12/shutterstock_781327003-1.jpg" alt="Image 1">
        <div class="caption"> <b>Cats</b> <br>Cats spend 70% of their lives sleeping.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://pbs.twimg.com/media/CjojP_nWEAA517S.jpg" alt="Image 2">
        <div class="caption"> <b>Squirrels</b> <br> To recognize each other, squirrels kiss when they encounter.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://cdn.mos.cms.futurecdn.net/uiCrUgVCf64TzEdTM8x9aD.jpg" alt="Image 2">
        <div class="caption"> <b>Elephants</b> <br> Elephants Have an Excellent Memory.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://thumbor.bigedition.com/dolphins/yDAeLWB-ZoAHDRMbAOdeOuWgm7o=/69x0:1184x836/800x0/filters:quality(80)/granite-web-prod/ac/ca/acca6dd0e761429c981195cce3a0d3ed.jpeg" alt="Image 2">
        <div class="caption"> <b>Dolphins </b> <br> Dolphins Live a Long Time.</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://www.allaboutbirds.org/guide/assets/photo/308074031-480px.jpg" alt="Pigeon">
        <div class="caption">
          <b>Pigeon</b><br>Highly intelligent birds and have been trained to deliver messages in the past.</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://nzbirdsonline.org.nz/sites/all/files/2X2A1697%20King%20Penguin%20bol.jpg" alt="Penguins">
        <div class="caption">
          <b>Penguins</b><br>Birds adapted to aquatic life, known for their unique waddling walk.</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/Woodpecker_20040529_151837_1c_cropped.JPG/640px-Woodpecker_20040529_151837_1c_cropped.JPG" alt="Woodpeckers">
        <div class="caption">
          <b>Woodpeckers</b><br>Birds with specialized beaks for drilling into tree bark in search of insects.</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://media.audubon.org/nas_birdapi/web_apa_2015_lorirothstein_278631_bald_eagle_kk-adult.jpg" alt="Bald Eagle">
        <div class="caption">
          <b>Bald Eagle</b><br>The Bald Eagle, a majestic bird of prey and a symbol of freedom and strength.</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://res.cloudinary.com/roundglass/image/upload/w_1104,h_736,c_fill/q_auto:best,f_auto/v1632484088/rg/collective/media/common-kingfisher-dhritiman-mukherjee-1632484087720.jpg" alt="Kingfisher">
        <div class="caption">
          <b>Kingfisher</b><br>The Kingfisher, a brightly colored bird known for its diving skills to catch fish.</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://nationaltoday.com/wp-content/uploads/2022/07/25-World-Parrot-Day-1200x834.jpg" alt="Parrot">
        <div class="caption">
          <b>Parrot</b><br>An intelligent and colorful bird known for its ability to mimic human speech.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://a-z-animals.com/media/2022/09/iStock-492611032-1024x682.jpg" alt="Image 11">
        <div class="caption"> <b>Lion</b> <br> <br>Lions hunt durning storms.</div>
      </div>
      <div class="zoom-wrapper"data-category="mammals">
        <img src="https://www.ranthamborenationalpark.com/blog/wp-content/uploads/2018/03/Tiger-Mating.jpg" alt="Image 12">
        <div class="caption"><b>Tiger</b><br><br>Tigers have antiseptic saliva</div>
      </div>
      <div class="zoom-wrapper" data-category="birds">
        <img src="https://www.allaboutbirds.org/guide/assets/photo/297363481-480px.jpg" alt="Owl">
        <div class="caption">
          <b>Owl</b><br>Fun Fact: Owls can rotate their heads up to 270 degrees without moving their bodies.</div>
      </div>
      <div class="zoom-wrapper" data-category="amphibians">
        <img src="https://static.scientificamerican.com/sciam/cache/file/41DF7DA0-EE58-4259-AA815A390FB37C55_source.jpg" alt="Frog">
        <div class="caption">
          <b>Frog</b><br>Known for its distinctive jumping ability and unique croaking sounds.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://t4.ftcdn.net/jpg/02/65/70/73/360_F_265707361_N79UdgpbERwsjHZxIWRixuodCKqYsBF5.jpg" alt="Image 3">
        <div class="caption"> <b>Koala</b> <br>The laziest animal in the world. They sleep for around 20 hours a day!</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://img.freepik.com/premium-photo/cute-cow-cow-baby-generative-ai_861549-866.jpg?w=360" alt="Image 4">
        <div class="caption"> <b>Cows</b> <br>Cows produce more milk when they listen to quiet music.</div>
      </div>
      <div class="zoom-wrapper"data-category="birds">
        <img src="https://images.ctfassets.net/cnu0m8re1exe/1iE1Yj15ayy967F0SxbI00/b113244bebba2ba6ffb92f3298c51621/shutterstock_1221724678.jpg" alt="Image 5">
        <div class="caption"><b>Hummingbirds</b> <br>Hummingbirds are the only birds that can fly backwards.</div>
      </div>
      <div class="zoom-wrapper" data-category="other">
        <img src="https://imagine5.com/wp-content/uploads/2021/02/5_seafood-business_01_hero_W2Y5J1_2000.jpg" alt="Image 6">
        <div class="caption"> <b>Starfish</b> <br> <br>Starfish do not have a brain.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://www.mediastorehouse.com.au/p/708/giraffe-drinking-water-25371438.jpg.webp" alt="Image 7">
        <div class="caption"> <b>Giraffe</b> <br>A giraffe's neck is too short to reach the ground.</div>
      </div>
      <div class="zoom-wrapper" data-category="mammals">
        <img src="https://img.freepik.com/premium-photo/panda-is-swimming-beautiful-illustration-picture-generative-ai_146671-94784.jpg" alt="Image 8">
        <div class="caption"> <b>Panda</b> <br>Pandas can swim and even climb trees.</div>
      </div>
      <div class="zoom-wrapper"data-category="mammals">
        <img src="https://www.petlandflorida.com/wp-content/uploads/2018/03/Petland_Bunny.jpg" alt="Image 9">
        <div class="caption"> <b>Rabbit</b> <br>Bunnies binky when they are happy</div>
      </div>
      <div class="zoom-wrapper"data-category="mammals">
        <img src="https://bloximages.chicago2.vip.townnews.com/independentri.com/content/tncms/assets/v3/editorial/3/9d/39de6e58-b6b7-11e8-a561-cf1d4a759335/5b9956da22d78.image.jpg?crop=1609%2C845%2C0%2C221&resize=1200%2C630&order=crop%2Cresize" alt="Image 10">
        <div class="caption"> <b>Otters</b> <br> Otters hold hands while sleeping,so they don’t float away from each other.</div>
      </div>
    <div class="zoom-wrapper" data-category="amphibians">
      <img src="https://animals.sandiegozoo.org/sites/default/files/2020-02/salamander-giant_0.jpg" alt="Giant Salamanders">
      <div class="caption">
        <b>Giant Salamanders</b><br>Found in freshwater habitats with a fascinating life cycle.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="chameleon.jpg" alt="Chameleon">
      <div class="caption">
        <b>Chameleon</b><br>A master of camouflage with the ability to change color to blend into its surroundings.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="Gecko.jpeg" alt="Gecko">
      <div class="caption">
        <b>Gecko</b><br>Known for its adhesive toe pads allowing it to climb on various surfaces.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="https://i.natgeofe.com/n/4ab840f4-92fb-424c-a642-f58105e0b07d/NationalGeographic_1066541_4x3.jpg" alt="Gila monster">
      <div class="caption">
        <b>Gila monster</b><br>A venomous lizard found in the southwestern United States and Mexico.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="dd.jpeg" alt="Komodo dragon">
      <div class="caption">
        <b>Komodo dragon</b><br>The world's largest lizard, known for its impressive size and deadly bite.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="Boa Constrictor.jpeg" alt="Boa Constrictor">
      <div class="caption">
        <b>Boa Constrictor</b><br>A large snake known for its powerful constriction method when hunting prey.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="Burmese Python.jpeg" alt="Burmese Python">
      <div class="caption">
        <b>Burmese Python</b><br>One of the largest snake species, known for its beautiful pattern and size.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="Anaconda.jpeg" alt="Anaconda">
      <div class="caption">
        <b>Anaconda</b><br>A large aquatic snake, known for its incredible size.</div>
    </div>
    <div class="zoom-wrapper" data-category="reptiles">
      <img src="https://www.naturesafariindia.com/wp-content/uploads/2023/10/King-cobra-in-Kaziranga-national-park-india-930x620.jpg" alt="King Cobra">
      <div class="caption">
        <b>King Cobra</b><br>The world's longest venomous snake, known for its impressive hood and deadly bite.
      </div>
    </div>
    <div class="zoom-wrapper" data-category="amphibians">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Centrolene_buckleyi01.jpeg/330px-Centrolene_buckleyi01.jpeg" alt="Lissamphibia">
      <div class="caption">
        <b>Lissamphibia</b><br>A subclass of amphibians including frogs, salamanders, and caecilians.</div>
    </div>
    <div class="zoom-wrapper" data-category="amphibians">
      <img src="https://mdc.mo.gov/sites/default/files/mo_nature/media/images/2010/05/american_toad.jpg" alt="Toads">
      <div class="caption">
        <b>Toads</b><br>Amphibians characterized by dry, warty skin and parotoid glands.</div>
    </div>
    <div class="zoom-wrapper" data-category="other">
      <img src="https://reefbuilders.com/wp-content/blogs.dir/1/files/2016/01/longfin-clownfish-1.jpg" alt="Clown Fish">
      <div class="caption">
        <b>Clown Fish</b><br>Clown fish are known for forming symbiotic relationships with sea anemones.</div>
    </div>
    <div class="zoom-wrapper" data-category="other">
      <img src="https://discovery.sndimg.com/content/dam/images/discovery/fullset/2022/2/23/GettyImages-a0047-000046.jpg.rend.hgtvcom.1280.720.suffix/1645674239984.jpeg" alt="Goldfish">
      <div class="caption">
        <b>Goldfish</b><br>Goldfish have a memory span of at least three months and can recognize their owners.</div>
    </div>
    <div class="zoom-wrapper" data-category="other">
      <img src="https://www.swellpets.co.uk/wp-content/uploads/shutterstock_1559114396-1-880x660.jpg" alt="Tropical Fish">
      <div class="caption">
        <b>Tropical Fish</b><br>Come in a wide variety of colors, shapes, and sizes, adding vibrancy to coral reefs.</div>
    </div>
  </div>
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
      <p style="margin-left: 20px; margin-top:-6%;">Copyright 2023 PawPlanet Website.<br>
         All rights reserved.</p>
      <p style="margin-right: 20px; margin-top:-6%;">Designed by Orgesa and Erza</p>
    </div>
  </footer>

</body>

</html>