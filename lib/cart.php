
<?php

// checks if a session is already started and if none is started then it starts one.

session_start();

// used required_once to check if the file has already been included, and if so, not include (require) it again.

require_once ("./lib/inc/db.inc.php");


// php function to clean up a string from a user to make it safe for a database
$action = filter_var($_POST['action'], FILTER_SANITIZE_STRING);
$productId = filter_var($_POST['productId'], FILTER_SANITIZE_STRING);
$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
$quantity = filter_var($_POST['quantity'], FILTER_SANITIZE_STRING);
$price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);

//var_dump($quantity);die();

if (!empty($action)) {
	switch ($action) {
	case "add":
		addItemtoCart($productId, $quantity);
		break;

	case "remove":
		removeItemsfromCart();
		break;

	case "empty":
		unset($_SESSION["cart_items"]);
		break;
	}
}

// if (!empty($_POST)) {
// 	addItemtoCart($productId, $quantity);
// }

// this func adds items to cart

function addItemtoCart($productId, $quantity){

	// "global" tells function to look in global scope for variable $db

	global $db;

	// echo 'quantity: ' . $quantity;

	if ($quantity > 0) {
		try {

			//selecting all products from the database with an id

			$stmt = $db->prepare("SELECT * FROM my_products WHERE productId=:productId");
			$stmt->execute(array(
				':productId' => $productId
			));
			$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		catch(PDOException $e) {
			echo 'failure';
			echo $e->getMessage();
		}

		// item array is an array of each product including id, name, quantity, and price.

		$itemArray = array(
			$products[0]["productId"] => array(
				'name' => $products[0]["name"],
				'productId' => $products[0]["productId"],
				'quantity' => $quantity,
				'price' => $products[0]["price"]
			)
		);
		if (!empty($_SESSION["cart_items"])) {

			// in_array — Checks if a value exists in an array.
			// array_keys — Return all the keys or a subset of the keys of an array.

			if (in_array($products[0]["productId"], array_keys($_SESSION["cart_items"]))) {

				// $k is the key, $v is the value, and I'm looping through each separate pair with a foreach.

				foreach($_SESSION["cart_items"] as $k => $v) {
					if ($products[0]["productId"] == $k) {
						if (empty($_SESSION["cart_items"][$k]["quantity"])) {
							$_SESSION["cart_items"][$k]["quantity"] = 0;
						}

						$_SESSION["cart_items"][$k]["quantity"]+= $quantity;
					}
				}
			}else{
				$_SESSION["cart_items"] = array_merge($_SESSION["cart_items"], $itemArray);
			}
		}else{
			$_SESSION["cart_items"] = $itemArray;
		}
	}else{
		echo 'not running';
	}
}

function removeItemsfromCart(){

	if (!empty($_SESSION["cart_items"])) {
			foreach($_SESSION["cart_items"] as $k => $v) {
				if ($productId == $k . productId) unset($_SESSION["cart_items"][$k]);
				print_r($_SESSION["cart_items"]);
				if (empty($_SESSION["cart_items"])) unset($_SESSION["cart_items"]);
				print_r($_SESSION["cart_items"]);
			}
		}
}

?>
<html>
<head>
<title>Cart</title>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>

<body>
<div id="shopping-cart">
<!-- <div class="cart-heading">Shopping Cart <a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a></div> -->
<?php

if (isset($_SESSION["cart_items"])) {
	$item_total = 0;
?>	
<table cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th class="cart_th"><strong>Name</strong></th>
<th class="cart_th"><strong>productId</strong></th>
<th class="cart_th"><strong>Quantity</strong></th>
<th class="cart_th"><strong>Price</strong></th>
<th class="cart_th"><strong>Action</strong></th>
</tr>	

<?php
	foreach($_SESSION["cart_items"] as $item) {
?>

				<tr>
				<td class="cart_td" style="text-align:left;border-bottom:#F0F0F0 1px solid;"><strong><?php
		echo $item["name"]; ?></strong></td>
				<td class="cart_td"><?php
		echo $item["productId"]; ?></td>
				<td class="cart_td"><?php
		echo $item["quantity"]; ?></td>
				<td class="cart_td"><?php
		echo "$" . $item["price"]; ?></td>
				<td class="cart_td"><a href="cart.php?action=remove&productId=<?php
		echo $item["productId"]; ?>" class="btnRemoveAction">Remove Item</a></td>
				</tr>
				<?php
		$item_total+= ($item["price"] * $item["quantity"]);
	}

?>

<tr>
<td colspan="5" align=right><strong>Total:</strong> <?php
	echo "$" . $item_total; ?></td>
</tr>
</tbody>
</table>		
  <?php
}

?>
</div>

<div id="product-grid">
	<!-- <div class="txt-heading">Products</div>
 -->	<?php

// $product_array = $db_handle->runQuery("SELECT * FROM my_products ORDER BY productId ASC");

$stmt = $db->prepare("SELECT productId, name, price FROM my_products");
$stmt->execute();

// echo "puke";
// set the resulting array to associative

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k => $v) {
	echo $v;
}

if (!empty($product_array)) {
	foreach($product_array as $key => $value) {
?>
		<!-- form in divs on pdetail.php -->
	<?php
	}
}

?>

</div>
</body>
</html>