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
            background: url("https://images.unsplash.com/photo-1533253807400-53e0830db407?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80")no-repeat center center;
            background-size: cover;
        }

        .mask.rgba-gradient7 {
            background: -webkit-linear-gradient(98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
            background: -webkit-gradient(linear, 98deg, from(rgba(22, 91, 231, 0.5)), to(rgba(255, 32, 32, 0.5)));
            background: linear-gradient(to 98deg, rgba(22, 91, 231, 0.5), rgba(255, 32, 32, 0.5) 100%);
        }

        .card {
            background-color: rgba(255, 255, 255, 0.85);
        }


        p {
            font-size: 0.9rem;
            font-weight: 300;
        }

        h4 {
            font-size: 1.3rem;
        }

        h6 {
            line-height: 1.7;
        }

        .md-form label {
            font-size: 0.9rem;
            font-weight: 300;
        }

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (min-width: 851px) and (max-width: 1440px) {

            html,
            body,
            header,
            .view {
                height: 850px;
            }
        }

        @media (min-width: 800px) and (max-width: 850px) {

            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }

        @media (min-width: 451px) and (max-width: 740px) {

            html,
            body,
            header,
            .view {
                height: 1200px;
            }
        }

        @media (max-width: 450px) {

            html,
            body,
            header,
            .view {
                height: 1400px;
            }
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

                <!-- Dropdown
                <li class="nav-item dropdown">
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
                    <a class="nav-link" href="parishes.php">Parishes</a>
                </li>
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
        <div class="mask rgba-gradient7">
            <div class="container h-100 d-flex justify-content-center align-items-center">

                <!--Grid row-->
                <div class="row  pt-5 mt-3">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">

                                <h2 class="feature-title text-center mb-5 mt-4 font-weight-bold">
                                    <strong>REGISTER</strong>
                                </h2>
                                <hr>

                                <!--Grid row-->
                                <div class="row mt-5">

                                    <!-- Card content -->
                                    <div class="card-body card-body-cascade">

                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-4">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form12" class="form-control form-control-sm">
                                                    <label for="form12" class="">Username</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form3" class="form-control form-control-sm">
                                                    <label for="form3" class="">Email address</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form4" class="form-control form-control-sm" disabled>
                                                    <label for="form4" class="">Gender</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->

                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-md-6">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form5" class="form-control form-control-sm">
                                                    <label for="form5" class="">First name</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-md-6">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form5" class="form-control form-control-sm">
                                                    <label for="form5" class="">Last name</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->

                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-md-12">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form6" class="form-control form-control-sm">
                                                    <label for="form6" class="">Address</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->

                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-12">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form7" class="form-control form-control-sm">
                                                    <label for="form7" class="">City</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form8" class="form-control form-control-sm">
                                                    <label for="form8" class="">Country </label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                            <!-- Grid column -->
                                            <div class="col-lg-4 col-md-6">

                                                <div class="md-form form-sm mb-0">
                                                    <input type="text" id="form9" class="form-control form-control-sm">
                                                    <label for="form9" class=""> Date of Birth</label>
                                                </div>

                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->

                                        <!-- Grid row -->
                                        <div class="row">

                                            <!-- Grid column -->
                                            <div class="col-md-12">
                                                <div class=col-md-6>

                                                    <div class="md-form form-sm mb-0">
                                                        <input type="number" id="form12" class="form-control form-control-sm">
                                                        <label for="form12" class="">Phone Number</label>
                                                    </div>
                                                </div>
                                                <div class=col-md-6>

                                                    <div class="md-form form-sm mb-0">
                                                        <input type="text" id="form12" class="form-control form-control-sm">
                                                        <label for="form12" class="">Password</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Grid column -->

                                        </div>
                                        <!-- Grid row -->

                                    </div>
                                    <!-- Card content -->

                                </div>
                                <!-- Card -->


                                <div class="text-center">
                                    <button class="btn btn-rounded mt-3 mb-3">Sign up</button>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </div>
                </div>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

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