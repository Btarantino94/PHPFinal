
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
      <figure id="balloon"><img src="img/salebal.png"></figure>

      <section id="homepage_hero">
         <div class="container align-center">
            <h1 class="homepage_hero_headline">Half off All Halloween Tees</h1>
            <p id="subtext"> Sale is online only!</p>
            <div class="topad_con">
            <figure><img src="img/halload.jpg"></figure>
          </div>
         </div>
         <!-- container end -->
      </section>
      <div>
        <p id="feat_title"> This Month's Featured Products</p>
      </div>
      <!-- product slide imgs start -->
      <section id="productslide">
      <a href="featured.php"><div class="featured">
           <img src="img/featured/beat.jpg">
           <img src="img/featured/dab.jpg">
           <img src="img/featured/freehugs.jpg">
           <img src="img/featured/ffstar.jpg">
           <img src="img/featured/kill.jpg">
           <img src="img/featured/sk.jpg">
           <img src="img/featured/misfit.jpg">
           <img src="img/featured/nightbat.jpg">
           <img src="img/featured/ship.jpg">
      </div></a>
      </section>
      <!-- product slide imgs end -->
      <div class="ad_con">
           <figure id="starwars"><img src="img/star_wars_ad.jpg"></figure>
           <figure id="comingsoon"><img src="img/coming.jpg"></figure>
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
    
      <div id="missing_container">
         <p id="missing_out">YOU'RE MISSING OUT<p>
        <p id="missing_text">Stay up to date with our exclusive products, contests, giveaways and everything that is awesome!
Subscribe to our newsletter below and start receiving all the hand-picked products and other geeky awesomeness straight in your inbox. <a href="contact.php">Here!</a></p>
      </div>
         
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

  
