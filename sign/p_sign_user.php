<?php
    session_start();
    mysql_connect('localhost', 'root', '');
    mysql_select_db('sclass');

    include('koneksi.php');

    $s = 'select * from student';
    $q = mysqli_query($conn, $s);
    while($data=mysqli_fetch_array($q)){
        $id = $data['id_student'];
    }

    $user=$_POST['username'];
    $pass=$_POST['password'];

    $u=mysql_real_escape_string($user);
    $p=mysql_real_escape_string($pass);

    $cek=mysql_query("select * from student where username='$u' and password='$p'");
    $al=mysql_num_rows($cek);
    if  ($al == 1)
        {
        $_SESSION['id']=$id;
        $_SESSION['user']=$u;
        echo "<script>window.location.href='../class/index.php';</script>";
    }
    else {
        echo "<script>window.alert('Oops!, Something is Wrong');window.location.href='../signin_user.php';</script>";
    }
?>
