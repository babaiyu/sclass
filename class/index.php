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
    <?php include('navbar.php');?>

    <div class="container">
        <div class="row">
            <div class="col s4" style="margin-top: 25px;">
                <div class="card-panel green accent-4 white-text">
                    <?php
                    include('koneksi.php');
                    $s = 'select * from student';
                    $q = mysqli_query($conn, $s);
                    while($d = mysqli_fetch_array($q)) {
                        if($_SESSION['user'] == $d['username']) {
                            $de = $d ;
                        }
                    }  
                ?>
                        <h5>Welcome to SClass, </h5>
                        <h4><b><?php echo $_SESSION['user'];?></b></h4>
                </div>
                <div class="card-panel yellow grey-text">
                    <p>If you have a Class, Please don't click <i>Join Class &amp; Create Class!</i></p>
                </div>
            </div>
            <?php
                $sql = 'select student.username, class.code_class, class.name_class, class.subject_class from student inner join class on student.code_class=class.code_class where student.username="'.$_SESSION['user'].'" ';
                $query = mysqli_query($conn, $sql);
                while($dclass = mysqli_fetch_array($query)){
            ?>
                <div class="col s8">
                    <div class="card">
                        <div class="card-title blue">
                            <p style="margin-left: 22px; color: white;">

                                <a href="class.php" class="white-text">
                                    <?php
                                        echo $dclass['name_class'];
                                    ?>
                                </a>
                            </p>
                        </div>
                        <div class="card-content">
                            <?=$dclass['subject_class'];?>
                        </div>
                        <div class="card-content light-blue">
                            <p class="left white-text">
                                <?=$dclass['code_class'];?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
        </div>
    </div>

</body>

</html>
