<?php

    session_start();

    if (!isset($_SESSION['super_login'])) {
      
      header("location: ./../");
      exit;
    }

    //required pages
    require("./../../includes/shoppers-database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jrey Shoppers | Activate Customers</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./../../includes/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="./../../includes/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="./../../includes/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="./../../includes/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../../includes/dist/css/adminlte.min.css">

  <style type="text/css">
    @media print {
      .hidprint {
        visibility: hidden;
      }
    }
  </style>
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
            <h1>Customer Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Customer Logs</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Jrey Shoppers Customer Logs</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Log Name</th>
                    <th>Status</th>
                    <th>Action Date and time</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                    <?php

                        $selectclientsquery = "SELECT userlogs.*, users.userfname, users.userlname, users.useremail, users.userphone FROM users INNER JOIN userlogs ON users.userid = userlogs.userid";
                        $selectclientsresults = mysqli_query($database, $selectclientsquery);

                        if (mysqli_num_rows($selectclientsresults) > 0) {
                          
                          while ($clientsrows = mysqli_fetch_assoc($selectclientsresults)) {

                            
                            ?>
                            <tr>
                          
                              <td>
                                <?php echo $clientsrows['userfname'];?>
                                &nbsp;
                                <?php echo $clientsrows['userlname'];?>
                              </td>
                              <td><?php echo $clientsrows['useremail'];?></td>
                              <td><?php echo $clientsrows['logname'];?></td>
                              <td><?php echo $clientsrows['logstatus'];?></td>
                              <td>
                                <?php echo $clientsrows['logtime'];?>
                                &nbsp;
                                <?php echo $clientsrows['logdate'];?>                            
                              </td>
                              </form>

                            </tr>

                            <?php
                          }
                        }
                    ?>
                    

                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Log Name</th>
                    <th>Status</th>
                    <th>Action Date and time</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('./../../includes/super-admin-footer.php');?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="./../../includes/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./../../includes/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
</script>
<!-- Bootstrap 4 -->
<script src="./../../includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="./../../includes/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="./../../includes/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="./../../includes/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="./../../includes/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="./../../includes/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="./../../includes/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="./../../includes/plugins/jszip/jszip.min.js"></script>
<script src="./../../includes/plugins/pdfmake/pdfmake.min.js"></script>
<script src="./../../includes/plugins/pdfmake/vfs_fonts.js"></script>
<script src="./../../includes/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="./../../includes/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="./../../includes/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Page specific script -->

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- AdminLTE App -->
<script src="./../../includes/dist/js/adminlte.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
