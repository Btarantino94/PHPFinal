
<?php
require "inc/db.inc.php";

$sql = $db->prepare("SELECT * FROM my_products WHERE `page` = 'featured'");

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
  <title>featured page</title>
  <!-- head holds metadata -->
</head>

<body class="product_body">
  <?php include 'inc/header.inc.php'; ?>

  <div>
    <div class="page-head">
      <h1 class="productpage_h1">Featured Products</h1>

  <div class="myproducts">
    <ul>
    <?php foreach ($products as $product):?> 
      <li>
        <a class="product_tag" href="pdetail.php?id=<?php echo $product['productId']; ?>">
          <figure>
            <img class="img-responsive" src='<?php echo $product['image']?>'>
          <figcaption>Price $<?php echo $product['price']?>
          <br></br>
          <?php echo $product['description']?>
        <br></br>
          id #<?php echo $product['productId']?>
        </figcaption>
      </figure>
      </a></li>
    <?php endforeach; ?>
    </ul>
  </div>
</div>
</div>
 <?php include 'inc/footer.inc.php'; ?>
    <script type="text/javascript" src="jqhome.js"></script>
    <script type="text/javascript" src="formjsfile"></script>
</body>

</html>