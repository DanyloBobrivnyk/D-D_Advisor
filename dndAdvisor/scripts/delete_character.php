<?php
    require_once('./connect.php');
    $id = $_POST['char_id'];
    $sql = "DELETE FROM characters WHERE character_id = '{$id}'";
    $conn->query($sql);
    header("Refresh:0");
?>