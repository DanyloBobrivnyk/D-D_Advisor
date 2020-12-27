<div class="col-md-6">
            <!-- MAP & BOX PANE -->            
            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Postaci</h3>

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
                      <th>Imie</th>
                      <th>Klasa</th>
                      <th>Rasa</th>
                      <th>Opis</th>
                      <th>Agility</th>
                      <th>Strength</th>
                      <th>Wisdom</th>
                      <th>Wlasciciel</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        require_once '../../scripts/connect.php';

                        $sql ="SELECT character_id, c.name, r.name as race, cl.name as class, c.description,agility,strength,wisdom, c.class_id,c.race_id,owner_id,u.nickname as user_name 
                        FROM `characters` as c 
                        INNER JOIN classes as cl ON c.class_id = cl.class_id 
                        INNER JOIN races as r ON c.race_id = r.race_id 
                        INNER JOIN users as u ON c.owner_id = u.id 
                        ORDER BY c.name ";

                        $result = $conn->query($sql);

                        if ($result->num_rows != 0){
                          while ($character = $result->fetch_assoc()) {
                            echo <<<USER
                            <tr>
                              <td>$character[name]</td>
                              <td>$character[class]</td>
                              <td>$character[race]</td>
                              <td>$character[description]</td>
                              <td>$character[agility]</td>
                              <td>$character[strength]</td>
                              <td>$character[wisdom]</td>
                              <td>$character[user_name]</td>
                            USER;
                            echo <<<USER
                            </tr>
                            USER; 
                          }
                        }
                        else {
                          echo <<< EMPTY
                          <td>
                            <td colspan="5">Brak characterow w bazie danych</td>
                          </td>
                        EMPTY;
                        }
                        /*if(isset($_POST['submit']))
                        {
                          $id = $_POST['id'];
                        }*/
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
