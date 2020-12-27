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
                      <th>E-mail</th>
                      <th>Uprawnienia</th>
                      <th>Status</th>
                      <th>Ostatnie logowanie</th>
                      <th></th>
                      <th></th>
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
                              <td>$user[email]</td>
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
                          echo<<<STATUS
                            <td>
                          STATUS;
                            switch ($user['status_name']) {
                              case 'Aktywny':
                                echo '<span class="badge badge-success">'.ucfirst($user['status_name']);
                                break;
                                case 'Nieaktywowany':
                                  echo '<span class="badge badge-warning">'.ucfirst($user['status_name']);
                                  break;
                                  case 'Zablokowany':
                                    echo '<span class="badge badge-danger">'.ucfirst($user['status_name']);
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
                              echo "<td><button type='button' id=".$user['id']." onclick='deleteUser(this.id)' class='btn btn-tool'>
                              <i class='fas fa-times'></i>
                            </button></td>";
                            echo "<td><form action='../../pages/UI/update_user_page.php' method='post'>
                            <button type ='submit' value='".$user['id']."' name='update_id'
                             class='btn btn-tool'><i class='fas fa-user-edit'></i></button>
                          </form>";
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
          <div class="col-lg-3 col-1">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php
                  require_once '../../scripts/connect.php';

                  $sql = "SELECT count(*) from `users` as u 
                    INNER JOIN permissions as p ON u.permission_id = p.permission_id 
                    INNER JOIN status as s ON u.status_id = s.status_id
                    WHERE s.status_id = 1";

                  $result = $conn->query($sql);
                  if ($result->num_rows != 0){
                    $row = $result->fetch_array();
                      echo <<< ACTIVE_USERS
                        <span class="info-box-number">$row[0]</span>
                      ACTIVE_USERS;
                  }
                ?></h3>

                <p>Aktywnych użytkowników i moderatorów</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <!-- <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a> -->
          </div>
                  
            <!--./element end -->

            <div class="info-box bg-danger">
              <span class="info-box-icon"><i class="fas fa-thumbs-down"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Zablokowanych użytkowników</span>
                <span class="info-box-number">
                  <?php
                  require_once '../../scripts/connect.php';

                  $sql = "SELECT count(*) from `users` as u 
                    INNER JOIN permissions as p ON u.permission_id = p.permission_id 
                    INNER JOIN status as s ON u.status_id = s.status_id
                    WHERE s.status_id = 2";

                  $result = $conn->query($sql);
                  if ($result->num_rows != 0){
                    $row = $result->fetch_array();
                      echo <<< ACTIVE_USERS
                        $row[0]
                      ACTIVE_USERS;
                  }
                ?>
                </span>
                <!-- <div class="progress">
                  <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
                  70% Increase in 30 Days
                </span> -->
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          
          <!-- Profile Image -->
          <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  
                  <?php
                    require_once '../../scripts/connect.php';
                    $id = 29;
                    $sql = "SELECT name, surname, nickname, status_name, permission_name, last_login, avatar
                      FROM `users` as u INNER JOIN permissions as p ON u.permission_id = p.permission_id 
                      INNER JOIN status as s ON u.status_id = s.status_id
                      WHERE id = $id";
                    
                    $result = $conn->query($sql);
                    if ($result->num_rows != 0)
                    {
                      $user = $result->fetch_assoc();
                    }
                    echo <<< USER_PICTURE
                    <img class="profile-user-img img-fluid img-circle"
                         src="../../dist/img/$user[avatar]"
                         alt="User profile picture">
                    USER_PICTURE;
                    ?>

                </div>

                <h3 class="profile-username text-center"><?php echo "$user[name] $user[surname]" ?></h3>

                <p class="text-muted text-center">Admin profile</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <?php
                          echo <<<RANDOM_USER
                            <li class="list-group-item">
                            <b>Characters</b><a class="float-right">not found</a>
                            </li>
                            <li class="list-group-item">
                              <b>Status</b> <a class="float-right">$user[status_name]</a>
                            </li>
                            <li class="list-group-item">
                              <b>Uprawnienia</b><a class="float-right">$user[permission_name]</a>
                            </li>
                          RANDOM_USER;     
                    ?>
                </ul>

                <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->