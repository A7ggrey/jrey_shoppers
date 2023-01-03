<?php

$data = mysqli_connect('localhost', 'root', '', 'test');

    if (!$data) {
        
        echo "Something went wrong with database connection";
    }

if(isset($_POST['submit'])) {


    

$target_dir = "uploads/";
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

        $qury = "INSERT INTO trial(pic) VALUES('$file')";
        $res = mysqli_query($data, $qury);

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
<body>

<form action="" method="post" enctype="multipart/form-data">
    <p>Select image to upload:</p>
    <input type="file" name="fileToUpload" id="fileToUpload">

    <input type="submit" value="Upload Image" name="submit">
</form>

<div style="width: 20%; height: 20%;">
    <?php

    $qery = "SELECT * FROM trial";
    $resu = mysqli_query($data, $qery);

    if (mysqli_num_rows($resu) > 0) {
        
        while ($rows = mysqli_fetch_assoc($resu)) {
            
            ?>

            <p style="width: 50px; height: 100px;"><img src="./uploads/<?php echo $rows['pic'];?>"></p>

    <?php

        }
    }

   ?> 
</div>

</body>
</html>

