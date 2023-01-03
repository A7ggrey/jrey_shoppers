<?php

    session_start();

    require("./../includes/shoppers-database.php");

    $msg = "";

    if (isset($_POST['submit'])) {
    	
    	$email = $_POST['email'];
    	$password = $_POST['password'];

    	$eml = mysqli_real_escape_string($database, $email);
    	$paswd = mysqli_real_escape_string($database, $password);

    	$selectquery = "SELECT superadminid, superadminemail, superadminpassword FROM superadmin WHERE superadminemail = '$eml'";

    	$selectresult = mysqli_query($database, $selectquery);

    	if (mysqli_num_rows($selectresult) > 0) {
    		while ($suadrows = mysqli_fetch_assoc($selectresult)) {
    			
    			$superid = $suadrows['superadminid'];
    			$superpass = $suadrows['superadminpassword'];
    		}

    		if ($paswd = password_verify( $paswd, $superpass)) {
    			
    			session_regenerate_id();

    			$_SESSION['super_login'] = TRUE;
    			$_SESSION['suid'] = $superid;
    			$_SESSION['password'] = $superpass;

    			header('location: ./dashboard/');
    			exit;
    		} else {
    			$msg = "invalid username or password";
    		}
    	} else {
    		$msg = "something went wrong. try again later";
    	}
    }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Super admin | login</title>
</head>
<body>

	<div>
		<form action="" method="POST">
			<p>Username:</p>
			<p><input type="text" name="email" placeholder="enter email"></p>
			<p>Password:</p>
			<p><input type="password" name="password" placeholder="enter password"></p>
			<p><input type="submit" name="submit" value="Login"></p>
		</form>

		<div>
			<p><?=$msg;?></p>
		</div>

		<p><a href="#">forgot password?</a></p>
	</div>

</body>
</html>