<?php

session_start();

include('./../includes/shoppers-database.php');

$result = mysqli_query($database, "SELECT * FROM items");

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);

echo "<a href='cart.php'>To Shopping Cart</a>  " .count($cart);

while ($row = mysqli_fetch_object($result)) {
	
	$flag = false;
	foreach($cart as $c) {
		if ($c->itemid == $row->itemid) {
			
			$flag = true;
			break;
		}
	}

	?>
<p><?php echo $row->itemname;?></p>
<p><?php echo $row->itemprice;?></p>
<p>

	<?php if ($flag) { ?>

		<form method="POST" action="delete-cart.php">
		<input type="hidden" name="itemid" value="<?php echo $row->itemid;?>">
		<input type="hidden" name="quantity" value="1">

		<input type="submit" name="" value="Remove From Cart">
		
	    </form>

	<?php } else { ?>

	<form method="POST" action="add-to-cart.php">
		<input type="hidden" name="itemid" value="<?php echo $row->itemid;?>">
		<input type="hidden" name="quantity" value="1">

		<input type="submit" name="" value="Add to Cart">
		
	</form>
</p>
	<?php
}
}

?>