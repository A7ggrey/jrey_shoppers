<?php
    
    session_start();

    if (!isset($_SESSION['super_login'])) {
    	
    	header('location: ./../');
    }

    require('./../../includes/shoppers-database.php');




date_default_timezone_set("Africa/Nairobi");

$datesubmit = date('d/m/Y');
$timesubmit = date('h:i:sa');



if(isset($_POST['submit'])) {

$adminid = $_SESSION['suid'];

$target_dir = "profilephoto/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$file = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {

        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

        $qury = "UPDATE superadmin SET superadminphoto = '$file' WHERE superadminid = '$adminid'";
        $res = mysqli_query($database, $qury);

        if ($qury) {
           
           echo "The file has been uploaded.";
        } else {
            echo "something went wrong...";
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?> 


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers - Update Profile Photo</title>
</head>
<body>

	<div>
		<h3><center>Update Profile Photo</center></h3>
		<form action="" method="POST" enctype="multipart/form-data">
			<p>Profile Photo:</p>
			<p><input type="file" name="fileToUpload" id="fileToUpload"></p>
			<p><input type="submit" name="submit" value="Update Photo"></p>
		</form>
	</div>

</body>
</html>