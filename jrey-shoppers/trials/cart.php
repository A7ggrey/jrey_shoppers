<?php

session_start();

include('./../includes/shoppers-database.php');

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);

$totalpay = 0;

foreach ($cart as $c) {

	$totalpay += $c->product->itemprice * $c->quantity;
	?>

<h3><?php echo $c->product->itemname;?></h3>
<p><?php echo $c->product->itemprice * $c->quantity;?></p>

<p>
	<form method="POST" action="delete-cart.php">
		<input type="hidden" name="itemid" value="<?php echo $c->itemid;?>">
		<input type="submit" name="" value="X">
	</form>

	<form method="POST" action="update-cart.php">
		<input type="hidden" name="itemid" value="<?php echo $c->itemid;?>">
		<input type="number" name="quantity" min="1" value="<?php echo $c->quantity;?>">
		<input type="submit" name="" value="Update">
	</form>
</p>

	<?php
}

?>

<p>
	<b>Total amount to pay:</b> <?php echo $totalpay;?>
</p>