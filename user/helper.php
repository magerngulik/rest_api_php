<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'lazdays_crud');
    $db_connect = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Error connecting to MySQL server.');

    header("Content-Type: application/json");
    //menambahkan time zone asia
    date_default_timezone_set('Asia/Jakarta');

    //menambahkan function agar bisa mempermudah melakukan respone
    function respone($status_code, $json){
    if ($status_code == 200) {
        header("HTTP/1.1 200 OK");
    } else {
        header("HTTP/1.1 400 Bad Request");
    }    
    echo json_encode($json);
    }


?>