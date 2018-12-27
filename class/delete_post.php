<?php
    include "koneksi.php";
    include "session.php";

    $id_post = $_GET['id_post'];

    $sql = 'delete from post where id_post="'.$id_post.'" ';
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('location: class.php');
    } else {
        echo "error";
    }
?>
