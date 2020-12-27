 <?php
  require_once '../../scripts/connect.php';
  $user_id = $_SESSION['logged']['user_id'];

  $sql ="SELECT character_id , car.name as name, rac.name as race, cla.name as characterClass, car.description, car.agility, car.strength, car.wisdom 
  FROM characters car,races rac,classes cla 
  Where car.race_id = rac.race_id 
  and cla.class_id = car.class_id
  and car.owner_id = ".$user_id."";

  $result = $conn->query($sql);
  $userNum = $result->num_rows;
  
  if ($userNum > 0){
    while ($character = $result->fetch_assoc()) {
      $character_id = $character['character_id'];
      $characterName = $character['name'];
      $characterRace = $character['race'];
      $characterClass = $character['characterClass'];
      $characterDescription = $character['description'];
      $characterAgility = $character['agility'];
      $characterStrength = $character['strength'];
      $characterWisdom = $character['wisdom'];
      echo '
        <tr>
          <td>'.$characterName.'</td>
          <td>'.$characterRace.'</td>
          <td>'.$characterClass.'</td>
          <td>'.$characterDescription.'</td>
          <td>'.$characterAgility.'</td>
          <td>'.$characterStrength.'</td>
          <td>'.$characterWisdom.'</td>';
          echo "<td><button type='button' id='$character_id' onclick='deleteChar(this.id)' class='btn btn-tool'>
          <i class='fas fa-times'></i>
          </button></td>";
          echo"
       </tr> 
       ";
    }
  }
  else {
    echo <<< EMPTY
    <td>
      <td colspan="5">Brak postaci w bazie danych</td>
    </td>
    EMPTY;
  }
?>                                            
