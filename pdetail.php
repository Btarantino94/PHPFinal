<?php
require "lib/inc/db.inc.php";

try {
  //set a variable equal to url query string id variable
$specificProduct = $_GET["id"];

// selecting specific product with matching id
$sql = $db->prepare("SELECT * FROM my_products WHERE ProductId = $specificProduct");

//executing SELECT
$sql->execute();

// could use $sql->fetch_assoc();
$product = $sql->fetchAll(PDO::FETCH_ASSOC);

// i need to check if more than one product is selected

  // if more than one, throw error
if(isset($_GET[`id`])){
   $specificProduct = $_GET[`id`];
} else {
   $specificProduct = "";
}
  // else, render page

} catch (PDOException $e) {
  
  echo $e->getMessage();
  exit;

}

?>

<!DOCTYPE html>
<html>
   <head>
      <!-- css start -->
      <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css"/>
      <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css"/>
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
          include 'lib/inc/header.inc.php';
        ?>
        <!-- header end -->
        <!-- pictures of main shirt start -->
        <div class="cart_val" id="c_val">
              <p>0</p>
            </div>
          <div id="wrapper">
            <div id="product_layout_1">
              <div class="top">
                <div class="product_images">
                  
                  <div class="product_image_1"> 

                  <img src="<?= $product[0]['image'] ?>">
                    
                  </div>
                    <div class="product_image_small">
                      
                      <div class="product_image_2">
                        <img src="<?= $product[0]['image'] ?>">
                      </div>

                      <div class="product_image_3">
                        <img src="<?= $product[0]['image'] ?>">
                      </div>
                  <!-- pictures of main shirt start -->  

                </div>
              </div>
                <div class="product_info">
                  <h1><?= $product[0]['name'] ?> Shirt</h1>
                  <div class="price">
                    <h2 class="original_price">$<?= $product[0]['price'] ?></h2>
                  </div>
                  <!-- product rating -->
                  <div class="rating">
                    <i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star fa-2x"></i><i class="fa fa-star-half-o fa-2x"></i><i class="fa fa-star-o fa-2x"></i>
                  </div>
                  <div class="product_description">
                    <p><?= $product[0]['description'] ?></p>
                  </div>
                 <div class="related_info">
                   <span class="sku">sku:<?= $product[0]['id'] ?></span><span class="quantity">QTY:50</span>
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
                    <!-- <div class="select">
                          <select id="type">
                           <option value = "1">Blue</option>
                           <option value = "2">Black</option>
                           <option value = "2">green</option>
                         </select>
                    </div> -->
                  </div>
                  <!-- buying options -->
                  <div class="buying">
                     <div class="quantity">
                           <label for="quantity">QTY:</label>
                           <input type="text" id="qtit" onchange="myFunction()">
                     </div>
                         <button class="cart">
                           <a href="#" class="add"><span class="new">Add to Cart </span><i class="fa fa-shopping-cart fa-lg"></i></a>
                         </button>
                  </div>
                </div>
                        
               </div>
            </div>
            <!-- <?php
                $product_array = $db_handle->runQuery("SELECT * FROM my_products ORDER BY ProductId ASC");
                if (!empty($product_array)) { 
                foreach($product_array as $key=>$value){
                ?>
                <div class="product-item">
                  <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>">
                  <div class="product-image"><img src="<?php echo $product_array[$key]["image"]; ?>"></div>
                  <div><strong><?php echo $product_array[$key]["name"]; ?></strong></div>
                  <div class="product-price"><?php echo "$".$product_array[$key]["price"]; ?></div>
                  <div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
                  </form>
                </div>
                <?php }} ?>
              <script type="text/javascript">
                                case "add":
                    if(!empty($_POST["quantity"])) {
                      $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
                      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"]));
                      
                      if(!empty($_SESSION["cart_item"])) {
                        if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
                          foreach($_SESSION["cart_item"] as $k => $v) {
                              if($productByCode[0]["code"] == $k) {
                                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                                }
                                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
                              }
                          }
                        } else {
                          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
                        }
                      } else {
                        $_SESSION["cart_item"] = $itemArray;
                      }
                    }
                  break;
                  </script> -->
                <div class="bottom">
                <div class="reviews">
                  <div class="head">
                    <!-- specific product reveiw -->
                    <h2>Reviews</h2>
                  </div>
                    <div class="content">
                      <!-- fa fa-star-o are the stars -->
                      <span class="stars"><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star fa-1x"></i><i class="fa fa-star-half-o fa-1x"></i><i class="fa fa-star-o fa-1x"></i></span>
                      <p class="review_text">Sweet shirt, great fit, good quality. I wear it to the gym alot...</p>
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
                            <img src="lib/img/tshirt/bio.jpg">
                          </div>
                          <h4 class="price">$20</h4>
                        </div>
                        <div class="products">
                          <h4 class="title">Coffee</h4>
                          <div class="image">
                            <img src="lib/img/tshirt/coffee copy.jpg">
                          </div>
                          <h4 class="price">$20</h4>
                        </div>
                        <div class="products">
                          <h4 class="title">Portal Coffee</h4>
                          <div class="image">
                            <img src="lib/img/tshirt/coffee.jpg">
                          </div>
                          <h4 class="price">$20</h4>
                        </div>
                      </div>
                    </div>
                  </div>
                    
            <?php
              include 'lib/inc/footer.inc.php';
            ?>
        <script
          src="https://code.jquery.com/jquery-3.2.1.min.js"
          integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
          crossorigin="anonymous">   
        </script>
        <script src="/lib/js/jquery.cookie.js" type="text/javascript"></script>
        <script type="text/javascript" src="formjsfile"></script>
     </body>
</html>
