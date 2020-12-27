<!-- PAGE SCRIPTS -->
<script src="../../scripts/admin.js"></script>
<!-- jQuery -->
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
          <div class="col-12 col-sm-2 col-md-2">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Active users</span>
                <?php
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
                ?>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <!-- USER LIST ADMIN-->
        <?php
            require_once('../../pages/layout/content_user_info_admin.php');              
        ?>

      <!-- CHARACTER LIST-->
          <?php
            //require_once('../../pages/layout/content_character_list_admin.php');              
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
