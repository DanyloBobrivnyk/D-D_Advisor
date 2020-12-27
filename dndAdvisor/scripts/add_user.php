<?php
  function backFunction($err)
  {
    if ($err==1) {
      ?>
        <script type="text/javascript">
          window.history.back();
         </script>
      <?php
         exit();
    }
  }
  
  session_start();
  if (!empty($_POST['name']) && !empty($_POST['surname'])
  && !empty($_POST['email']) && !empty($_POST['nickname']) 
  && !empty($_POST['pass1'])  && !empty($_POST['pass2'])) 
  {
    $error=0;
    if (!isset($_POST['terms']))    {
      $_SESSION['error'] = 'Zaznacz zgodę na warunki w regulaminie!';
      $error=1;
      backFunction($error);
    }

    if ($_POST['pass1'] != $_POST['pass2'])    {
      $_SESSION['error'] = 'Hasła są różne!';
      $error=1;
      backFunction($error);
    }

    require_once '../scripts/connect.php';
    if($conn->connect_errno){
      $_SESSION['error'] = 'Błędne połączenie z bazą danych';
      header('location: ../pages/UI/register.php');
    }else{
      //prawidłowe połączene z bazą danych, wszystkie pola wypełnione
      $name = $_POST['name'];
      $surname = $_POST['surname'];
      $email = $_POST['email'];
      $nickname = $_POST['nickname'];
      $pass = $_POST['pass1'];
      
      //$birthday = $_POST['bithday'];
      //szyfrowanie hasła za pomocą ARGON2ID
      //dzialamy tylko na varchar(100) 	utf8mb4_general_ci 	
      
      $pass = password_hash($pass, PASSWORD_DEFAULT);

      $sql = "INSERT INTO `users`(`name`, `surname`,`nickname`, `email`, `pass`) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql); //unikniecie sql-incjection
      $stmt->bind_param("sssss", $name, $surname, $nickname, $email, $pass);     
       //s-string, i-int, i inne

      if($stmt->execute())
      {
        $_SESSION['info'] = "Użytkownik jest prawidlowo dodany!";
        header('location: ../index.php');
        exit();
      }
      else
      {
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $result = $stmt->get_result();
        $x = $result->fetch_assoc();
        if($conn->affected_rows == 1){
          $_SESSION['error'] = 'Podany adres email lub haslo sa bledne';
        }
        else
        {
          $sql = "SELECT * FROM users WHERE nickname = ?";
          $stmt = $conn->prepare($sql);
          $stmt->bind_param("s",$nickname);
          $stmt->execute();
          $result = $stmt->get_result();
          $x = $result->fetch_assoc();
          if($conn->affected_rows == 1)
          {
            $_SESSION['error'] = 'Podany nickname jest zajety';
          }
          else
          {
            $_SESSION['error'] = 'Błąd w zapytaniu sql';
          }
        }
        ?>
        <script type="text/javascript">
          window.history.back();
        </script>
        <?php
      }
    }
  }
  else
  {
    $_SESSION['error'] = 'Wypełnij wszystkie pola!';
    ?>
      <script>
        window.history.back();
      </script>
    <?php
  }
?>
