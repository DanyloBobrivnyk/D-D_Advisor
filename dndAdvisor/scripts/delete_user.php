<?php
    require_once('./connect.php');
    $id = $_POST['user_id'];
    $sql = "DELETE FROM users WHERE id = '{$id}'";
    $conn->query($sql);
    header("Refresh:0");
?>