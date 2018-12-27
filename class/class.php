<html>

<head>
    <title>SClass | Welcome to the Class</title>
    <link rel="icon" href="../images/logoaplikasi2.png">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/materialize.min.css">
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/materialize.min.js"></script>
</head>

<body>
    <?php include"navbar.php";?>
    <?php
            include "koneksi.php";
            $sql = 'select student.username, class.code_class, class.name_class, class.subject_class from student inner join class on student.code_class=class.code_class where student.username="'.$_SESSION['user'].'" ';
            $ambil_data = mysqli_query($conn, $sql);
            $hasil_data = mysqli_fetch_array($ambil_data);
        ?>
        <div class="container">
            <div class="row">
                <div class="col s4">
                    <div class="card-panel green accent-4 white-text">
                        <h5>Welcome to,
                            <b><?=$hasil_data['name_class'];?></b> Class
                        </h5>
                        <p>
                            <?=$hasil_data['subject_class'];?>
                        </p>
                        <p>
                            <i>
                            <?=$hasil_data['code_class'];?>
                            </i>
                        </p>
                    </div>
                    <div class="card-panel grey lighten-4">
                        <form method="post" action="post.php">
                            <p>You Can Post Something</p>
                            <div class="input-field">
                                <textarea name="content" class="materialize-textarea" placeholder="Create a Post"></textarea>
                            </div>
                            <div class="input-field">
                                <button class="btn wave-effect blue"><i class="fa fa-send"></i> Post</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-panel red darken-1 white-text">
                        <p>Click here if you want to Out from
                            <i><?=$hasil_data['name_class'];?></i> Class</p>
                        <form action="out_class.php"><button class="btn waves-effect red"><i class="fa fa-close"></i> Out</button></form>
                    </div>
                </div>
                <div class="col s8">
                    <?php
                        include "koneksi.php";
                        $s = 'select * from post where code_class="'.$hasil_data['code_class'].'" order by id_post desc ';
                        $q = mysqli_query($conn, $s);
                        while($datap = mysqli_fetch_array($q)) {
                    ?>
                        <div class="card">
                            <div class="card-title">
                                <form method="post" action="delete_post.php?id_post=<?php echo $datap['id_post'];?>">
                                    <small>
                                    <h6 class="grey-text" style="margin-left: 10px; padding-top: 10px;">~ <?=$datap['username'];?></h6>
                                    <small class="right" style="margin-top: -25px; margin-right: 10px;"><button class="btn-floating red"><i class="fa fa-trash"></i></button></small>
                                    </small>
                                </form>
                            </div>
                            <div class="card-content">
                                <p>
                                    <?=$datap['content'];?>
                                </p>
                            </div>
                            <div class="card-action">
                                <?php
                                    include "koneksi.php";

                                    $scomment = 'select * from comment where id_post="'.$datap['id_post'].'" ';
                                    $qcomment = mysqli_query($conn, $scomment);
                                    while($dcomment = mysqli_fetch_array($qcomment)) {
                                ?>
                                    <div class="card-panel grey lighten-4">
                                        <form method="post" action="delete_comment.php?id_comment=<?php echo $dcomment['id_comment'];?>">
                                            <p><small><?=$dcomment['comment'];?></small></p>
                                            <p><small class="right" style="margin-top: -75px; margin-right: -30px;"><button class="btn-floating waves-effect red darken-3"><i class="fa fa-trash"></i></button></small></p>
                                            <p><small class="right grey-text">~<?=$dcomment['username'];?></small></p>
                                        </form>
                                    </div>
                                    <?php } ?>
                                    <form method="post" action="comment.php?id_post=<?php echo $datap['id_post'];?>">
                                        <div class="input-field">
                                            <input type="text" name="comment" placeholder="Comment a Post">
                                            <button class="btn-floating blue waves-effect"><small><i class="fa fa-reply small" style="font-size: 10px;"></i></small></button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                        <?php
                        }      
                    ?>
                </div>
            </div>
        </div>
</body>

</html>
