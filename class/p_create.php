<?php
    include('koneksi.php');
    include('session.php');
    
    $a = 'select * from student';
    $b = mysqli_query($conn, $a);
    while($data=mysqli_fetch_array($b)){
        if($_SESSION['user'] == $data['username']) {
            $user = $data['username'];
            $pass = $data['password'];
            $email = $data['email'];
        }
    }

    $name_class     = $_POST['name_class'];
    $subject_class  = $_POST['subject_class'];
    $code_class     = $_POST['code_class'];

    $sql = 'insert into class (name_class, subject_class, code_class) values("'.$name_class.'", "'.$subject_class.'", "'.$code_class.'") ';
    $query = mysqli_query($conn, $sql);
    
    if($query) {
        $s = 'update student set code_class="'.$code_class.'" where username="'.$user.'" ';
        $q = mysqli_query($conn, $s);
        
        if($q) {
            echo "<script>window.alert('Class is Created');window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>window.alert('Oops! Class is not Created');window.location.href='../class/index.php';</script>";
    }
?>
