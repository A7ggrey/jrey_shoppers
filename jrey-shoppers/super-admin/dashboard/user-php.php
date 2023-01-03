<?php

    session_start();
    require('./../../includes/shoppers-database.php');

    
    if (isset($_POST['submit-items'])) {
    	
    	$name = $_POST['name'];
    	$image = $_POST['image'];
    	$quantity = $_POST['quantity'];
    	$price = $_POST['price'];
    	$discount = $_POST['discount'];
    	$subcategory = $_POST['subcategory'];
    	$category = $_POST['category'];
    	$cookie = $_POST['cookie'];
    	$admin = $_SESSION['id'];

    	$n = mysqli_real_escape_string($database, $name);
    	$i = mysqli_real_escape_string($database, $image);
    	$q = mysqli_real_escape_string($database, $quantity);
    	$p = mysqli_real_escape_string($database, $price);
    	$d = mysqli_real_escape_string($database, $discount);
    	$de = mysqli_real_escape_string($database, $description);
    	$su = mysqli_real_escape_string($database, $subcategory);
    	$ca = mysqli_real_escape_string($database, $category);
    	$adm = mysqli_real_escape_string($database, $admin);

    	$itemssel = "SELECT * FROM items WHERE itemname = '$n'";
    	$itemselres = mysqli_query($database, $itemssel);

    	if (mysqli_num_rows($itemselres) > 0) {
    		
    		echo "item already exists";
    	} else {
    		$itemsinsert = "INSERT INTO items(itemname, itemimg, itemquantity, itemprice, itemdiscount, itemdate, itemdescription, itemcookiecode, cartid, subcartid, adminid) VALUES('$n', '$i', '$q', '$p', '$d', NULL,'$de', '$co', '$ca', '$su', '$adm')";
    		$itemsinsertres = mysqli_query($database, $itemsinsert);

    		if ($itemsinsertres) {
    			
    			echo "data inserted successfully";
    		} else {
    			echo "something went wrong. try again later";
    		}
    	}
    }

    if (isset($_POST['submit-categories'])) {

    	$admin = $_SESSION['suid'];    	
    	$category = $_POST['catname'];
    	$catimg = $_POST['catimg'];

    	$adm = mysqli_real_escape_string($database, $admin);
    	$na = mysqli_real_escape_string($database, $category);
    	$ca = mysqli_real_escape_string($database, $catimg);

    	date_default_timezone_set("Africa/Nairobi");
    	 
    	$date = date('d/m/Y');
    	$time = date('h:i:sa');

    	$selectcat = "SELECT * FROM category WHERE cartname = '$na'";
    	$selectcatres = mysqli_query($database, $selectcat);
    	if (mysqli_num_rows($selectcatres) > 0) {
    		
    		echo "Category already exists.";
    	} else {

    		$insertcat = "INSERT INTO category(cartname, cartimg, cartdate, carttime, adminid) VALUES('$na', '$ca', '$date', '$time', '$adm')";
    		$insertcatres = mysqli_query($database, $insertcat);
    		if ($insertcatres) {
    			
    			echo "category inserted successfully";
    		} else {
    			echo "Something went wrong. try again later";
    		}
    	}
    }

    if (isset($_POST['submit-admins'])) {
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


    	$insertquery = "INSERT INTO admin(adminfname, adminlname, adminoname, admingender, admindob, adminemail, adminphone, adminidno, adminoffice, adminstatus, adminterms, adminpassword) VALUES('$fn', '$ln', '$on', '$ge', '$do', '$em', '$up', '$up', '$up', '$up', '$up', '$pass')";

    	$insertresult = mysqli_query($database, $insertquery);

    	if ($insertresult) {
    		echo "data inserted successfully";
    	} else {
    		echo "something went wrong.";
    	}
    }

    if (isset($_POST['submit-delivery-persons'])) {
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
    		echo "data inserted successfully";
    	} else {
    		echo "something went wrong.";
    	}
    }

    if (isset($_POST['submit-terms'])) {
    	// code...
    }

    if (isset($_POST['submit-items'])) {
    	// code...
    }

    if (isset($_POST['submit-items'])) {
    	// code...
    }

    if (isset($_POST['submit-items'])) {
    	// code...
    }

    if (isset($_POST['submit-items'])) {
    	// code...
    }

    if (isset($_POST['submit-items-next'])) {
    	
    	$description = $_POST['description'];
    	$id = $_POST['id'];

    	$iditems = mysqli_real_escape_string($database, $id);
    	$de = mysqli_real_escape_string($database, $description);
    

    	$itemssel = "SELECT * FROM items WHERE itemid = '$iditems'";
    	$itemselres = mysqli_query($database, $itemssel);

    	if (mysqli_num_rows($itemselres) > 0) {
    		
    		$itemsinsert = "UPDATE items SET itemdescription = '$de' WHERE itemid = '$iditems'";
    		$itemsinsertres = mysqli_query($database, $itemsinsert);

    		if ($itemsinsertres) {
    			
    			echo "data inserted successfully";
    		} else {
    			echo "something went wrong. try again later";
    		}
    	} else {
    		echo "product do not exist";
    	}
    }

?>