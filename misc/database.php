<?php
    #Example Credentials
    $db_server = "localhost:3306";
    $db_user = "root";
    $db_pass = 'paulo'; 
    $db_name = "testPHP";

    
    #Keep this empty
    $conn = "";

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (mysqli_sql_exception) {
        echo "Database is offline! (MariaDB) <br>";
        echo "Current user: $db_user";
}
?>