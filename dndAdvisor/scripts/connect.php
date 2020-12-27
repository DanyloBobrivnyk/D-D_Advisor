<?php
    $conn = new mysqli('localhost', 'root', '', 'strona_dd');
    $conn->set_charset('utf8');
    //uzytkownik
    /*
    REVOKE ALL PRIVILEGES ON  `cdv_ti_gr1_dbobrivn`.`user` FROM 'cdv_g1'@'localhost';  
    GRANT SELECT, INSERT ON  `cdv_ti_gr1_dbobrivn`.`user` TO 'cdv_g1'@'localhost';
    */
    //$conn = new mysqli('localhost', 'jan', 'jan', 'cdv_ti_gr1_dbobrivn');
    //polskie znaki
?>