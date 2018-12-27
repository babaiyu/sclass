<html>

<head>
    <title>SClass | Class for Everyone</title>
    <link rel="icon" href="images/logoaplikasi2.png">
    <link rel="stylesheet" href="css/materialize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" media="screen, projection">
    <script>
        function(window, $) {

            window.requestAnimFrame = (function() {
                return window.requestAnimationFrame ||
                    function(callback) {
                        window.setTimeout(callback, 60 / 60);
                    };
            })();

            var y = 0,
                f = 0.45;

            function move() {
                y -= f;
                $('#banner').css('background-position', 'center ' + y + 'px');
                requestAnimationFrame(move);
            }
            move();

        })(window, jQuery);

    </script>
    <style>
        button[type="submit"] {
            border: none;
            outline: none;
            border-radius: 20px;
            height: 40px;
            width: 125px;
            color: #fff;
            font-size: 16px;
            background: #27ae60;
            transition: .2s;
        }

        button[type="submit"]:hover {
            background: #2ecc71;
        }

        .teach {
            border: none;
            outline: none;
            border-radius: 20px;
            height: 40px;
            width: 125px;
            color: #fff;
            font-size: 16px;
            background: #2980b9;
            transition: .2s;
            margin-left: 10px;
        }

        .teach:hover {
            background: #3498db;
        }

        #banner {
            width: 100%;
            height: 100%;
            background: url(images/124949-amazing-chalkboard-wallpaper-2560x1440.jpg) 0 0 repeat;
            background-size: cover;
            background-attachment: fixed;
            position: relative;
        }

        #banner #overlay {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.25) 0 100% repeat-x;
        }

    </style>
</head>

<body>
    <div id="banner">
        <div style="background-color: rgba(0, 0, 0, 0.5); width: 100%; height: 660px;">
            <div class="container" style="padding-top: 175px;">
                <center><img src="images/logoaplikasi2.png" class="responsive-image" style="width: 75px; height: 75px;"></center>
                <h3 class="white-text center">Welcome to
                    <b>SClass</b>
                </h3>
                <h5 class="white-text text-lighten center"><i>A Class for Everyone.</i> | Let's Sign In Now</h5>
                <p class="center">
                    <a href="signin_user.php"><button type="submit">Sign In</button></a>
                </p>
            </div>
        </div>
    </div>
    <!--Content-->

    <div class="row" style="background: white;">
        <div class="container">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center green-text"><i class="fa fa-bolt" aria-hidden="true"></i></h2>
                    <h5 class="center">Get Connection with your Friends</h5>

                    <p class="light">Don't be late to get update of information about Class.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center green-text"><i class="fa fa-cube" aria-hidden="true"></i></h2>
                    <h5 class="center">Make Lessons be More Fun</h5>

                    <p class="light">Enjoy the Class and have Fun with your friends.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center green-text"><i class="fa fa-share-alt" aria-hidden="true"></i></h2>
                    <h5 class="center">Sharing a Lessons to Your Class</h5>

                    <p class="light">Give an Information & a Test from a Class. So Student will not be afair.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/Content-->
    <!--Footer-->
    <footer class="page-footer" style="background-color: #0f0f0f;">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">SClass</h5>
                    <p class="grey-text text-lightent-4">Class For Everyone</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Follow Us On</h5>
                    <ul>
                        <li><a href="#" class="grey-text text-lighten-4" target="_blank"><i class="fa fa-facebook-official"></i> Facebook</a> <br/></li>
                        <li><a href="#" class="grey-text text-lighten-4" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                &copy; 2018 SClass
            </div>
        </div>
    </footer>
    <!--/Footer-->

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>
        $('.button-collapse').sideNav({
                    menuWidth: 300, // Default is 300
                    edge: 'right', // Choose the horizontal origin
                    closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                    draggable: true, // Choose whether you can drag to open on touch screens,
                    onOpen: function(el) {}
                );

    </script>
</body>

</html>
