<!DOCTYPE html>
<html>
   <head>
      <!-- css start -->
      <link type="text/css" rel="stylesheet" href="css/reset.css" />
      <link type="text/css" rel="stylesheet" href="css/styles.css" />
      <!-- css ends-->
      <!-- bootstrap cdn start -->
      <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
      <!-- bootstrap cdn end -->
      <title>product detail page</title>
      <!-- head holds metadata -->
   </head>
   <body class="pdetail_body">
      <!-- header start -->
      <?php
include './header.html';
 ?>
<!-- header end -->
<!-- pictures of main shirt start -->
  <div id="wrapper">
    <div id="product_layout_1">
      <div class="top">
      <div class="product_images">
        <div class="product_image_1">
          <img src="img/tshirt/big.jpg">
        </div>
        <div class="product_image_small">
          <div class="product_image_2">
            <img src="img/tshirt/bigb.jpg">
          </div>
                    <div class="product_image_3">
            <img src="img/tshirt/bigc.jpg">
          </div>
          <!-- pictures of main shirt start -->  

        </div>
        </div>
        <div class="product_info">
          <h1>Big Gains Shirt</h1>
          <div class="price">
          <h2 class="original_price">$20</h2>
          <h2 class="sale_price">$15</h2>
          </div>
          <!-- product rating -->
          <div class="rating">
            <i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i><i class="fa fa-star fa-3x"></i><i class="fa fa-star-half-o fa-3x"></i><i class="fa fa-star-o fa-3x"></i>
          </div>
          <div class="product_description">
          <p>Big Gains</p>
          </div>
         <div class="related_info">
           <span class="sku">SKU:12345</span><span class="quantity">QTY:50</span>
         </div>
         <!-- other options -->
         <div class="options">
         <div class="buying_options">
                 <div class="select">
                 <select id="type">
                   <option value = "1">T-shirt</option>
                   <option value = "2">Baseball</option>
                 </select>
                 </div>
                 <div class="select">
                 <select id="size">
                   <option value = "1">Small</option>
                   <option value = "2">Medium</option>
                   <option value = "3">Large</option>
                   <option value = "4">X-Large</option>
                 </select>
                 </div>
          </div>
          <!-- buying options -->
          <div class="buying">
                 <div class="quantity">
                   <label for="quantity">QTY:</label>
                   <input type="text">
                 </div>
                 <div class="cart">
                   <a href="#" class="add">Add to Cart <i class="fa fa-shopping-cart fa-lg"></i></a>
                 </div>
          </div>
          </div>
                
          </div>
        </div>
        <div class="bottom">
        <div class="reviews">
          <div class="head">
            <!-- specific product reveiw -->
            <h2>Reviews</h2>
          </div>
            <div class="content">
              <!-- fa fa-star-o are the stars -->
              <span class="name">Jon Smith</span><span class="stars"><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star-half-o fa-2x"></i><i class="fa fa-star-o fa-2x"></i></span>
              <p class="review_text">"sweet shirt, great fit, good quality. I wear it to the gym alot."</p>
              <p class="fullReview"><a href="#">View Full Review</a></p>
              <span class="writeReview"><a href="#">Write your Own Review</a></span>
            </div>
          </div>
          <div class="related">
            <div class="head">
              <!-- other related products -->
              <h2>Related Products</h2>
            </div>
            <div class="content">
              <div class="relatedProducts">
                <div class="products">
                  <h4 class="title">Bio</h4>
                  <div class="image">
                    <img src="img/tshirt/bio.jpg">
                  </div>
                  <h4 class="price">$20</h4>
                </div>
                <div class="products">
                  <h4 class="title">Coffee</h4>
                  <div class="image">
                    <img src="img/tshirt/coffee copy.jpg">
                  </div>
                  <h4 class="price">$20</h4>
                </div>
                <div class="products">
                  <h4 class="title">Portal Coffee</h4>
                  <div class="image">
                    <img src="img/tshirt/coffee.jpg">
                  </div>
                  <h4 class="price">$20</h4>
                </div>
              </div>
            </div>
            
              
              
              
              
              
            



           <?php
include './footer.html';
 ?>
      <script type="text/javascript" src="jqhome.js"></script>
      <script type="text/javascript" src="formjsfile"></script>
   </body>
</html>