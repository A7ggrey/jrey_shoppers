<?php

session_start();

require('./../../includes/shoppers-database.php');

$msg = "";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Delivery Persons | jrey shoppers</title>
</head>
<body>
	<div>
		<form action="user-php.php" method="POST">
			<p>First Name:</p>
			<p><input type="text" name="fname" placeholder="enter first name"></p>
			<p>Last Name:</p>
			<p><input type="text" name="lname" placeholder="enter last name"></p>
			<p>Other Name:</p>
			<p><input type="text" name="oname" placeholder="enter other name"></p>
			<p>Gender:</p>
			<p>
				<input type="radio" name="gender" value="Male">Male &nbsp;&nbsp;
				<input type="radio" name="gender" value="Female"> Female
			</p>
			<p>Date of Birth:</p>
			<p><input type="date" name="dob"></p>
			<p>Email:</p>
			<p><input type="email" name="email" placeholder="enter email"></p>
			<p><input type="submit" name="submit-delivery-persons" value="Register"></p>
		</form>
		<div>
			<p><?=$msg;?></p>
		</div>
	</div>

</body>
</html>