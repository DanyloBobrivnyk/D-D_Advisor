<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Administrator systemu</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Sales</span>
                <?php
                    /*require_once '../../scripts/connect.php';

                    $sql = "SELECT permission, count(*) as 'num' FROM 'user' as u INNER JOIN
                    'permissions' as p ON u.permission_id = p.id GROUP BY 'permission_id'
                    ORDER BY p.id";

                    $result = $conn->query($sql);

                    $k = 0;
                    while($row = $result->fetch_assoc())
                    {
                      $tab[$i] = $row['num'];
                      $k++;
                    }

                    //adm - tab[0], uzyktownuk - tab[1], moderator - tab[2]

                    //zablokowani uzytkownicy
                    $sql = "SELECT active"*/
                  ?>
                <span class="info-box-number">760</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            
            <!-- /.card -->
            <div class="row">
             
              <!-- /.col -->

              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
                        <img src="../../dist/img/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user8-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Jane</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user2-160x160.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user5-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user4-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user3-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="../../javascript::">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <div class="col-md-6">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Latest Members</h3>

                    <div class="card-tools">
                      <span class="badge badge-danger">8 New Members</span>
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <!-- /.card-header -->

                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
                        <img src="../../dist/img/user1-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Alexander Pierce</a>
                        <span class="users-list-date">Today</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user8-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Norman</a>
                        <span class="users-list-date">Yesterday</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Jane</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">John</a>
                        <span class="users-list-date">12 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user2-160x160.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Alexander</a>
                        <span class="users-list-date">13 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user5-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Sarah</a>
                        <span class="users-list-date">14 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user4-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Nora</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                      <li>
                        <img src="../../dist/img/user3-128x128.jpg" alt="User Image">
                        <a class="users-list-name" href="../../#">Nadia</a>
                        <span class="users-list-date">15 Jan</span>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer text-center">
                    <a href="../../javascript::">View All Users</a>
                  </div>
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Użytkownicy</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->    
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Imię</th>
                      <th>Nazwisko</th>
                      <th>Uprawnienia</th>
                      <th>Status</th>
                      <th>Ostatnie logowanie</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        require_once '../../scripts/connect.php';

                        $sql = "SELECT name, surname, status, permission, last_login FROM `user` as u 
                        INNER JOIN permissions as p ON u.permission_id = p.id INNER JOIN status as s 
                        ON u.status_id = s.id ORDER BY p.id";

                        $result = $conn->query($sql);

                        if ($result->num_rows != 0){
                          while ($user = $result->fetch_assoc()) {
                            echo <<<USER
                            <tr>
                              <td>$user[name]</td>
                              <td>$user[surname]</td>
                              <td>
                            USER;
                            switch ($user['permission']) {
                              case 'Administrator':
                                echo '<span class="badge badge-info">';
                                break;
                              case 'User':
                                echo '<span class="badge badge-success">';
                                break;
                              case 'Moderator':
                                echo '<span class="badge badge-warning">';
                                break;
                            }
                            echo <<<PERMISSION
                              $user[permission]</span></td>
                          PERMISSION;

                          //szablony nizej
                              #<td>$user[permission]</td>
                              #<td>$user[status_id]</td>
                            echo<<<STATUS
                              <td>
                            STATUS;
                              switch ($user['status']) {
                                case 'aktywny':
                                  echo '<span class="badge badge-success">'.ucfirst($user['status']);
                                  break;
                                  case 'nieaktywny':
                                    echo '<span class="badge badge-warning">'.ucfirst($user['status']);
                                    break;
                                    case 'zablokowany':
                                      echo '<span class="badge badge-danger">'.ucfirst($user['status']);
                                      break;
                              }
                            echo <<<STATUS
                              </span></td>
                            STATUS;

                            if($user['last_login'] == null){
                              echo "<td>Brak logowania</td>";
                            }
                            else{
                              echo "<td>$user[last_login]</td>";
                            }
                            echo <<<USER
                            </tr>
                            USER;
                          }
                        }
                        else {
                          echo <<< EMPTY
                          <tr>
                            <td colspan="5">Brak użytkowników w bazie danych</td>
                          </tr>
                        EMPTY;
                        }
                      ?>
                    <!--<tr>
                      <td><a href="../../pages/examples/invoice.html">Kok</a></td>
                      <td>Call of Duty IV</td>
                      <td><span class="badge badge-success">Shipped</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">90,80,90,-70,61,-83,63</div>
                      </td>
                    </tr>
                    <tr>
                      <td><a href="../../pages/examples/invoice.html">OR1848</a></td>
                      <td>Samsung Smart TV</td>
                      <td><span class="badge badge-warning">Pending</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">90,80,-90,70,61,-83,68</div>
                      </td>
                    </tr>
-->
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="../../javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="../../javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-4">
            <!-- Info Boxes Style 2 -->
            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Inventory</span>
                <span class="info-box-number">5,200</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="far fa-heart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Mentions</span>
                <span class="info-box-number">92,050</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Downloads</span>
                <span class="info-box-number">114,381</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
            <div class="info-box mb-3 bg-info">
              <span class="info-box-icon"><i class="far fa-comment"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Direct Messages</span>
                <span class="info-box-number">163,921</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->

            
            <!-- /.card -->

            <!-- PRODUCT LIST -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Recently Added Products</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <ul class="products-list product-list-in-card pl-2 pr-2">
                  <li class="item">
                    <div class="product-img">
                      <img src="../../dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="../../javascript:void(0)" class="product-title">Samsung TV
                        <span class="badge badge-warning float-right">$1800</span></a>
                      <span class="product-description">
                        Samsung 32" 1080p 60Hz LED Smart HDTV.
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../../dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="../../javascript:void(0)" class="product-title">Bicycle
                        <span class="badge badge-info float-right">$700</span></a>
                      <span class="product-description">
                        26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../../dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="../../javascript:void(0)" class="product-title">
                        Xbox One <span class="badge badge-danger float-right">
                        $350
                      </span>
                      </a>
                      <span class="product-description">
                        Xbox One Console Bundle with Halo Master Chief Collection.
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                  <li class="item">
                    <div class="product-img">
                      <img src="../../dist/img/default-150x150.png" alt="Product Image" class="img-size-50">
                    </div>
                    <div class="product-info">
                      <a href="../../javascript:void(0)" class="product-title">PlayStation 4
                        <span class="badge badge-success float-right">$399</span></a>
                      <span class="product-description">
                        PlayStation 4 500GB Console (PS4)
                      </span>
                    </div>
                  </li>
                  <!-- /.item -->
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer text-center">
                <a href="../../javascript:void(0)" class="uppercase">View All Products</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>