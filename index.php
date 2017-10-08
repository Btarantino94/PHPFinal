
<!DOCTYPE html>
<html>
   <head>
      <!-- css start -->
      <link type="text/css" rel="stylesheet" href="lib/css/reset.css" />
      <link type="text/css" rel="stylesheet" href="lib/css/styles.css" />
      <!-- css ends-->
      <!-- product slide css starts -->
      <link rel="stylesheet" type="text/css" href="lib/css/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="lib/css/slick/slick-theme.css"/>   
      <!-- product slide css ends  -->
      <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

      <title>home page</title>
   </head>

   <body class="home_body">
 <!-- header start -->
      <?php
include 'lib/inc/header.inc.php';
 ?>
<!-- header end -->

      <section id="homepage_hero">
         <div class="container align-center">
            <h1 class="homepage_hero_headline">Half off All Halloween Tees</h1>
            <p id="subtext"> Sale is online only!</p>
            <figure><img src="lib/img/halload.jpg"></figure>
         </div>
         <!-- container -->
      </section>
      <!-- homepage-hero -->

      <!-- product slide imgs start -->
      <section id="productslide">
      <div class="featured">
           <img src="lib/img/tshirt/featured/beat.jpg">
           <img src="lib/img/tshirt/featured/dab.jpg">
           <img src="lib/img/tshirt/featured/freehugs.jpg">
           <img src="lib/img/tshirt/featured/ffstar.jpg">
           <img src="lib/img/tshirt/featured/kill.jpg">
           <img src="lib/img/tshirt/featured/sk.jpg">
           <img src="lib/img/tshirt/featured/misfit.jpg">
           <img src="lib/img/tshirt/featured/nightbat.jpg">
           <img src="lib/img/tshirt/featured/ship.jpg">
      </div>
      </section>
      <!-- product slide imgs end -->

           
           <figure><img src="lib/img/banner.jpg"></figure>

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
      <div class="free">
       <figure><img src="lib/img/freeTee.jpg"></figure>
      </div>
         
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="lib/css/slick/slick.min.js"></script>

  <!-- footer start -->
   <?php
include 'lib/inc/footer.inc.php';
   ?>  
   <!-- footer end -->
      
            
   </body>
</html>

  
