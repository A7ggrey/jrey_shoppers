<?php
    
    session_start();

    if (!isset($_SESSION['super_login'])) {
    	
    	header('location: ./../');
    }

    require('./../includes/shoppers-database.php');




date_default_timezone_set("Africa/Nairobi");

$datesubmit = date('d/m/Y');
$timesubmit = date('h:i:sa');



if(isset($_POST['submit'])) {
    
$iname = $_POST['proname'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$cart = $_POST['procat'];
$descriptionitems = $_POST['moreinfo'];
$adminid = $_SESSION['suid'];

 $itemname = mysqli_real_escape_string($database, $iname);
 $itemquantity = mysqli_real_escape_string($database, $quantity);
 $itemprice = mysqli_real_escape_string($database, $price);
 $itemdiscount = mysqli_real_escape_string($database, $discount);
 $itemdate = mysqli_real_escape_string($database, $datesubmit);
 $itemdescription = mysqli_real_escape_string($database, $descriptionitems);
 $catid = mysqli_real_escape_string($database, $cart);

$target_dir = "products/";
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

        $qury = "INSERT INTO items(itemname, itemimg, itemquantity, itemprice, itemdiscount, itemdate, itemdescription, cartid, adminid) VALUES('$itemname', '$file', '$itemquantity', '$itemprice', '$itemdiscount', '$itemdate', '$itemdescription', '$catid', '$adminid')";
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
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jrey Shoppers | Register Products</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./../includes/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../includes/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('./../includes/super-admin-navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('./../includes/super-admin-sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./../super-admin/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Register Products</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Jrey Shoppers <small>Register Products</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action=""  enctype="multipart/form-data">
                <div class="card-body">

                  <div class="form-group">
                  <label>Select a Category</label>
                  <select class="form-control select2" style="width: 100%;" name="procat">
                    <option selected="selected">--Select a Category --</option>
                    <?php

				$selectcatqr = "SELECT * FROM category";
				$selectcatres = mysqli_query($database, $selectcatqr);

				if (mysqli_num_rows($selectcatres) > 0) {
					while ($catrows = mysqli_fetch_assoc($selectcatres)) {

						?>

					        <option value="<?php echo $catrows['cartid'];?>"><?php echo $catrows['cartname'];?></option>

						<?php
					}
				}
				
				?>
                  </select>
                </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" name="proname" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Upload an Image</label>
                    <input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Discount</label>
                    <input type="text" name="discount" class="form-control" id="exampleInputEmail1" placeholder="Product Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Category Bio</label>
                    <textarea name="moreinfo" class="form-control" id="exampleInputPassword1" placeholder="Write Something about the registered category..." rows="6px"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./../includes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="./../includes/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./../includes/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="./../includes/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>


<!--<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Jrey Shoppers - Register Products</title>
</head>
<body>

	<div>
		<h3><center>Register Products</center></h3>
		<form action="" method="POST" enctype="multipart/form-data">
			<p>Product Category:</p>
			<p>
				<select name="procat">
					<option>-- Select The Category you want --</option>
				<?php

				$selectcatqr = "SELECT * FROM category";
				$selectcatres = mysqli_query($database, $selectcatqr);

				if (mysqli_num_rows($selectcatres) > 0) {
					while ($catrows = mysqli_fetch_assoc($selectcatres)) {

						?>

					        <option value="<?php echo $catrows['cartid'];?>"><?php echo $catrows['cartname'];?></option>

						<?php
					}
				} else {

					echo "No data";
				}
				
				?>
			    </select>
			</p>

			<p>Product Name:</p>
			<p><input type="text" name="proname"></p>

			<p>Product Photo:</p>
			<p><input type="file" name="fileToUpload" id="fileToUpload"></p>

			<p>Product Quantity:</p>
			<p><input type="text" name="quantity"></p>

			<p>Product Price:</p>
			<p><input type="text" name="price"></p>

			<p>Product Discount:</p>
			<p><input type="text" name="discount"></p>

			<p>Product Description:</p>			
			<p><textarea name="moreinfo" placeholder="more info about the category..." cols="100" rows="10"></textarea></p>
			
			<p><input type="submit" name="submit" value="Submit Product"></p>
		</form>
	</div>

</body>
</html>