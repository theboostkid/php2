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
</head>

<body>

    <!-- Start of project here-->
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark primary-color mb-5 pb-1">

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
    <!-- Main layout -->
    <main>
        <div class="container-fluid pt-4">

            <!-- Section: Team v.1 -->
            <section class="section team-section mt-4 pt-4">

                <!-- Grid row -->
                <div class="row text-center">

                    <!-- Grid column -->
                    <div class="col-md-8 mb-4">

                        <!-- Card -->
                        <div class="card card-cascade cascading-admin-card user-card">

                            <!-- Card Data -->
                            <div class="admin-up d-flex justify-content-start">
                                <i class="fas fa-users info-color py-4 mr-3 z-depth-2"></i>
                                <div class="data">
                                    <h5 class="font-weight-bold dark-grey-text">Edit Profile - <span class="text-muted">Complete your
                                            profile</span></h5>
                                </div>
                            </div>
                            <!-- Card Data -->

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
                                            <label for="form4" class="disabled">Company</label>
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
                                            <label for="form8" class="">Country</label>
                                        </div>

                                    </div>
                                    <!-- Grid column -->

                                    <!-- Grid column -->
                                    <div class="col-lg-4 col-md-6">

                                        <div class="md-form form-sm mb-0">
                                            <input type="text" id="form9" class="form-control form-control-sm">
                                            <label for="form9" class="">Postal Code</label>
                                        </div>

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                                <!-- Grid row -->
                                <div class="row">

                                    <!-- Grid column -->
                                    <div class="col-md-12">

                                        <h4 class="text-muted text-left my-4">About me</h4>

                                        <!-- Basic textarea -->
                                        <div class="md-form mb-0">
                                            <textarea type="text" id="form10" class="md-textarea form-control" rows="3"></textarea>
                                            <label for="form10">Basic textarea</label>
                                        </div>

                                    </div>
                                    <!-- Grid column -->

                                </div>
                                <!-- Grid row -->

                            </div>
                            <!-- Card content -->

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 mb-4">

                        <!-- Card -->
                        <div class="card profile-card">

                            <!-- Avatar -->
                            <div class="avatar z-depth-1-half mb-4">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle" alt="First sample avatar image">
                            </div>

                            <div class="card-body pt-0 mt-0">

                                <!-- Name -->
                                <h3 class="mb-3 font-weight-bold"><strong>Anna Deynah</strong></h3>
                                <h6 class="font-weight-bold cyan-text mb-4">Web Designer</h6>

                                <p class="mt-4 text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt
                                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip consequat.</p>

                                <a class="btn btn-info btn-rounded"> Follow</a>

                            </div>

                        </div>
                        <!-- Card -->

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: Team v.1 -->

        </div>
    </main>
    <!-- Main layout -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="#"> jamaica.com</a>
        </div>
        <!-- Copyright -->

    </footer>






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