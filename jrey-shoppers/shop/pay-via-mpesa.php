<?php
    
    session_start();

    require("./../includes/shoppers-database.php");
    
    if (!isset($_SESSION['login-user'])) {

    	session_regenerate_id();

    	$_SESSION['url_page'] = TRUE;
    	$_SESSION['url'] = 'pay-via-mpesa.php';
    	
    	header('location: ./login.php');
    	exit;
    }

    $currentuser = $_SESSION['uid'];

    $selectProf = "SELECT * FROM users WHERE userid = '$currentuser'";
    $resultProf = mysqli_query($database, $selectProf);

    $userrows = mysqli_fetch_assoc($resultProf);

    $userfname = $userrows['userfname'];
    $userlname = $userrows['userlname'];
    $userphone = $userrows['userphone'];

    $payable = $_SESSION['totals'];

    echo $_SERVER['REMOTE_ADDR'];

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers | Pay</title>
</head>
<body>

	<div>
		<form>
			<input type="hidden" name="userid" value="<?php echo $currentuser;?>">
			<p>Name:</p>
			<p>
				<input type="text" name="" value="<?php echo $userfname. ' ' .$userlname;?>" disabled>
			</p>

			<p>Phone Number:</p>
			<p>
				<input type="number" name="" value="<?php echo $userphone;?>" disabled>
			</p>

			<p>Amount:</p>
			<p>
				<input type="number" name="" value="<?php echo $payable;?>" disabled>
			</p>

			<p>
				<input type="submit" name="submit" value="Pay Now">
			</p>

		</form>
	</div>

</body>
</html>