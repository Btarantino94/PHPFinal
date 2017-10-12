<!DOCTYPE html>
<html>
   <head>
      <!-- css start -->
      <link type="text/css" rel="stylesheet" href="css/reset.css" />
      <link type="text/css" rel="stylesheet" href="css/styles.css" />
      <!-- css ends-->
      <!-- product slide css starts -->
      <link rel="stylesheet" type="text/css" href="/css/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="/css/slick/slick-theme.css"/>   
      <!-- product slide css ends  -->
      <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>

      <title>home page</title>
   </head>

   <body class="home_body">
 <!-- header start -->
      <?php
include './header.html';
 ?>
<!-- header end -->

      <section id="homepage_hero">
         <div class="container align-center">
            <h1 class="homepage_hero_headline">Half off All Halloween Tees</h1>
            <p id="subtext"> Sale is online only!</p>
            <figure><img src="img/halload.jpg"></figure>
         </div>
         <!-- container -->
      </section>
      <!-- homepage-hero -->

      <!-- product slide imgs start -->
      <section id="productslide">
      <div class="featured">
           <img src="img/tshirt/featured/beat.jpg">
           <img src="img/tshirt/featured/dab.jpg">
           <img src="img/tshirt/featured/freehugs.jpg">
           <img src="img/tshirt/featured/ffstar.jpg">
           <img src="img/tshirt/featured/kill.jpg">
           <img src="img/tshirt/featured/sk.jpg">
           <img src="img/tshirt/featured/misfit.jpg">
           <img src="img/tshirt/featured/nightbat.jpg">
           <img src="img/tshirt/featured/ship.jpg">
      </div>
      </section>
      <!-- product slide imgs end -->

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
   include './footer.html';
   ?>  
   <!-- footer end -->
      
            
   </body>
</html>

  
