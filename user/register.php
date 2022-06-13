<?php

    require_once('helper.php');

    $name =$_POST['name'];
    $email =$_POST['email'];
    $password =md5($_POST['password']);

    $query = "SELECT email FROM user where email='$email'";
    $check = mysqli_query($db_connect, $query);

    if ($check) {
        //cek data nya ada atau tidak
        if (empty(mysqli_fetch_array($check))) {
            $query = "INSERT INTO user(name,email,password) VALUES('$name','$email','$password')";
            $sql = mysqli_query($db_connect, $query);
        
            if ($sql) 
            {
                respone(200,array('message'=>'berhasil register!')); 
            }else {
                respone(400,array('message'=>'gagal register!'));
            }
        }else{
            respone(400,array('message'=>'email sudah terdaftar!'));
        }
    }

    mysqli_close($db_connect);

   
?>