<?php 
  session_start();
    if (!isset($_SESSION['logged']['email']) || $_SESSION['logged']['status'] != '1'){
      $_SESSION['error'] = "Twoje konto jest zablokowane lub nieaktywne, proszę sprawdzić swój email";
      header('location:../../index.php');
    }
    else if($_SESSION['logged']['permission'] != 1 && $_SESSION['logged']['permission'] != 2)
    {
      header('location:../../pages/logged/user.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini sidebar-collapse">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php
    require_once('../../pages/layout/navbar.php');              
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php
    require_once('../../pages/layout/admin/aside_admin.php');              
  ?>
  <!-- /.Main Sidebar Container -->

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <?php
      require_once('../../pages/layout/admin/content_header_main_page_admin.php');              
    ?>

    <!--../../Header-->

    <!-- Main content -->

    <?php 
      require_once('../../pages/layout/admin/content_admin.php');
    ?>

    <!-- /.content -->
</div>
  <!-- /.content-wrapper end -->

  <!-- Main Footer -->
  <?php 
    require_once '../../pages/layout/footer.php';
  ?>
  <!-- /.Main Footer -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ../../wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
