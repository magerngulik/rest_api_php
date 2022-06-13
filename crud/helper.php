<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'lazdays_crud');
    $db_connect = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Error connecting to MySQL server.');

    header("Content-Type: application/json");
?>