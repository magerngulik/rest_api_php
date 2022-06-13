<?php

    require_once('helper.php');

    $query = "SELECT * FROM notes";
    $sql = mysqli_query($db_connect, $query);

    if ($sql) 
    {
        $result = array();
        while ($row = mysqli_fetch_array($sql))
        {
            array_push($result, array(
                'id' => $row['id'],
                'note' => $row['note'],
         
            ));
        }

        echo json_encode(array('result'=>$result));
        
    }


?>