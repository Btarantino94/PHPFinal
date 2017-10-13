<!DOCTYPE html>
<?php
// checks if a session is already started and if none is started then it starts one.

session_start();

// used required_once to check if the file has already been included, and if so, not include (require) it again.

require_once ("inc/db.inc.php");

error_reporting(0);

// php function to clean up a string from a user to make it safe for a database
$action = filter_var($_GET['action'], FILTER_SANITIZE_STRING);
$productId = filter_var($_GET['productId'], FILTER_SANITIZE_STRING);
$name = filter_var($_GET['name'], FILTER_SANITIZE_STRING);
$quantity = filter_var($_GET['quantity'], FILTER_SANITIZE_STRING);
$price = filter_var($_GET['price'], FILTER_SANITIZE_STRING);


//if action is not empty switch (switch is similar to a series of IF statements on the same expression) action else if add is used then add to cart or else if remove is used remove items from cart.
// switch/case is like "if else if" it does loose comparison.

if (!empty($action)) {
	switch ($action) {
	case "add":
		addItemtoCart($productId, $quantity);
		break;

	case "remove":
		removeItemsfromCart($productId);
		break;

	case "empty":
		unset($_SESSION["cart_items"]);
		break;
	}

}


// this func adds items to cart

function addItemtoCart($productId, $quantity){

	// "global" tells function to look in global scope for variable $db

	global $db;

//An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to make it easier to catch the potential exceptions. Each try must have at least one corresponding catch or finally block.
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
		$item = array(
				'name' => $products[0]["name"],
				'productId' => $products[0]["productId"],
				'quantity' => $quantity,
				'price' => $products[0]["price"]
			);

		$itemArray = array(
			$products[0]["productId"] => $item
		);
		if (!empty($_SESSION["cart_items"])) {

			// in_array — Checks if a value exists in an array.
			// array_keys — Return all the keys or a subset of the keys of an array.

			if (in_array($products[0]["productId"], array_keys($_SESSION["cart_items"]))) { // check this

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
				$_SESSION["cart_items"][$productId] = $item;
			}
		}else{
			$_SESSION["cart_items"] = $itemArray;
		}
	}else{
		echo 'not running';
	}
}

//function to remove cart items
function removeItemsfromCart($productId){

	if (!empty($_SESSION["cart_items"])) {
			foreach($_SESSION["cart_items"] as $k => $v) {
				if ($k == $productId) unset($_SESSION["cart_items"][$k]);
				// print_r($_SESSION["cart_items"]);
				// echo "$k";
				// if (empty($_SESSION["cart_items"])) unset($_SESSION["cart_items"]);
				// print_r($_SESSION["cart_items"]);
			}
		}
}

?>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/reset.css" />
    <link type="text/css" rel="stylesheet" href="/PHPFinal/lib/css/styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <title>Cart</title>
</head>
<?php include 'inc/header.inc.php'; ?>

<body>
    <div id="shopping-cart">
        <div>
            <p class="cart-heading">Shopping Cart</p>
            <?php


				if (isset($_SESSION["cart_items"])) {
					$item_total = 0;

				?>
	                <table class="table_cart" cellpadding="10" cellspacing="1">
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
								<td class="cart_td">
									<strong><?php echo $item["name"]; ?></strong>
								</td>
								<td class="cart_td">
									<?php echo $item["productId"]; ?>
								</td>
								<td class="cart_td">
									<?php echo $item["quantity"]; ?>
								</td>
								<td class="cart_td">
									<?php echo "$" . $item["price"]; ?>
								</td>
								<td class="cart_td">
									<a href="cart.php?action=remove&productId=
									<?php echo $item["productId"]; ?>" class="btnRemoveAction">
										Remove Item
									</a>
								</td>
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
		</div>
	</div>

			  <?php
			  // echo 'session<br />';

			}

			?>
<!-- </div> -->
<?php include 'inc/footer.inc.php'; ?>

</body>
</html>