<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../user.php" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Użytkownik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
            $photo_path = 
            '../../dist/img/'.$_SESSION['logged']['photo_path'];
          ?>
          <img src="<?php echo $photo_path; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../../#" class="d-block">
            <?php
                echo $_SESSION['logged']['name'], ' ', $_SESSION['logged']['surname'];
            ?>
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="../../#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../scripts/logout.php" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                  <p>Log out</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/logged/index2.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Characters</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../pages/logged/user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>
            </ul>
          </li>      
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>