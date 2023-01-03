<?php

session_start();

include('./../includes/shoppers-database.php');

$quantity = $_POST['quantity'];
$itemid = $_POST['itemid'];

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);

$result = mysqli_query($database, "SELECT * FROM items WHERE itemid = '$itemid'");
$product = mysqli_fetch_object($result);

array_push($cart, array(
"itemid" => $itemid,
"quantity" => $quantity,
"product" => $product
));

setcookie("cart", json_encode($cart));
echo "<script>history.back();</script>";
exit;

?>