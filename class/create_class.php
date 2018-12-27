<html>

<head>
    <title>SClass | Create a Class</title>
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
            <div class="col s4">
                <div class="card-panel blue">
                    <span class="white-text"><h5>Create Class</h5></span>
                    <p>Create a Class to get connection to your friends</p>
                </div>
            </div>

            <div class="col s8 gray">
                <form class="col s12" method="post" action="p_create.php">
                    <h4>Let's Create a Class</h4>
                    <div class="input-field">
                        <p class="blue-text">Class Name</p>
                        <input name="name_class" placeholder="Class Name">
                    </div>
                    <div class="input-field">
                        <p class="blue-text">Class Subject</p>
                        <input name="subject_class" placeholder="Class Subject">
                    </div>
                    <?php
                        $angka = range(1, 5);
                        shuffle($angka);
                        $angkastring = implode($angka);
                        $code = $angkastring;
                    ?>
                        <div class="input-field">
                            <p class="blue-text">Class Code</p>
                            <input name="code_class" placeholder="Class Code" value="<?=$code;?>" class="btn disabled">
                        </div>
                        <div class="input-field">
                            <button class="btn-floating waves-effect green"><i class="fa fa-plus"> </i></button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
