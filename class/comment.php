<?php
    include "koneksi.php";
    include "session.php";

    $id_post = $_GET['id_post'];

    $comment = $_POST['comment'];

    $a = 'select post.id_post, post.code_class, post.username,  class.code_class from post inner join class on post.code_class=class.code_class where post.username="'.$_SESSION['user'].'" ';
    $b = mysqli_query($conn, $a);
    while($c = mysqli_fetch_array($b)) {
        $post = $c['id_post'];
    }

    $sql = 'insert into comment (comment, username, id_post) values("'.$comment.'", "'.$_SESSION['user'].'", "'.$id_post.'") ';
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('location: class.php');
    } else {
        echo "<script>window.alert('Oops!, Something is Wrong.'); window.location.href='class.php';</script>";
    }
?>
