<?php
require "lib/inc/db.inc.php";

?>

<!DOCTYPE html>
<html>
   <head>
      <!-- css start -->
      <link type="text/css" rel="stylesheet" href="lib/css/reset.css" />
      <link type="text/css" rel="stylesheet" href="lib/css/styles.css" />
      <!-- css ends-->
      <!-- google font -->
      <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">

      <title>search page</title>
   </head>

   <body class="search_body">
 <!-- header start -->
      <?php
include 'lib/inc/header.inc.php';
 ?>
<!-- header end -->
      <section>
         <div class="container align-center">
            <h2 class="search__headline">Looking for something? Search here.</h2>
         </div>
         <!-- container -->
      </section>
      <!-- search-hero -->
      <section>
         <div class="wrap">
            <div class="search">
               <input type="text" class="searchTerm" placeholder="Search here..">
                  <button type="submit" class="searchButton">
               <i class="fa fa-search"></i>
                  </button>
            </div>
         </div>
      </section>
      
      <?php
include 'lib/inc/footer.inc.php';
 ?>
      
   </body>
</html>