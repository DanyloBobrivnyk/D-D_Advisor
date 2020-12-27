<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">dministrator</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <?php
            $photo_path = '../../dist/img/'.$_SESSION['logged']['photo_path'];
          ?>
          <img src="<?php echo $photo_path; ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
            <?php
                echo $_SESSION['logged']['name'], ' ', $_SESSION['logged']['surname'];
            ?>
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="../layout/collapsed-sidebar.html" class="nav-link active">
              <i class="fas fa-home"></i>
                <p>Home Page</p>
              </a>
            </li>

          <li class="nav-item">
            <a href="../widgets.html" class="nav-link">
              <i class="fas fa-user-ninja"></i>
              <p>
                Character editor
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="./AdminLTE/" class="nav-link">
              <i class="fas fa-chart-bar"></i>
              <p>
                Charts
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="../../scripts/logout.php" class="nav-link">
            <i class="fas fa-sign-out-alt"></i>
              <p>Log out</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>