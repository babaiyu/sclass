<?php
    include('koneksi.php');
    include "session.php";
    $user = $_SESSION['user'];
    $code = $_POST[blank];

    $sql = 'update student set code_class="'.$code.'" where username="'.$user.'" ';
    $query = mysqli_query($conn, $sql);

    if($query) {
        echo "<script>window.location.href='index.php';</script>";
    } else {
        echo "<script>window.location.href='class.php';</script>";
    }
?>
