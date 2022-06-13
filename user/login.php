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
            //untuk melakukan update data pada login terakhir user
            $date = date('Y-m-d');
            $update ="UPDATE user set last_login='$date' where email='$email'";
            mysqli_query($db_connect, $update);

            //untuk mengambil data user yang sudah login
            $user =mysqli_query($db_connect, $query);
            $result = array();
            while($row = mysqli_fetch_array($user))
            {
                array_push($result, array(
                    'id' => $row['id'],
                    'name' => $row['name'],
                    'email' => $row['email'],
                    'last_login' => $row['last_login'],
                ));
            }
            respone(200,
            array('message'=>'Data berhasil di masukan!',
            'result'=>$result
        ));
        } 
    }else{
        respone(400,array('message'=>'error!'));
    }

    mysqli_close($db_connect);
?>