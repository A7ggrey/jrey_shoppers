<?php

    session_start();

    if (!isset($_SESSION['login-admin'])) {
    	
    	header("location: ./../");
    	exit;
    }

    //required pages
    require("./../../includes/shoppers-database.php");

    if (isset($_POST['submit'])) {

    //variable declaration

    $adminid = $_SESSION['admid'];
    $passwordadmin = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $changepass = mysqli_real_escape_string($database, $passwordadmin);

    //check if passwords match in the table

    //update password from the default password

    $updatepasswordquery = "UPDATE superadmin SET superadminpassword = '$changedpass' WHERE superadminid = '$adminid'";
    $updatepasswordresult = mysqli_query($database, $updatepasswordquery);

    if ($updatepasswordresult) {
    	
    	header("location: ./../dashboard/");
    	exit;
    } else {

    	echo "Something went wrong. try again later";
    }

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