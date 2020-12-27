<?php
    $user_id = $_POST['update_id'];
    if(!$user_id)
    {
        $id = $_SESSION['logged']['id_to_update'];
    }
    else
    {
        $id = $user_id;
    }
    $_SESSION['logged']['id_to_update'] = $id;
    require_once '../../scripts/connect.php';
    
    $sql = "SELECT name, surname, u.status_id,email,nickname,status_name, u.permission_id,permission_name,last_login,avatar 
    FROM `users` as u INNER JOIN permissions as p ON u.permission_id = p.permission_id 
   INNER JOIN status as s ON u.status_id = s.status_id WHERE u.id = '".$id."' ";

    $result = $conn->query($sql);
    if($result->num_rows != 0)
    $user = $result->fetch_assoc();
?>
<div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-info">
                <h3 class="widget-user-username"><?php echo "$user[name] $user[surname]" ?></h3>
                <h5 class="widget-user-desc">Last login at: <?php echo "$user[last_login]" ?></h5>
              </div>
              <div class="widget-user-image">
                <?php
                echo <<< USER_AVATAR
                    <img class="img-circle elevation-2" src="../../dist/img/$user[avatar]" alt="User Avatar"> 
                USER_AVATAR;
                ?>
              </div>

              </div>
              <!-- /.card-header -->
              <!-- form start   -->
              <form role="form" method="POST" action="../../scripts/update_user.php">
                  <div class="card-footer">                      
                     <?php
                        
                        if($result->num_rows != 0)
                        {
                            // while($user = $result->fetch_assoc())
                            // {
                                // echo<<< USER_AVATAR
                                // <div class="card-body p-0">
                                // <ul class="users-list clearfix">
                                //     <li>
                                //     <a class="users-list-name" href="../../#">$user[name] $user[surname]</a>
                                //     <span class="users-list-date">Today</span>
                                //     </li>
                                // </div>
                                // USER_AVATAR;
                                    echo<<<USER_MAIL
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name = "email" class="form-control" id="exampleInputEmail1" value='$user[email]'>
                                    </div>
                                USER_MAIL;
                                    echo<<<USER_NAME
                                    <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name ="name" class="form-control" id="exampleInputName1" value='$user[name]'>
                                    </div>
                                USER_NAME;
                                    echo<<<USER_SURNAME
                                    <div class="form-group">
                                    <label for="exampleInputSurname1">Surname</label>
                                    <input type="text" name = "surname" class="form-control" id="exampleInputSurname1" value='$user[surname]'>
                                    </div>
                                USER_SURNAME;
                                    echo<<<USER_NICKNAME
                                    <div class="form-group">
                                    <label for="exampleInputNickname1">Nickname</label>
                                    <input type="text" name = "nickname" class="form-control" id="exampleInputNickname1" value='$user[nickname]'>
                                    </div>
                                USER_NICKNAME;
                                $currentStatus = $user['status_name'];
                                $currentStatusID = $user['status_id'];
                                    echo<<<USER_STATUS
                                        <p>Status:</p>
                                USER_STATUS;
                                require_once "../../scripts/connect.php";
                                if($conn->connect_errno == 0)
                                {
                                  $statusList = mysqli_query($conn,'SELECT * FROM status');
                                  while($rowRace=mysqli_fetch_array($statusList))
                                  {
                                      echo<<<USER_STATUS
                                      <input type="radio" id="status$rowRace[status_id]" 
                                      name="customRadioStatus" 
                                      USER_STATUS;
                                      if($rowRace['status_id'] == $currentStatusID)
                                      {
                                          echo"value='$rowRace[status_id]' checked>";
                                      }
                                      else
                                      {
                                          echo" value='$rowRace[status_id]'>";
                                      }
                                      echo<<<USER_STATUS
                                      <label for="status$rowRace[status_id]">$rowRace[status_name]</label><br>
                                      USER_STATUS;
                                  }
                                }
                                
                                echo"<br>";
                                $currentPerm = $user['permission_name'];
                                $currentPermID = $user['permission_id'];
                                  echo<<<USER_PERMISSION
                                    <p>Uprawnienia:</p>
                                USER_PERMISSION;
                                //require_once "../../scripts/connect.php";
                                if($conn->connect_errno == 0)
                                {
                                  $permList = mysqli_query($conn,'SELECT * FROM permissions');
                                  while($rowRace=mysqli_fetch_array($permList))
                                  {
                                      echo<<<USER_STATUS
                                      <input type="radio" id="perm$rowRace[permission_id]" 
                                      name="customRadioPerm" 
                                      USER_STATUS;
                                      if($rowRace['permission_id'] == $currentPermID)
                                      {
                                          echo"value='$rowRace[permission_id]' checked>";
                                      }
                                      else
                                      {
                                          echo"value='$rowRace[permission_id]'>";
                                      }
                                      echo<<<USER_STATUS
                                      <label for="perm$rowRace[permission_id]">$rowRace[permission_name]</label><br>
                                      USER_STATUS;
                                  }
                                  $conn->close();
                                }
                            //}                            
                        } 
                        else
                        {
                          echo "no data";
                        }
                    ?>
                    <hr>
                <div class="card">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.widget-user -->
          </div>