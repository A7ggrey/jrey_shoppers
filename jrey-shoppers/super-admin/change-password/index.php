<?php

    session_start();

    if (!isset($_SESSION['super_login'])) {
    	
    	header("location: ./../../");
    	exit;
    }

    //required pages
    require("./../../../includes/shoppers-database.php");

    //variable declaration

    $superadminid = $_SESSION['suid'];
    $passwordadmin = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $changepass = mysqli_real_escape_string($database, $passwordadmin);

    //check if passwords match in the table

    //update password from the default password

    $updatepasswordquery = "UPDATE superadmin SET superadminpassword = '$changedpass' WHERE superadminid = '$superadminid'";
    $updatepasswordresult = mysqli_query($database, $updatepasswordquery);

    if ($updatepasswordresult) {
    	
    	header("location: ./../../");
    	exit;
    } else {

    	echo "Something went wrong. try again later";
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers - Change Password</title>
</head>
<body>

	<form action="" method="">
		<p>Password:</p>
		<p>Confirm Password:</p>
	</form>

</body>
</html>