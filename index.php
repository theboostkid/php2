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
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="./css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="./css/style.css">
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
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Parishes</a>
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

    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://adventure.com/wp-content/uploads/2017/08/Thailand-Ang-Thong-Marine-Park-Photo-credit-Shutterstock-Don-Mammoser-1920x1080.jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Welcome To Jamaica</h3>
                    <p>Arial View of an Island</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://cdn.sandals.com/sandals/v12/images/resorts/src/private-island/header-background.jpg" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Sweet Escape In the Caribbean</h3>
                    <p>Picture of Jamaican beach</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://assets.simpleviewinc.com/simpleview/image/fetch/c_fill,h_1080,q_75,w_1920/https://assets.simpleviewinc.com/simpleview/image/upload/crm/jamaica/Jamaica1080-663701af5056a36_6637039a-5056-a36a-07a3eb5204237f94.jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Beautiful Islands and Sea</h3>
                    <p>Picture of Monkey Island</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->


    <main>

        <div class="container">

            <!-- Section: Features v.4 -->
            <section id="features" class="section feature-box text-center my-5">

                <!-- Section heading -->
                <h2 class="title font-weight-bold my-5 wow fadeIn" data-wow-delay="0.2s">
                    <strong>Awesome Places</strong>
                </h2>

                <!-- Section sescription -->
                <p class="grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s">
                    Jamaica is an excellent destination for tourists and locals alike to relax and have a good time.</p>

                <!--Grid row-->
                <div class="row features wow fadeIn" data-wow-delay="0.2s">

                    <!--Grid column-->
                    <div class="col-lg-4 text-center">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-tree fa-4x green-text"></i>
                            </div>
                            <br>
                            <h5 class="dark-grey-text font-weight-bold mt-2"></h5>
                            <div class="mt-1">
                                <p class="mx-3 grey-text">In Jamaica we are known as the land of wood and water because we have lush vegetation.</p>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 text-center">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-water fa-4x blue-text"></i>
                            </div>
                            <br>
                            <h5 class="dark-grey-text font-weight-bold mt-2"></h5>
                            <div class="mt-1">
                                <p class="mx-3 grey-text">Jamaica has some of the best beaches in the world.</p>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 text-center mb-4">
                        <div class="icon-area">
                            <div class="circle-icon">
                                <i class="fas fa-users fa-4x green-text"></i>
                            </div>
                            <br>
                            <h5 class="dark-grey-text font-weight-bold mt-2"></h5>
                            <div class="mt-1">
                                <p class="mx-3 grey-text">Jamaican people are some of the kindest and most jovial people you will meet. Our rich culture is a real sight to behold.</p>
                            </div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--/First row-->

            </section>
            <!-- Section: Features v.4 -->

            <hr>

            <!-- Section: About -->
            <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                <!-- Grid row -->
                <div class="row pt-2 mt-lg-5">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">
                        <!-- Image -->
                        <img src="https://cdn.sandals.com/sandals/v12/images/general/destinations/jamaica/jamaica-name-bg.jpg" class="img-fluid rounded" alt="My photo">
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-6 ml-auto col-md-12 wow fadeIn" data-wow-delay="0.4s">

                        <!-- Section heading -->
                        <h2 class="mb-5 title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                            <strong>Experience their Beaches</strong>
                        </h2>

                        <!-- Description -->
                        <p align="justify" class="grey-text">Jamaica is a big island with hundreds of miles of coastline, so you'd expect to find a number of great beaches here. Some of the best are located in big resort communities like Montego Bay and Negril, but you can also find great sand, surf, and seaside bars in more overlooked destinations like Port Antonio and Treasure Beach.</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: About -->

            <hr>

            <!-- Section: About -->
            <section id="about" class="section about mt-5 mb-5 py-3 wow fadeIn" data-wow-delay="0.2s">

                <!-- Grid row -->
                <div class="row pt-2 mt-lg-5">

                    <!-- Grid column -->
                    <div class="col-lg-6 col-md-12 mt-lg-5 mr-auto wow fadeIn" data-wow-delay="0.4s">

                        <!-- Section heading -->
                        <h2 class="mb-5 title font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                            <strong>Enjoy the best rivers</strong>
                        </h2>

                        <!-- Description -->
                        <p align="justify" class="grey-text">
                            Jamaica is the third largest island of the Greater Antilles and it is surrounded by the Caribbean Sea. Lying about 90 miles south of Cuba, it is located at an estimated latitude 180 N and longitude 770 W. Its climatic conditions are usually described as tropical, hot, humid, and temperate interior; these are sometimes affected by weather systems such as troughs, cold fronts and upper and low-level low-pressure centres. Other weather systems common to the island include: Tropical Waves, Tropical Depressions, Tropical Storms, and Hurricanes which generally develop between June and November, a period that is officially referred to as the hurricane season. Weather and climatic conditions are monitored by the Meteorological Office of Jamaica.
                        </p>
                        <p align="justify" class="grey-text">
                            There are a number of rivers in Jamaica, most of which emanate in the central mountainous region of the island. They usually flow at a relatively high speed and several of them contain rapids (falls). Rivers that flow south are usually of more length than those which flow north. Rivers that flow south include: Plantain Garden - flows from the Blue Mountains; Yallahs River - flows from Silver Hill Peak; Hope River - emerges close to New Castle; Rio Pedro - flows from Above Rocks; Rio Minho - emerges near Spalding; Milk River - flows from Porus. Among the rivers which flow north are: Rio Grande - rises in the Blue Mountain; Wag Water - rises in the Blue Mountain; White River - emerges near Guys Hill, St. Mary; Martha Brae - rises near Windsor, Trelawny; Montego River - emerges in central St. James; Great River - flows from St. Elizabeth.
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-lg-5 col-md-12 mb-3 wow fadeIn" data-wow-delay="0.4s">
                        <!-- Image -->
                        <img src="https://images.unsplash.com/photo-1557129604-40e824bb556f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80" class="img-fluid rounded" alt="My photo">
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </section>
            <!-- Section: About -->


        </div>



        </section>
        <!--/Section: Services-->

        </div>
        </div>
        <!--Second container-->

        <div class="container">

            <!-- Section: Team v.1 -->
            <section class="section team-section text-center my-5" id="team">

                <!-- Section heading -->
                <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s">
                    <strong>Staff Members</strong>
                </h3>
                <!-- Section description -->
                <p class="grey-text w-responsive mx-auto mb-5">We have a qualified and smart team that is ready to help you learn more about Jamaica.
                </p>

                <div class="row mt-5 pt-5">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-5">

                        <!--Card-->
                        <div class="card testimonial-card">

                            <!--Background color-->
                            <div class="card-up pink-gradient"></div>

                            <!--Avatar-->
                            <div class="avatar mx-auto white">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(9).jpg" class="rounded-circle img-responsive">
                            </div>

                            <div class="card-body">
                                <!--Name-->
                                <h4 class="mt-1">
                                    <strong>Eli James</strong>
                                </h4>
                                <hr>
                                <!--Quotation-->
                                <p class="dark-grey-text">He is an expert in business and management.</p>
                            </div>

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-5">

                        <!--Card-->
                        <div class="card testimonial-card">

                            <!--Background color-->
                            <div class="card-up pink-gradient">
                            </div>

                            <!--Avatar-->
                            <div class="avatar mx-auto white">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(20).jpg" class="rounded-circle img-responsive">
                            </div>

                            <div class="card-body">
                                <!--Name-->
                                <h4 class="mt-1">
                                    <strong>Daneel Russell</strong>
                                </h4>
                                <hr>
                                <!--Quotation-->
                                <p class="dark-grey-text">She is an expert on marketing and sales.</p>
                            </div>

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-5">

                        <!--Card-->
                        <div class="card testimonial-card">

                            <!--Background color-->
                            <div class="card-up  pink-gradient"></div>

                            <!--Avatar-->
                            <div class="avatar mx-auto white">
                                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle img-responsive">
                            </div>

                            <div class="card-body">
                                <!--Name-->
                                <h4 class="mt-1">
                                    <strong>Shirley Blue</strong>
                                </h4>
                                <hr>
                                <!--Quotation-->
                                <p class="dark-grey-text">Shirley is an expert on tourism. </p>
                            </div>

                        </div>
                        <!--Card-->

                    </div>
                    <!--Grid column-->

                </div>

            </section>
            <!-- Section: Team v.1 -->

        </div>


        </div>

    </main>
    <!-- Main content -->

    <!--Footer-->
    <footer class="page-footer text-center text-md-left unique-color-dark pt-0">

        <div style="background-color: #f95169;">
            <div class="container">

                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-5">
                    <h6 class="spacing font-weight-bold">
                        <strong>Jamaica.com</strong>
                    </h6>
                    <hr class="pink accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>We are a website that advertises Jamaica.</p>
                </div>
                <!--/.First column-->



                <!--/.Third column-->


            </div>
            <!--/.Footer Links-->

            <!-- Copyright-->
            <div class="footer-copyright text-center py-3">
                <div class="container-fluid">
                    © 2019 Copyright: <a href="" target="_blank"> jamaica.com </a>
                </div>
            </div>
            <!--/.Copyright -->

    </footer>
    <!--/.Footer-->

    <!-- JQuery -->
    <script type="text/javascript" src="./js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="./js/popper.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="./js/mdb.min.js"></script>
    <script>
        //Animation init
        new WOW().init();

        // Material Select Initialization
        $(document).ready(function() {
            $('.mdb-select').material_select();
        });
    </script>

</body>

</html>