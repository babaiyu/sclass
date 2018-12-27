<?php
    include "koneksi.php";
    include "session.php";

    $code = $_POST['code_class'];

    $a  = 'select * from class where code_class="'.$code.'"';
    $b  = mysqli_query($conn, $a);
    $c = mysqli_fetch_array($b);

    if($code == $c['code_class']) {
        $sql = 'update student set code_class="'.$code.'" where username="'.$_SESSION['user'].'" ';
        $query = mysqli_query($conn, $sql);
        if($query) {
            echo "<script>window.alert('Great!, Class is Joined'); window.location.href='index.php';</script>";
        } else {
            echo "<script>window.alert('Oops, Something is Wrong!'); window.location.href='index.php';</script>";
        }
    } else {
        echo "<script>window.alert('Oops!, Class is not Finded'); window.location.href='index.php';</script>";
    }
    
?>
