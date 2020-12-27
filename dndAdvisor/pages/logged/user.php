<?php 
  session_start();
  if (!isset($_SESSION['logged']['email']) || $_SESSION['logged']['status'] != '1') {
    $_SESSION['error'] = "Twoje konto jest zablokowane lub nieaktywne, proszę sprawdzić swój email";
    header('location:../../index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>D&D Beyond | Main Page</title>
  <script src="../../scripts/admin.js"></script>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<!--<style type="text/css">
    .content-wrapper {
    background: url("../../dist/img/background-main.jpg") no-repeat center center fixed;
    background-size: cover;	
    }
</style>-->
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
    require_once '../../pages/layout/navbar.php';
  ?>
  <!-- /.navbar -->

  <!-- Lewy panel aside -->
  <?php 
    require_once '../../pages/layout/aside.php';
  ?>

  <!-- Content Wrapper. Contains page content -->
  <?php 
    require_once '../../pages/layout/user/content_user.php';
  ?>

  <!-- Main Footer -->
  <?php 
    require_once '../../pages/layout/footer.php';
  ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<script src="../../dist/js/pages/dashboard2.js"></script>
</body>
</html>
