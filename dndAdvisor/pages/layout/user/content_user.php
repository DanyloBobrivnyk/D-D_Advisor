<!-- PAGE SCRIPTS -->
<script src="../../scripts/admin.js"></script>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Użytkownik</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../../#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <?php
        require_once('../../scripts/message_script.php');
      ?>
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

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->            
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Użytkownicy</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
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
                      <th>Nickname</th>
                      <th>Uprawnienia</th>
                      <th>Ostatnie logowanie</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        require_once '../../scripts/connect.php';

                        $sql ="SELECT id, email,name, surname, nickname,status_name, permission_name,last_login 
                        FROM `users` as u INNER JOIN permissions as p ON u.permission_id = p.permission_id 
                        INNER JOIN status as s ON u.status_id = s.status_id ORDER BY p.permission_id";

                        $result = $conn->query($sql);

                        if ($result->num_rows != 0){
                          while ($user = $result->fetch_assoc()) {
                            if($user['id'] == $_SESSION['logged']['user_id'])
                            {
                              continue;
                            }
                            echo <<<USER
                            <tr>
                              <td>$user[name]</td>
                              <td>$user[surname]</td>
                              <td>$user[nickname]</td>
                              <td>
                            USER;
                            switch ($user['permission_name']) {
                              case 'Administrator':
                                echo '<span class="badge badge-info">';
                                break;
                              case 'Użytkownik':
                                echo '<span class="badge badge-success" >';
                                break;
                              case 'Moderator':
                                echo '<span class="badge badge-warning">';
                                break;
                            }
                            echo <<<PERMISSION
                              $user[permission_name]</span></td>
                          PERMISSION;
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
                          <td>
                            <td colspan="5">Brak użytkowników w bazie danych</td>
                          </td>
                        EMPTY;
                        }
                        if(isset($_POST['submit']))
                        {
                          $id = $_POST['id'];
                        }
                        ?>                                            
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <hr>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
      <!-- CHARACTER LIST-->
          <?php
            require_once('../../pages/layout/content_character_list.php');              
          ?>
            <!-- /.info-box -->
            
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
