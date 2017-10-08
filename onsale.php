<?php
require "lib/inc/db.inc.php";

$sql = $db->prepare("SELECT * FROM my_products WHERE `page` = 'on sale'");

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
  <title>on sale page</title>
  <!-- head holds metadata -->
</head>

<body class="onsale_body">
  <?php include 'lib/inc/header.inc.php'; ?>

  <div class="cont">
    <div class="page-head">
      <h1 class="productpage_h1">Sale Page</h1>

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

    <?php include 'lib/inc/footer.inc.php'; ?>
    <script type="text/javascript" src="jqhome.js"></script>
    <script type="text/javascript" src="formjsfile"></script>
</body>

</html>