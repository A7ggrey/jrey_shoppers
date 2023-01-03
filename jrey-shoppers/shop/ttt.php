<?php

    session_start();

    if (!isset($_SESSION['login-user'])) {
    	
    	header("location: ./login.php");
    	exit;
    }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome Super Admin</title>
</head>
<body>

	<div>
		Welcome <?php echo "" .$_SESSION['uid']. "";?>
	</div>

	<div>
		<a href="logout.php">Log out</a>
	</div>

	<div>
		<p><a href="register-products.php">Register Products</a></p>
		<p><a href="register-category.php">Register Category</a></p>
		<p><a href="register-admins.php">Register Admins</a></p>
		<p><a href="register-delivery-persons.php">Register Delivery Persons</a></p>
	</div>

</body>
</html>