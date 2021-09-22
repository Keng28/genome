<?php 

    $db_host = "localhost"; // localhost server
    $db_user = "root"; // database username
    $db_password = "Keng1234"; // database password
    $db_name = "ge"; // database name

    try {

        $db = new PDO("mysql:host={$db_host};dbname={$db_name}", $db_user, $db_password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "good";

    } catch(PDOException $e) {
        $e->getMessage();
        echo "fail";
    }

?>