<ul id="dropdown1" class="dropdown-content">
    <li><a href="signout.php"><i class="fa fa-sign-out" area-hidden="true"></i> Sign Out</a></li>
</ul>

<nav>
    <div class="nav-wrapper green">
        <a href="index.php" class="brand-logo"><img src="../images/logoaplikasi2.png" class="responsive-image center" style="width: 55px; height: 55px; margin-left: 10px; margin-top: 5px;"></a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <ul class="right hide-on-med-and-down">
            <li>
                <form method="post" action="join_class.php">
                    <div class="input-field">
                        <small class="left"><input type="text" name="code_class" placeholder="Join a Class"></small>
                        <small class="right" style="margin-top: 10px;"><button class="btn-floating">Join</button></small>
                    </div>
                </form>
            </li>
            <li><a href="create_class.php"><i class="fa fa-plus" aria-hidden="true"></i> Create a Class</a></li>
            <li>
                <a class="dropdown-button" href="#" data-activates="dropdown1">
                    <?php
                    include('session.php');
                        include('koneksi.php');
                        $s = 'select * from student ';
                        $q = mysqli_query($conn, $s);
                    
                        while($data=mysqli_fetch_array($q)){
                    ?>
                        <b><?php if($_SESSION['user'] == $data['username']){ echo $data['username']; }  }?></b><i class="fa fa-sort-desc" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>

            <li><a href='#'><i class='fa fa-arrow-right' aria-hidden='true'></i> Create Class</a></li>
            <li><a href="signout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sign Out</a></li>
        </ul>
    </div>
</nav>
<script>
    $(".button-collapse").sideNav();

</script>
