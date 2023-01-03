<?php

 session_start();

include('./../includes/shoppers-database.php');

$itemid = $_POST['itemid'];
$quantity = $_POST['quantity'];

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);

foreach ($cart as $c) {
	
	if ($c->itemid == $itemid) {
		
		$c->quantity = $quantity;
	}
}

setcookie("cart", json_encode($cart));
echo "<script>history.back();</script>";
exit;

?>