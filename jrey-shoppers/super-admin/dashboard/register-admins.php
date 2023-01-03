<?php

    session_start();

   if (!isset($_SESSION['super_login'])) {
        
        header("location: ./../");
        exit;
    }

    //required pages
    require("./../../includes/shoppers-database.php");

    $msg = "";
    $suadminregistering = $_SESSION['suid'];

    if (isset($_POST['submit-admin-reg'])) {
    	
    	$fname = $_POST['fname'];
    	$lname = $_POST['lname'];
    	$oname = $_POST['oname'];
    	$gender = $_POST['gender'];
    	$dob = $_POST['dob'];
    	$email = $_POST['email'];
    	$password = password_hash($_POST['email'], PASSWORD_DEFAULT);
    	$update = "0";
        $office = $_POST['office'];
        $activate = '1';

        date_default_timezone_set("Africa/Nairobi");
            $regdate = date('d/m/Y');

    	$fn = mysqli_real_escape_string($database, $fname);
    	$ln = mysqli_real_escape_string($database, $lname);
    	$on = mysqli_real_escape_string($database, $oname);
    	$ge = mysqli_real_escape_string($database, $gender);
    	$do = mysqli_real_escape_string($database, $dob);
    	$em = mysqli_real_escape_string($database, $email);
    	$pass = mysqli_real_escape_string($database, $password);
    	$up = mysqli_real_escape_string($database, $update);
        $off = mysqli_real_escape_string($database, $office);
        $act = mysqli_real_escape_string($database, $activate);


        $selectadm = "SELECT adminemail FROM admin WHERE adminemail = '$em'";
        $resultadm = mysqli_query($database, $selectadm);

        if (mysqli_num_rows($resultadm) > 0) {
            
            $msg = "Adminstator already registered";

        } else {

    	$insertquery = "INSERT INTO admin(adminfname, adminlname, adminoname, admingender, admindob, adminemail, adminphone, adminidno, adminoffice, adminstatus, adminterms, adminpassword, adminphoto, regby, regdate) VALUES('$fn', '$ln', '$on', '$ge', '$do', '$em', '$up', '$up', '$off', '$act', '$up', '$pass', '$up', '$suadminregistering', '$regdate')";

    	$insertresult = mysqli_query($database, $insertquery);

    	if ($insertresult) {
    		$msg = "Admin registered successfully";
    	} else {
    		$msg = "something went wrong. Try again later";
    	}
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jrey Shoppers | Register Adminstrator</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./../../includes/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../../includes/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php include('./../../includes/super-admin-navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include('./../../includes/super-admin-sidebar.php');?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Register Adminstrator</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./../super-admin/dashboard/">Home</a></li>
              <li class="breadcrumb-item active">Register Adminstrator</li>
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
                <h3 class="card-title">Jrey Shoppers <small>Register Adminstrator</small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action=""  enctype="multipart/form-data">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator First Name</label>
                    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" placeholder="Enter First Name">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator Last Name</label>
                    <input type="text" name="lname" class="form-control" id="exampleInputEmail1" placeholder="Enter Last Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator Other Name</label>
                    <input type="text" name="oname" class="form-control" id="exampleInputEmail1" placeholder="Enter Other Name">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator Gender</label>
                    <br>
                    <input type="radio" name="gender" class="form-check-input" id="exampleInputEmail1" value="Male" style="margin-left: 0.2rem"> <span style="margin-left: 1.4rem;">Male &nbsp;
                    <input type="radio" name="gender" class="form-check-input" id="exampleInputEmail1" value="Female" style="margin-left: 0.5rem"> <span style="margin-left: 1.7rem;">Female
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator Date of Birth</label>
                    <input type="date" name="dob" class="form-control" id="exampleInputEmail1">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Adminstrator Office</label>
                    <select name="office" class="form-control">
                        <option>Maseno</option>
                        <option>Turbo</option>
                        <option>Webuye</option>
                    </select>
                  </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="submit-admin-reg" class="btn btn-primary">Submit</button>
                  <p><?=$msg;?></p>
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
<script src="./../../includes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="./../../includes/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="./../../includes/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="./../../includes/dist/js/adminlte.min.js"></script>
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