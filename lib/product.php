<?php
require "inc/db.inc.php";

$sql = $db->prepare("SELECT * FROM my_products");

$sql->execute();

$products = $sql->fetchAll(PDO::FETCH_ASSOC);
//storing a assoc array of the info in the table.

?>

<!DOCTYPE html>
<html>

<head>
  <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css" />
  <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css" />
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <title>product page</title>
  <!-- head holds metadata -->
</head>

<body class="product_body">
  <?php include 'inc/header.inc.php'; ?>

  <div>
    <div class="page-head">
      <h1 class="productpage_h1">All Products</h1>

      <div class="myproducts">
        <ul>
          <?php foreach ($products as $product):?>
          <li>
            <a class="product_tag" href="pdetail.php?id=<?php echo $product['productId']; ?>">
              <figure>
                <img class="img-responsive" src='<?php echo $product['image']?>'>
                <figcaption>Price $<?php echo $product['price']?>
                  </br>
                  </br>
                  <?php echo $product['description']?>
                  </br>
                  </br>
                  id #<?php echo $product['productId']?>
                </figcaption>
              </figure>
            </a>
          </li>
          <?php endforeach; ?> 
        </ul>
      </div>
    </div>
    <!-- <section id="sidebar">
      <h3>CATEGORIES</h3>
    <div class="checklist categories">
      <ul>
          <li><a href=""><span></span>New Arivals</a></li>
            <li><a href=""><span></span>Sale Items</a></li>
            <li><a href=""><span></span>Top Sellers</a></li>
            <li><a href=""><span></span>T-shirts</a></li>
            <li><a href=""><span></span>Baseball Shirts</a></li>
            <li><a href=""><span></span>Tights</a></li>
            <li><a href=""><span></span>Onesies</a></li>
        </ul>
    </div>
    
    <h3>COLORS</h3>
    <div class="checklist colors">
      <ul>
          <li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>
        
        <ul>
          <li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>        
    </div>
    
    <h3>SIZES</h3>
    <div class="checklist sizes">
      <ul>
          <li><a href=""><span></span>XS</a></li>
            <li><a href=""><span></span>S</a></li>
            <li><a href=""><span></span>M</a></li>
        </ul>
        
        <ul>
          <li><a href=""><span></span>L</a></li>
            <li><a href=""><span></span>XL</a></li>
            <li><a href=""><span></span>XXL</a></li>
        </ul>        
    </div>
    
     <h3>PRICE RANGE</h3>
     <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/price-range.png" alt="" />
</div>
    </section> -->
</div>

    <?php include 'inc/footer.inc.php'; ?>
    <script type="text/javascript" src="jqhome.js"></script>
    <script type="text/javascript" src="formjsfile"></script>
</body>

</html>