<?php

$itemid = $_POST['itemid'];

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);

$new_cart = array();

foreach ($cart as $c) {
	
	if ($c->itemid != $itemid) {
		
		array_push($new_cart, $c);
	}
}

setcookie('cart', json_encode($new_cart));

echo "<script>history.back();</script>";
exit;

?>