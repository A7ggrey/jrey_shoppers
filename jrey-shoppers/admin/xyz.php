<?php

    session_start();

    require("./../includes/shoppers-database.php");

    $msg = "";

    if (isset($_POST['submit-signup'])) {
    	
    	$fname = $_POST['fname'];
    	$lname = $_POST['lname'];
    	$oname = $_POST['oname'];
    	$gender = $_POST['gender'];
    	$dob = $_POST['dob'];
    	$email = $_POST['email'];
    	$password = password_hash($_POST['email'], PASSWORD_DEFAULT);
    	$update = "0";

    	$fn = mysqli_real_escape_string($database, $fname);
    	$ln = mysqli_real_escape_string($database, $lname);
    	$on = mysqli_real_escape_string($database, $oname);
    	$ge = mysqli_real_escape_string($database, $gender);
    	$do = mysqli_real_escape_string($database, $dob);
    	$em = mysqli_real_escape_string($database, $email);
    	$pass = mysqli_real_escape_string($database, $password);
    	$up = mysqli_real_escape_string($database, $update);


    	$insertquery = "INSERT INTO superadmin(superadminfname, superadminlname, superadminoname, superadmingender, superadmindob, superadminemail, superadminphone, superadminidno, superadminoffice, superadminstatus, superadminterms, superadminpassword) VALUES('$fn', '$ln', '$on', '$ge', '$do', '$em', '$up', '$up', '$up', '$up', '$up', '$pass')";

    	$insertresult = mysqli_query($database, $insertquery);

    	if ($insertresult) {
    		$msg = "data inserted successfully";
    	} else {
    		$msg = "something went wrong.";
    	}
    }


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>xyz | jrey shoppers</title>
</head>
<body>
	<div>
		<form action="" method="POST">
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
			<p><input type="submit" name="submit-signup" value="Register"></p>
		</form>
		<div>
			<p><?=$msg;?></p>
		</div>
	</div>

</body>
</html>