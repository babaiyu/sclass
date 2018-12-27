<?php
    session_start();
    session_destroy();

    echo "<script>window.alert('You Now Sign Out'); window.location.href='../index.php';</script>";
?>
