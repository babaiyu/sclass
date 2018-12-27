<?php
    include "koneksi.php";
    include "session.php";

    $content = $_POST['content'];
    
    $a = 'select student.username, class.code_class, class.name_class, class.subject_class from student inner join class on student.code_class=class.code_class where student.username="'.$_SESSION['user'].'" ';
    $ambil_data = mysqli_query($conn, $a);
    $hasil_data = mysqli_fetch_array($ambil_data);

    $sql = 'insert into post (content, code_class, username) values("'.$content.'", "'.$hasil_data['code_class'].'", "'.$_SESSION['user'].'") ';
    $query = mysqli_query($conn, $sql);

    if($query) {
        header('location: class.php');
    } else {
        echo "<script>window.alert('Oops!, Something is Wrong'); window.location.href='class.php';</script>";
    }
?>
