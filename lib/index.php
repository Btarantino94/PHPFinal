
<!DOCTYPE html>
<html>
   <head>
      <!-- css start -->
      <link type="text/css" rel="stylesheet" href="css/reset.css" />
      <link type="text/css" rel="stylesheet" href="css/styles.css" />
      <!-- css ends-->
      <!-- product slide css starts -->
      <link rel="stylesheet" type="text/css" href="css/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="css/slick/slick-theme.css"/>   
      <!-- product slide css ends  -->
      <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

      <title>home page</title>
   </head>

   <body class="home_body">
 <!-- header start -->
      <?php
include 'inc/header.inc.php';
 ?>
<!-- header end -->

      <section id="homepage_hero">
         <div class="container align-center">
            <h1 class="homepage_hero_headline">Half off All Halloween Tees</h1>
            <p id="subtext"> Sale is online only!</p>
            <div class="topad_con">
            <a href="featured.php"><figure><img src="img/halload.jpg" alt="halloween banner"></figure></a>
          </div>
         </div>
         <!-- container end -->
      </section>
      <div>
        <p id="feat_title"> This Month's Featured Products</p>
        <p id="feat_sub"> The creepy, the funny, the hallows eve shirt variety</p>
      </div>
      <!-- product slide imgs start -->
      <section id="productslide">
      <a href="featured.php"><div class="featured">
           <img src="img/featured/beat.jpg" alt="featured shirt">
           <img src="img/featured/dab.jpg" alt="featured shirt">
           <img src="img/featured/freehugs.jpg" alt="featured shirt">
           <img src="img/featured/ffstar.jpg" alt="featured shirt">
           <img src="img/featured/kill.jpg" alt="featured shirt">
           <img src="img/featured/sk.jpg" alt="featured shirt">
           <img src="img/featured/misfit.jpg" alt="featured shirt">
           <img src="img/featured/nightbat.jpg" alt="featured shirt">
           <img src="img/featured/ship.jpg" alt="featured shirt"> 
      </div></a>
      </section>
      <!-- product slide imgs end -->
      <div class="ad_con">
           <a href="topsellers.php"><figure id="starwars"><img src="img/star_wars_ad.jpg" alt="star wars banner"></figure></a>
      </div>
           <div id="missing_container">
         <p id="missing_out">YOU'RE MISSING OUT<p>
        <h2 id="missing_text">Stay up to date with our exclusive products, contests, giveaways and everything that is awesome!
          Subscribe to our newsletter below and start receiving all the hand-picked products and other geeky awesomeness straight in your inbox. <a href="contact.php">Here!</a></h2>
      </div>
      <div class="ad_con">
           <a href="new.php"><figure id="comingsoon"><img src="img/coming.jpg" alt="coming soon banner"></figure></a>
      </div>
      <!-- product slide jquery start -->
      <script type="text/javascript">
           $(document).ready(function(){
        $('.featured').slick({
          slidesToShow: 4,
         slidesToScroll: 1,
           autoplay: true,
           arrows: false,
         autoplaySpeed: 5000,
        });
      });
      </script>
       <!-- product slide jquery end -->
         
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="css/slick/slick.min.js"></script>

  <!-- footer start -->
   <?php
include 'inc/footer.inc.php';
   ?>  
   <!-- footer end -->
      
            
   </body>
</html>

  
