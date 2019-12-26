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
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="../css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="../css/style.css">
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
    <!-- Main layout -->
    <main>
        <div class="container-fluid">

            <!-- Section: Customers -->
            <section class="section team-section">

                <!-- First row -->
                <div class="row">

                    <!-- First column -->
                    <div class="col-md-8">

                        <div class="row mb-1">
                            <div class="col-md-9">
                                <h4 class="h4-responsive mt-1">Your Clients</h4>
                            </div>
                            <div class="col-md-3">
                                <div class="md-form">
                                    <input placeholder="Search..." type="text" id="form5" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 mb-1">
                                <!-- Tabs -->
                                <div class="classic-tabs">
                                    <!-- Nav tabs -->
                                    <div class="tabs-wrapper">
                                        <ul class="nav tabs-primary primary-color" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link waves-light active" data-toggle="tab" href="#panel83" role="tab">Personal
                                                    Clients</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link waves-light" data-toggle="tab" href="#panel84" role="tab">Corporate Clients</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Tab panels -->
                                    <div class="tab-content card">
                                        <!-- Panel 1 -->
                                        <div class="tab-pane fade show active" id="panel83" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Username</th>
                                                            <th>Gender</th>
                                                            <th>Date of Birth</th>
                                                            <th>Country</th>
                                                            <th>Profile Photo</th>
                                                            <th>Address</th>
                                                            <th>Phone Number</th>
                                                            <th>Email Address</th>
                                                            <th>Password</th>
                                                            <th>Actions</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Timothy</td>
                                                            <td>Russell</td>
                                                            <td>@tim</td>
                                                            <td>Male</td>
                                                            <td>12/04/1997</td>
                                                            <td>Jamaica</td>
                                                            <td>pic.jpg</td>
                                                            <td>Mandeville Jamaica</td>
                                                            <td>18768410293</td>
                                                            <td>russelltimothy2@gmail.com</td>
                                                            <td>123</td>
                                                            <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fas fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.Panel 1 -->
                                        <!-- Panel 2 -->
                                        <div class="tab-pane fade" id="panel84" role="tabpanel">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Company Name</th>
                                                            <th>Username</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>PiedPiper</td>
                                                            <td>@piedpiper</td>
                                                            <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fas fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Github, Inc</td>
                                                            <td>@github</td>
                                                            <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fas fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Twitter, Inc</td>
                                                            <td>@twitter</td>
                                                            <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fas fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Alphabet, Inc</td>
                                                            <td>@alphabet</td>
                                                            <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fas fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Adobe Corporation</td>
                                                            <td>@adobe</td>
                                                            <td>
                                                                <a class="blue-text" data-toggle="tooltip" data-placement="top" title="See results"><i class="fas fa-user"></i></a>
                                                                <a class="teal-text" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                                <a class="red-text" data-toggle="tooltip" data-placement="top" title="Remove"><i class="fas fa-times"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.Panel 2 -->
                                    </div>
                                    <!-- /.Tabs -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- First column -->



                </div>
                <!-- First row -->

            </section>
            <!-- Section: Customers -->

        </div>
    </main>
    <!-- Main layout -->



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