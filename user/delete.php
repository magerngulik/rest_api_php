<?php

    require_once('helper.php');
    //menambahkan extensi put/update karna php tidak punya fungsi ini

    parse_str(file_get_contents('php://input'), $value);

    $id =$value['id'];

    $query = "DELETE FROM notes where id='$id'";
    $sql = mysqli_query($db_connect, $query);

    if ($sql) 
    {
        echo json_encode(array('message'=>'data terhapus!'));     
    }else {
        echo json_encode(array('message'=>'error!'));
    }


?>