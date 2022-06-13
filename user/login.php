<?php

    require_once('helper.php');

    $email =$_GET['email'];
    $password =md5($_GET['password']);

    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $check = mysqli_query($db_connect, $query);

    if ($check) 
    {
      if (empty(mysqli_fetch_array($check))) {
        respone(400,array('message'=>'User belum terdaftar!'));
      }else
        {
            respone(200,array('message'=>'User terdaftar!'));
        } 
    }else{
        respone(400,array('message'=>'error!'));
    }

    mysqli_close($db_connect);
?>