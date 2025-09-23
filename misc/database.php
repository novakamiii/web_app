<?php
    #Uncomment your credentials if needed.
    $db_server = "localhost";
    $db_user = "root";
    
    #$db_pass = 'root'; //reizu
    #$db_name = 'testphp'; //reizu

    $db_pass = 'paulo'; //nova 
    $db_name = "testPHP"; //nova
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo "Database is offline! (MariaDB)";
}
?>