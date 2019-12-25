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
    <!-- Table with panel -->
    <div class="card card-cascade narrower">

        <!--Card image-->
        <div class="view view-cascade gradient-card-header blue-gradient narrower pt-5 py-5 mx-4 mb-5 d-flex justify-content-between align-items-center">

            <div>
                <!-- <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-th-large mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-columns mt-0"></i>
                </button> -->
            </div>

            <a href="" class="white-text mx-3">User Table</a>

            <div>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-pencil-alt mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="far fa-trash-alt mt-0"></i>
                </button>
                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
                    <i class="fas fa-info-circle mt-0"></i>
                </button>
            </div>

        </div>
        <!--/Card image-->

        <div class="px-4">

            <div class="table-wrapper table-responsive">
                <!--Table-->
                <table class="table table-hover mb-0">

                    <!--Table head-->
                    <thead>
                        <tr>
                            <th>
                                <input class="form-check-input" type="checkbox" id="checkbox">
                                <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
                            </th>
                            <th class="th-lg">
                                <a>First Name
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Last Name
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Gender
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Date of Birth
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Country of Birth
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Profile Picture
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Address
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Phone Number
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Email Address
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Username
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>
                            <th class="th-lg">
                                <a href="">Password
                                    <i class="fas fa-sort ml-1"></i>
                                </a>
                            </th>

                        </tr>
                    </thead>
                    <!--Table head-->

                    <!--Table body-->
                    <tbody>
                        <tr>
                            <th scope="row">
                                <input class="form-check-input" type="checkbox" id="checkbox1">
                                <label class="form-check-label" for="checkbox1" class="label-table"></label>
                            </th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input class="form-check-input" type="checkbox" id="checkbox2">
                                <label class="form-check-label" for="checkbox2" class="label-table"></label>
                            </th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input class="form-check-input" type="checkbox" id="checkbox3">
                                <label class="form-check-label" for="checkbox3" class="label-table"></label>
                            </th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input class="form-check-input" type="checkbox" id="checkbox4">
                                <label class="form-check-label" for="checkbox4" class="label-table"></label>
                            </th>
                            <td>Paul</td>
                            <td>Topolski</td>
                            <td>@P_Topolski</td>
                            <td>Paul</td>
                            <td>Topolski</td>
                            <td>@P_Topolski</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <input class="form-check-input" type="checkbox" id="checkbox5">
                                <label class="form-check-label" for="checkbox5" class="label-table"></label>
                            </th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                    <!--Table body-->
                </table>
                <!--Table-->
            </div>

        </div>

    </div>
    <!-- Table with panel -->






    </div>
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