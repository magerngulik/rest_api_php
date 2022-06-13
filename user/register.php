<?php

    require_once('helper.php');

    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =md5($_POST['password']);

    $query = "INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
    $sql = mysqli_query($db_connect, $query);

    if ($sql) 
    {
        respone(200,array('message'=>'berhasil register!')); 
    }else {
        respone(400,array('message'=>'gagal register!'));
    }
    mysqli_close($db_connect);
?>