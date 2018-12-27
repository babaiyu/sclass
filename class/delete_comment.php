<?php
    include "koneksi.php";
    include "session.php";

    $id_comment = $_GET['id_comment'];

    $sql = 'delete from comment where id_comment="'.$id_comment.'" ';
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('location: class.php');
    } else {
        echo "error";
    }
?>
