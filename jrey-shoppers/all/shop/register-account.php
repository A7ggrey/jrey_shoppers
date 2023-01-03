<?php
    
    require("./../includes/no-login-session.php");
    require("./../includes/shoppers-database.php");
    require("./../includes/session-messages.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers | Shopping Made Easier</title>

	<!-- custome css file link -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

	<!-- custom css file link-->
	<link rel="stylesheet" type="text/css" href="../includes/css/jrey-shoppers.css">
</head>
<body>

	<!-- header start-->
<header class="header">
	
	<a href="#" class="logo">&nbsp;<i class="fas fa-shopping-basket"></i>&nbsp;Jrey Shoppers</a>

	<nav class="navbar">
		<a href="#home">Home</a>
		<a href="#features">Features</a>
		<a href="#products">Products</a>
		<a href="#cartegories">Cartegories</a>
		<a href="#reviews">Reviews</a>
		<a href="#blogs">Blogs</a>
	</nav>
	<div class="icons">
		<div class="fas far-bars" id="menu-btn"></div>
		<div class="fas far-search" id="search-btn"></div>
		<div class="fas far-shopping-cart" id="cart-btn"></div>
		<div class="fas far-user" id="login-btn"></div>
	</div>

	<form action="" class="search-form">
		<input type="search" name="" id="search-box" placeholder="search here...">
		<label for="search-box" class="fas far-search"></label>
	</form>

	<div class="shopping-cart">
		<div class="box">
			<i class="fas fa-trash"></i>
			<img src="./images/i1.jpg" alt="img">
			<div class="content">
				<h3>Shorts</h3>
				<span class="price">Ksh. 250/-</span>
				<span class="Quantity">qty: 7</span>
			</div>
		</div>

		<div class="box">
			<i class="fas fa-trash"></i>
			<img src="./images/i2.jpg" alt="img">
			<div class="content">
				<h3>Trousers</h3>
				<span class="price">Ksh. 500/-</span>
				<span class="Quantity">qty: 1</span>
			</div>
		</div>

		<div class="box">
			<i class="fas fa-trash"></i>
			<img src="./images/i3.jpg" alt="img">
			<div class="content">
				<h3>Sneakers</h3>
				<span class="price">Ksh. 3250/-</span>
				<span class="Quantity">qty: 2</span>
			</div>
		</div>

		<div class="total"> Total: Ksh. 2950/-</div>
		<a href="#" class="btn">Checkout</a>
	</div>

	
</header>

	<!-- header end-->

<!-- features section start -->
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<section class="features">
	
	<form action="" class="login-form">
		<h3>Login now</h3>
		<p><input type="email" name="" placeholder="enter your email" class="box"></p>
		<p><input type="password" name="" placeholder="enter your password" class="box"></p>
		<p>forgot your password? <a href="#">Click here</a></p>
		<p>Don't have ana account? <a href="#">Create now</a></p>
		<input type="submit" name="" value="Login" class="btn">
	</form>

</section>

<!-- features section ends-->

<!-- product section starts -->

<!-- product section ends -->
	<script src="../includes/js/jrey-shoppers.js"></script>

</body>
</html>