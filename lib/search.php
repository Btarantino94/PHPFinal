<!DOCTYPE html>
<html>
   <head>
      <link type="text/css" rel="stylesheet" href="/lib/css/reset.css"/>
      <link type="text/css" rel="stylesheet" href="/lib/css/styles.css"/>
      <script src="/biography/lib/js/jsfilehere.js" type="text/javascript"></script>
      <title>search page</title>
   </head>
   <body class="search_body">
      <?php
include './header.html';
 ?>
      <section id="search-hero">
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
include './footer.html';
 ?>
      <script type="text/javascript" src="jqhome.js"></script>
      <script type="text/javascript" src="formjsfile"></script>
   </body>
</html>