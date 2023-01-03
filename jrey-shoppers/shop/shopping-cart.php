<?php
    
    session_start();

    if (!isset($_SESSION['login-user'])) {
    	
    	header('location: ./login.php');
    	exit;
    }

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers - Shopping Cart</title>
</head>
<body>

	<div>
		Shopping Cart........
	</div>

</body>
</html>