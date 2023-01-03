
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Uwezo Fund</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

 <?php include('./../incs/admin-sidebar.php');?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Loans Table</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item">View</li>
          <li class="breadcrumb-item active">Loans</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
              
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Repaid Loans</h5>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Total Return Amount</th>
                    <th scope="col">Returned Amount</th>
                    <th scope="col">Balance</th>
                    <th scope="col">Due date</th>
                  </tr>
                </thead>
                <tbody>

<?php

$data = mysqli_connect('localhost', 'root', '', 'uwezofund');

if (!$data) {
    
    echo "Something went wrong with database connection";
}

$qery = "SELECT * FROM ";
$resu = mysqli_query($data, $qery);

if (mysqli_num_rows($resu) > 0) {
    
    while ($rows = mysqli_fetch_assoc($resu)) {
        
        ?>
      <tr>
                    <th scope="row"><?php echo $rows['id'];?></th>
                    <td><?php echo $rows['FName'];?>&nbsp;<?php echo $rows['LName'];?></td>
                    <td><?php echo $rows['total_return_amount'];?></td>
                    <td><?php echo $rows['returned_amount'];?></td>
                    <td><?php echo $rows['balance'];?></td>
                    <td><?php echo $rows['payment_deadline'];?></td>
                  </tr>
</div>
</form>

<?php

    }
}

?>   
                </tbody>
              </table>
            

            </div>
          </div>

          
        </div>
      </div>
    </section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Maseno</span></strong>. UWEZO FUND
    </div>
     
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
