<?php
session_start();

if (!empty($_POST['email']) && !empty($_POST['password'])) {
    require_once('./connect.php');
    if ($conn->connect_errno != 0) {
        $_SESSION['error'] = "Błędne połączenie z bazą danych";
        header("location: ../index.php");
        exit();
    }

    $email = htmlentities($_POST['email'], ENT_QUOTES, "UTF-8");
    $pass = htmlentities($_POST['password'], ENT_QUOTES, "UTF-8");

    $sql = sprintf("SELECT * FROM `users` WHERE email='%s'", 
    mysqli_real_escape_string($conn, $email));
    if ($res = $conn->query($sql)) {
        if (!$res->num_rows) {
            $_SESSION['error'] = "Niepoprawny email lub hasło";
            header('location: ../index.php');
            exit();
        }
        $row = $res->fetch_assoc();
        if (!password_verify($pass,$row['pass'])) {
            $_SESSION['error'] = "Niepoprawny email lub hasło";
            header('location: ../index.php');
            exit();
        }

        $_SESSION['logged']['user_id'] = $row['id'];
        $_SESSION['logged']['name'] = $row['name'];
        $_SESSION['logged']['surname'] = $row['surname'];
        $_SESSION['logged']['email'] = $row['email'];
        $_SESSION['logged']['photo_path'] = $row['avatar'];
        $_SESSION['logged']['status'] = $row['status_id'];
        $_SESSION['logged']['permission'] = $row['permission_id'];
        $_SESSION['logged']['id_to_update'] = null;

        $conn->query("UPDATE users SET last_login = CURRENT_TIMESTAMP() WHERE email='" . $row['email'] . "'");
        $conn->close();

        header('location:../pages/logged/admin.php');
    }
} else {
    $_SESSION['error'] = "Wypełnij wszystkie pola";
    header("location: ../index.php");
    exit();
}
?>
