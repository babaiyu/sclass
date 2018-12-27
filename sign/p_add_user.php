<?php
    include('koneksi.php');

    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email      = $_POST['email'];
    
    $sql = 'insert into student (username, password, email) values("'.$username.'", "'.$password.'", "'.$email.'") ';
    $query = mysqli_query($conn, $sql);
        
    if ($query) {
        echo "<script>window.alert('Good, Account was Created'); window.location.href='../signin_user.php';</script>";
    } else {
        echo "<script>window.alert('Oops, Something is Wrong'); window.location.href='../signup_user.php';</script>";
    }
?>
