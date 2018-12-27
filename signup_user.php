<html>

<head>
    <title>SClass | Sign Up User</title>
    <link rel="icon" href="images/logoaplikasi2.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/materialize.min.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <style>
        .loginbox {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            height: 500px;
            padding: 80px 40px;
            box-sizing: border-box;
            background: rgba(0, 0, 0, 0.05);
            color: black;
        }

    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="loginbox">
                <form class="col s12" method="post" action="sign/p_add_user.php">
                    <div class="row">
                        <div class="input-field">
                            <input placeholder="Username" id="name" type="text" class="active validate" required name="username">
                            <label for="name">Username</label>
                        </div>
                        <br/>
                        <div class="input-field">
                            <label for="password">Password</label>
                            <input id="password" type="password" placeholder="Password" class="validate" required name="password">
                        </div>
                        <div class="input-field">
                            <input placeholder="example@mail.com" id="email" name="email" type="email" class="validate" required>
                            <label for="email">Enter your email</label>
                        </div>
                        <div class="input-field">
                            <button class="btn wave-effect green">Sign Up</button>
                            <a class="btn-flat wave-effect gray" href="signin_user.php">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
