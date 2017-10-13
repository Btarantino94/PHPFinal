<?php
require "inc/db.inc.php";

try
{

  // set a variable equal to url query string id variable

  $specificProduct = $_GET["id"];

  // selecting specific product with matching id

  $sql = $db->prepare("SELECT * FROM my_products WHERE ProductId = $specificProduct");

  // executing SELECT

  $sql->execute();

  // could use $sql->fetch_assoc();

  $product = $sql->fetchAll(PDO::FETCH_ASSOC);
  // print_r($product);

  // i need to check if more than one product is selected
  // if more than one, throw error

  if (isset($_GET[`id`])){
    $specificProduct = $_GET[`id`];
  }else{
    $specificProduct = "";
  }

  // else, render page

}

catch(PDOException $e){
  echo $e->getMessage();
  exit;
}

?>
<!DOCTYPE html>
<html>

<head>
    <!-- css start -->
    <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css" />
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
  include 'inc/header.inc.php';

      ?>
        <!-- header end -->
        <!-- pictures of main shirt start -->
        <div id="wrapper">
            <div id="product_layout_1">
                <div class="top">
                    <div class="product_images">

                        <div class="product_image_1">

                            <img src="<?php echo $product[0]['image'] ?>">

                        </div>
                        <div class="product_image_small">

                            <div class="product_image_2">
                                <img src="<?php echo $product[0]['image'] ?>">
                            </div>

                            <div class="product_image_3">
                                <img src="<?php echo $product[0]['image'] ?>">
                            </div>
                            <!-- pictures of main shirt start -->

                        </div>
                    </div>
                    <div class="product_info">
                        <h1>
                            <?php echo $product[0]['name'] ?></h1>
                        <div class="price">
                            <h2 class="original_price">$
                                <?php echo $product[0]['price'] ?>
                            </h2>
                        </div>
                        <!-- product rating -->
                        <div class="rating">
                            <i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star-half-o fa-2x"></i><i class="fa fa-star-o fa-2x"></i>
                        </div>
                        <!-- description -->
                        <div class="product_description">
                            <p>
                                <?php echo $product[0]['description'] ?>
                            </p>
                        </div>

                        <!-- form starts here -->
                        <div class="product-item">
                            <form method="get" action="cart.php">
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
                                        <div class="select">
                                            <select id="type">
                           <option value = "1">Blue</option>
                           <option value = "2">Black</option>
                           <option value = "3">green</option>
                           <option value = "4">grey</option>
                           <option value = "5">white</option>
                         </select>
                                        </div>
                                    </div>
                                    <!-- buying options -->
                                </div>

                        </div>
                    </div>

                    <input type="hidden" name="action" value="add" />
                    <input type="hidden" name="productId" value="<?php echo $product[0]['productId'] ?>" />
                    <div class="product-image">
                        <img src="<?php echo $product_array[$key][" image "]; ?>">
                    </div>
                    <!-- fix cart image here -->

                    <div class="button_con">
                        <input type="text" name="quantity" value="1" size="2" />
                        <input type="submit" value="Add to cart" class="btnAddAction" />
                    </div>
                    <!-- change class name -->
                    </form>
                </div>
                <div class="bottom">
                    <div class="reviews">
                        <div class="head">
                            <!-- specific product reveiw -->
                            <h2>Reviews</h2>
                        </div>
                        <div class="content">
                            <!-- fa fa-star-o are the stars -->
                            <span class="stars"><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star-half-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i></span>
                            <p class="review_text">Sweet product, great fit, good quality. I wear it to the gym alot...</p>
                            <p class="fullReview"><a href="#">View Full Review</a></p>
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
                    </div>

          <?php
  include 'inc/footer.inc.php';

            ?>
                        <!--  <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous">   
        </script> -->
                        <!--    <script src="/lib/js/jquery.cookie.js" type="text/javascript"></script> -->
                        <!--  <script type="text/javascript" src="formjsfile"></script> -->
</body>

</html>