<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="./plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
     
<style type="text/css">
    .login-page {
    background: url("./dist/img/background.jpg") no-repeat center center fixed;
    background-size: cover;	
    }
</style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="./index2.html" style="font-size: 45px;"><b>D&D</b>Advisor</a>
  </div>
            <?php
            if (isset($_SESSION['error'])) {
                echo '<div class="col-md1">
                          <div class="card">
                            <div class="text-center card-header card-text text-secondary">
                            ' . $_SESSION['error'] . '
                            </div>
                          </div>
                        </div>
                        ';
                unset($_SESSION['error']);
            }
            if (isset($_SESSION['info'])) {
                echo '<div class="col-md1">
                          <div class="card">
                            <div class="text-center card-header card-text text-secondary">
                            ' . $_SESSION['info'] . '
                            </div>
                          </div>
                        </div>
                        ';
                unset($_SESSION['info']);
            }
            ?>
            <div class="card">
              <div class="card-body login-card-body">
                <p class="login-box-msg">Sign in to start your session</p>

          <form action="./scripts/login.php" method="post">
                <div class="form-group form-group-lg">
                    <label for="inputEmail">Email address</label>
                    <input name="email" type="email" class="form-control-lg form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input name="password" type="password" class="form-control-lg form-control" id="inputPassword" aria-describedby="passwordHelp" placeholder="Enter password">
                </div>
                  <button type="submit" class="btn btn-dark  btn-lg">Login</button>
                </div>
                <p class="text-center">
                  <a href="./pages/UI/forgot-password.html">I forgot my password</a>
                </p>
                 <p class="text-center">          
                   <a href="./pages/UI/register.php" class="text-center">Register a new membership</a>
                </p>
          </form>
          </div>
    </header>
    <!-- Footer-->
    <hr/>
    <footer class="footer text-center" >
        <div class="container-fluid">
            <div class="row">
                <!-- Footer Social Icons-->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4" style="color:ghostwhite">Around the Web</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                </div>
                <!-- Footer About Text-->
                <div class="col-lg-6">
                    <h4 class="text-uppercase mb-4" style="color:ghostwhite">About our service</h4>
                    <p class="text-center" style="color:ghostwhite">DnD Advisor is a platform where people create, customize and share characters.</p>
                </div>
            </div>
        </div>
    </footer>
<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>