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
	<h1 class="heading">our <span> features</span> </h1>

	<div class="box-container">
		<div class="box">
			<img src="./images/i3.jpg" alt="img">
			<h3>New orders</h3>
			<p>Found in different colors, sizes for everyone.</p>
			<a href="#" class="btn">read more</a>
		</div>

		<div class="box">
			<img src="./../includes/imgs/best.png" alt="img">
			<h3>best price</h3>
			<p>best discounts for our customers.</p>
			<a href="#" class="btn">read more</a>
		</div>
	
		<div class="box">
			<img src="./../includes/imgs/delivery.jpg" alt="img">
			<h3>fast delivery</h3>
			<p>delivery done countrywide and within the stupilated time.</p>
			<a href="#" class="btn">read more</a>
		</div>
	</div>

</section>

<!-- features section ends-->

<!-- categories section starts -->

<section class="categories" id="categories">
	<h1 class="heading"> product <span>categories</span></h1>

	<div class="box-container">
		
		<div class="box">
			<img src="./images/i2.jpg" alt="img">
			<h3>Men's wear</h3>
			<p>upto 20% off</p>
			<a href="#" class="btn">shop now</a>
		</div>

		<div class="box">
			<img src="./images/i5.jpg" alt="img">
			<h3>Women's wear</h3>
			<p>upto 20% off</p>
			<a href="#" class="btn">shop now</a>
		</div>

		<div class="box">
			<img src="./images/i6.webp" alt="img">
			<h3>Kidds' wear</h3>
			<p>upto 20% off</p>
			<a href="#" class="btn">shop now</a>
		</div>
	</div>
</section>
<!-- categories section ends -->

<!-- product section starts -->

<section class="products" id="products">
	<h1 class="heading">our <span>products</span></h1>

	<div class="swiper product-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="./images/i1.jpg" alt="img">
				<h3>Shorts</h3>
				<div class="price">ksh 250</div>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<a href="#" class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="./images/i6.webp" alt="img">
				<h3>Kid's dress</h3>
				<div class="price">ksh 239</div>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<a href="#" class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="./images/i7.webp" alt="img">
				<h3>Kid's outfits</h3>
				<div class="price">ksh 250</div>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<a href="#" class="btn">add to cart</a>
			</div>

		</div>
	</div>


	<div class="swiper product-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="./images/i1.jpg" alt="img">
				<h3>New Clothes</h3>
				<div class="price">ksh 250</div>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<a href="#" class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="./images/i1.jpg" alt="img">
				<h3>New Clothes</h3>
				<div class="price">ksh 250</div>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<a href="#" class="btn">add to cart</a>
			</div>

			<div class="swiper-slide box">
				<img src="./images/i1.jpg" alt="img">
				<h3>New Clothes</h3>
				<div class="price">ksh 250</div>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star-half-alt"></i>
				</div>
				<a href="#" class="btn">add to cart</a>
			</div>

		</div>
	</div>

</section>

<!-- product section ends -->


<!-- reviews section starts -->
<section class="review" id="review">
	<h1 class="heading"> customers' <span>reviews</span></h1>
	<div class="swiper review-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide box">
				<img src="./profile/ag.jpg" alt="profile">
				<p>Best Services, good customer care and quality products</p>
				<h3>aggrey Kiprop</h3>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>

			<div class="swiper-slide box">
				<img src="./profile/ag.jpg" alt="profile">
				<p>Best Services, good customer care and quality products</p>
				<h3>aggrey Kiprop</h3>
				<div class="stars">
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			</div>

		</div>
	</div>
</section>


<!-- reviews section ends -->

<!-- blog section starts -->
<section class="blogs" id="blogs">
	<h1 class="heading"> our <span>blogs</span></h1>

	<div class="box-container">
		
		<div class="box">
			<img src="./images/i1.jpg" alt="img">

			<div class="content">
				<div class="icons">
					<a href="#"><i class="fas fa-user"></i> by user</a>
					<a href="#"><i class="fas fa-calendar"></i> 14th november, 2022</a>
				</div>
				<h3>shorts available</h3>
				<p>Different sizes, shapes and color to suit your desire</p>
				<a href="#" class="btn">read more</a>
			</div>
		</div>

		<div class="box">
			<img src="./images/i1.jpg" alt="img">

			<div class="content">
				<div class="icons">
					<a href="#"><i class="fas fa-user"></i> by user</a>
					<a href="#"><i class="fas fa-calendar"></i> 14th november, 2022</a>
				</div>
				<h3>shorts available</h3>
				<p>Different sizes, shapes and color to suit your desire</p>
				<a href="#" class="btn">read more</a>
			</div>
		</div>

		<div class="box">
			<img src="./images/i1.jpg" alt="img">

			<div class="content">
				<div class="icons">
					<a href="#"><i class="fas fa-user"></i> by user</a>
					<a href="#"><i class="fas fa-calendar"></i> 14th november, 2022</a>
				</div>
				<h3>shorts available</h3>
				<p>Different sizes, shapes and color to suit your desire</p>
				<a href="#" class="btn">read more</a>
			</div>
		</div>

		<div class="box">
			<img src="./images/i1.jpg" alt="img">

			<div class="content">
				<div class="icons">
					<a href="#"><i class="fas fa-user"></i> by user</a>
					<a href="#"><i class="fas fa-calendar"></i> 14th november, 2022</a>
				</div>
				<h3>shorts available</h3>
				<p>Different sizes, shapes and color to suit your desire</p>
				<a href="#" class="btn">read more</a>
			</div>
		</div>
	</div>
</section>

<!-- blog section ends -->

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

	<div class="credit"> powered by <span><a href="">jrey enterprises</a></span> | all rights reserved.</div>
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