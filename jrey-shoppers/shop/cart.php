<?php
    
    session_start();
    
    require("./../includes/shoppers-database.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers | Shopping Made Easier</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>

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
		<a href="#categories">Categories</a>
		<a href="#products">Products</a>
		<a href="#review">Reviews</a>
		<a href="#blogs">Blogs</a>
	</nav>
	<div class="icons">
		<div class="fas fa-bars" id="menu-btn"></div>
		<div class="fas fa-search" id="search-btn"></div>
		<div class="fas fa-shopping-cart" id="cart-btn"></div>
		<div class="fas fa-user" id="login-btn"></div>
	</div>

	<form action="" class="search-form">
		<input type="search" name="" id="search-box" placeholder="search here...">
		<label for="search-box" class="fas fa-search"></label>
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

	<form action="" class="login-form">
		<h3>Login now</h3>
		<input type="email" name="" placeholder="enter your email" class="box">
		<input type="password" name="" placeholder="enter your password" class="box">
		<p>forgot your password? <a href="#">Click here</a></p>
		<p>Don't have ana account? <a href="./register-account.php">Create now</a></p>
		<input type="submit" name="" value="Login" class="btn">
	</form>
</header>

	<!-- header end-->


<!--home section starts -->

<section class="home" id="home">

	<div class="content">

		<h3>Wear <span>the best</span> today</h3>
        <p>Found in different colors, sizes for everyone.</p>
        <a href="#" class="btn">shop now</a>

	</div>

</section>

<!--home section ends -->

<!-- features section start -->

<section class="features" id="features">
	<h1 class="heading">Selected <span> Products</span> </h1>

	<div class="box-container">
		
		<?php

$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "[]";
$cart = json_decode($cart);

$totalpay = 0;

foreach ($cart as $c) {

	$totalpay += $c->product->itemprice * $c->quantity;
	$selectedquantity = $c->product->itemprice * $c->quantity;
	?>

	<?php 
		$itemsavaliableid = $c->itemid;
		$itemsavaliableselect = "SELECT * FROM items WHERE itemid = '$itemsavaliableid'";
		$itemsavaliableresult = mysqli_query($database, $itemsavaliableselect);
		$availablerows = mysqli_fetch_assoc($itemsavaliableresult);

		$maximumitems = $availablerows['itemquantity'];

		$remainingunits = $maximumitems - $selectedquantity;

		?>

    <div class="box">
			<img src="./products/<?php echo $c->product->itemimg;?>" alt="img">
			<h3><?php echo $c->product->itemname;?></h3>
			<p><b>Total Available Units: <i><?php echo $maximumitems;?></i></b></p>
			<div class="price" style="font-size: 2rem; color: var(--black); padding: .5rem 0;">
					ksh <?php echo $selectedquantity;?>
			</div>
			<p>
				<form method="POST" action="delete-cart.php">
		<input type="hidden" name="itemid" value="<?php echo $c->itemid;?>">
		<input type="submit" name="" class="btn" value="X">
	</form>

	<form method="POST" action="update-cart.php">
		<input type="hidden" name="itemid" value="<?php echo $c->itemid;?>">
		<input type="number" style="background: lightgrey; width: 8rem; height: 3.5rem; text-align: center; border-radius: 1.2rem;" name="quantity" min="1" max="<?php echo $maximumitems;?>" value="<?php echo $c->quantity;?>">
		<input type="submit" name="" class="btn" value="Update">
	</form>
			</p>
	</div>

	<?php

	$quantitypurchased = $c->quantity;
}

?>
</div>

</section>

<!-- features section ends-->

<!-- categories section starts -->

<section class="categories" id="categories">
	<h1 class="heading"> Total amount to pay:<span>Ksh. <?php echo $totalpay;?></span></h1>
</section>
<!-- categories section ends -->

<!-- product section starts -->

<section class="products" id="products">
	<form action="pay-via-mpesa.php" method="POST">
	<?php
	
	     $_SESSION['price'] = TRUE;
	     $_SESSION['totals'] = $totalpay;

	     ?>	
	    <h1 class="heading"><input type="submit" name="" value="Checkout" class="btn"></span></h1>
	</form>
</section>

<!-- product section ends -->

<!-- footer section starts -->

<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3><i class="fas fa-shopping-basket"></i> Jrey shoppers</h3>
			<p>Reach Us, any day any time.</p>
			<div class="share">
				<a href="#" class="fab fa-facebook"></a>
				<a href="#" class="fab fa-twitter"></a>
				<a href="#" class="fab fa-instagram"></a>
				<a href="#" class="fab fa-linkedin"></a>
			</div>
		</div>

		<div class="box">
			<h3>contact info </h3>
			<a href="" class="links"><i class="fas fa-phone"></i>+2547 4094 6326</a>
			<a href="" class="links"><i class="fas fa-phone"></i>+2547 4094 6326</a>
			<a href="" class="links"><i class="fas fa-envelope"></i>info@shoppers.jrey.co.ke</a>
			<a href="" class="links"><i class="fas fa-envelope"></i>helpdesk@shoppers.jrey.co.ke</a>
			<a href="" class="links"><i class="fas fa-map-marker-alt"></i>Eldoret, Kenya</a>
		</div>

		<div class="box">
			<h3>quick links </h3>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>home</a>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>features</a>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>categories</a>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>products</a>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>review</a>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>blogs</a>
			<a href="#" class="links"><i class="fas fa-arrow-right"></i>privacy policies</a>
		</div>

		<div class="box">
			<h3>newsletter </h3>
			<p>subscribe for latest updates</p>
			<input type="email" name="" placeholder="your email" class="email">
			<input type="submit" name="" value="subscribe" class="btn">
			<img src="./../includes/imgs/pay.jpg" class="payment-img" alt="img">
		</div>

	</div>

	<div class="credit"> powered by <span><a href="https://www.jrey.co.ke">jrey enterprises</a></span> | all rights reserved.</div>
</section>
<!-- footer section ends -->


    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	
	<script src="./../includes/js/jrey-shoppers.js"></script>

	<script type="module">
  import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper(...)
</script>

</body>
</html>