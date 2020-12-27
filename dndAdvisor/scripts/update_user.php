<!--Admin js script-->
<script src ="../../scripts/admin.js"></script>
<?php
    session_start();
    require_once '../scripts/connect.php';
    if($conn->connect_errno == 0)
    {
        
        $email = $_POST['email'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $nickname = $_POST['nickname'];
        $status = $_POST["customRadioStatus"];
        $permission = $_POST['customRadioPerm'];
        $id = $_SESSION['logged']['id_to_update'];
        $conn->query(
        "UPDATE users SET name='".$name."',surname='".$surname."',nickname='".$nickname."',
        email='".$email."', status_id='".$status."',permission_id='".$permission."' WHERE id = '".$id."'"); 
        if(mysqli_affected_rows($conn) >0 )
        {
            $_SESSION['info'] = "Dane użytkownika zostały zmienione";
            $conn->close();
            header('location:../pages/logged/admin.php');   
        }
        else
        {
            $sql = "SELECT * FROM users WHERE email = ? AND id != ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("si",$email, $id);
            $stmt->execute();
            $result = $stmt->get_result();
            $x = $result->fetch_assoc();
            if($conn->affected_rows == 1)
            {
              $_SESSION['error'] = 'Podany adres email jest zajety';
              $conn->close();
              header('location:../pages/logged/admin.php');  
            }
            else
            {
              $sql = "SELECT * FROM users WHERE nickname = ? AND id != ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("si",$nickname, $id);
              $stmt->execute();
              $result = $stmt->get_result();
              $x = $result->fetch_assoc();
            }
            if($conn->affected_rows == 1)
            {
                $_SESSION['error'] = 'Podany nickname jest zajety';
                $conn->close();
                header('location:../pages/logged/admin.php');   
            }
            else
            {
                $_SESSION['error'] = 'Błąd w zapytaniu sql';
                $conn->close();
                header('location:../pages/logged/admin.php');  
            }
        }
    }
    else
    {
        echo"No connection to the Database";
    }
?>  