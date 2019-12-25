<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jamaica</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        .intro-2 {
            background: url("https://mdbootstrap.com/img/Photos/Others/images/91.jpg")no-repeat center center;
            background-size: cover;
        }

        .card {
            background-color: rgba(229, 228, 255, 0.2);
        }

        .md-form label {
            color: #ffffff;
        }

        h6 {
            line-height: 1.7;
        }

        html,
        body,
        header,
        .view {
            height: 100vh;
        }

        @media (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 700px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }

        .card {
            margin-top: 30px;
            /*margin-bottom: -45px;*/
        }

        .md-form input[type=text]:focus:not([readonly]),
        .md-form input[type=password]:focus:not([readonly]) {
            border-bottom: 1px solid #fb5364;
            box-shadow: 0 1px 0 0 #fb5364;
        }

        .md-form input[type=text]:focus:not([readonly])+label,
        .md-form input[type=password]:focus:not([readonly])+label {
            color: #fb5364;
        }

        .md-form .form-control {
            color: #fff;
        }
    </style>

</head>

<body>

    <!-- Start of project here-->
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark primary-color">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php">Jamaica</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>

                <!-- Dropdown -->
                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="parishes.php">Parishes</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Kingston</a>
                        <a class="dropdown-item" href="#">St.Andrew</a>
                        <a class="dropdown-item" href="#">St.Thomas</a>
                        <a class="dropdown-item" href="#">Portland</a>
                        <a class="dropdown-item" href="#">St.Mary</a>
                        <a class="dropdown-item" href="#">St.Ann</a>
                        <a class="dropdown-item" href="#">Trelawny</a>
                        <a class="dropdown-item" href="#">St.James</a>
                        <a class="dropdown-item" href="#">Hanover</a>
                        <a class="dropdown-item" href="#">Westmoreland</a>
                        <a class="dropdown-item" href="#">St.Elizabeth</a>
                        <a class="dropdown-item" href="#">Manchester</a>
                        <a class="dropdown-item" href="#">Clarendon</a>
                        <a class="dropdown-item" href="#">St.Catherne</a>
                        <a class="dropdown-item" href="#">St.Thomas</a>
                    </div>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>

            </ul>
            <!-- Links -->
            <ul class="navbar-nav ml-auto nav-flex-icons">
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link waves-effect waves-light">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                        <a class="dropdown-item" href="login.php">Login</a>
                        <a class="dropdown-item" href="registration.php">Register</a>
                        <a class="dropdown-item" href="#">Logout</a>
                    </div>
                </li>
            </ul>


        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

    <!--Intro Section-->
    <section class="view intro-2">
        <div class="mask rgba-indigo-light h-100 d-flex justify-content-center align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-lg-5">

                        <!--Form with header-->
                        <div class="card wow fadeIn" data-wow-delay="0.3s">
                            <div class="card-body">

                                <!--Header-->
                                <div class="form-header pink-gradient">
                                    <h3>
                                        <i class="fas fa-user mt-2 mb-2"></i> Log in:</h3>
                                </div>

                                <!--Body-->
                                <div class="md-form mb-0">
                                    <i class="fas fa-user prefix white-text"></i>
                                    <input type="text" id="orangeForm-name" class="form-control">
                                    <label for="orangeForm-name">Your name</label>
                                </div>
                                <div class="md-form mb-0">
                                    <i class="fas fa-envelope prefix white-text"></i>
                                    <input type="text" id="orangeForm-email" class="form-control">
                                    <label for="orangeForm-email">Your email</label>
                                </div>

                                <div class="md-form mb-0">
                                    <i class="fas fa-lock prefix white-text"></i>
                                    <input type="password" id="orangeForm-pass" class="form-control">
                                    <label for="orangeForm-pass">Your password</label>
                                </div>

                                <div class="text-center">
                                    <button class="btn pink-gradient btn-lg">Sign up</button>
                                    <hr>
                                    <div class="inline-ul text-center d-flex justify-content-center">
                                        <a class="p-2 m-2 fa-lg tw-ic">
                                            <i class="fab fa-twitter white-text"></i>
                                        </a>
                                        <a class="p-2 m-2 fa-lg li-ic">
                                            <i class="fab fa-linkedin-in white-text"> </i>
                                        </a>
                                        <a class="p-2 m-2 fa-lg ins-ic">
                                            <i class="fab fa-instagram white-text"> </i>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--/Form with header-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> jamaica.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->


    </div>







    <!-- End of project here-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>

</body>

</html>