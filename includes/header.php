<?php

include('conn.php');

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from excellencetheme.com/templates/azar/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Jan 2022 12:56:40 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Basic Page -->
    <meta charset="UTF-8">
    <title>Home Service</title>

    <!-- Mobile Specific -->
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="assets/images/favicon.png" rel="icon" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Animate Styles -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Fontawsome Styles -->
    <link rel="stylesheet" href="assets/css/fontawsome.min.css">
    <!-- Flaticon Styles -->
    <link rel="stylesheet" href="assets/fonts/font/flaticon.css">
    <!-- Meanmenu Styles -->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <!-- Owl Carousel Styles -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <!-- Nice Number Styles -->
    <link rel="stylesheet" href="assets/css/jquery.nice-number.css">
    <!-- Nice Select Styles -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Barfiller Styles -->
    <link rel="stylesheet" href="assets/css/barfiller.css">
    <!-- Magnific-popup Styles -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Odometer-theme-default Styles -->
    <link rel="stylesheet" href="assets/css/odometer-theme-default.css">
    <!-- Main Styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- sidebarmenu -->
    <link rel="stylesheet" href="assets/css/ourservice.css">
    <!-- team -->
    <!-- service -->
    <link rel="stylesheet" href="assets/css/newtypeservice.css">
    <link rel="stylesheet"  href="assets/css/teams.css">
    <!-- font awesom -->
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/sidebartype.css"> -->
    <!-- Togglemenu Style -->
    <link rel="stylesheet"  href="assets/css/menuprofile.css">

    <script>/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
    function openNav() {
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("main").style.marginRight = "250px";
    }

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
        document.getElementById("mySidebar").style.width = "0";
        document.getElementById("main").style.marginRight = "0";
    }</script>

    <!-- <script type="text/javascript">
        function togglemenu(){
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
        <script src="assets/js/html5shiv.js"></script>
        <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
       <!-- Start Top bar Area -->
       <div class="topbar">
        <div class="container">
            <div class="topbar-content">
                <div class="row align-items-center">
                    <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="top-contact-area">
                            <ul>
                                <li>
                                    <span><a href="#"><i class="fa fa-phone"> 7498068987</i></a></span>
                                </li>
                                <li>
                                    <span><a href="#"><i class="fab fa-whatsapp"></i></a></span>
                                </li>
                                <li><span><a href="#"><i class="fa fa-envelope"></i></a></span>
                                </li>
                                <li><span><a href="#"><i class=""></i></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
                    <div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="topbar-right-area">
                        <div class="dropdown account-details">
                                <i class="fas fa-user"></i>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">JOIN PROVIDER</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="partner/index.php">PROVIDER PROFILE</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"  href="partner/login.php">LOGIN</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="providerreg.php">REGISTRATION</a>
                                    </li>
                                    <!-- <li>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </li> -->
                                </ul>
                            </div>
                             <!-- if user login -->

                    <?php 
                    if(isset($_SESSION['uid']))
                    {
                        ?>
                        <div>
                        <strong>
                            <h6> <?php echo $_SESSION['name']; ?> </h6>
                        </strong>
                        </div>
                        <h6>-</h6>
                       
                        <h6><a href="logout.php" align="" class=""> LOGOUT
                    </a></h6>
                    
                    
                        <?php 
                    }
                    else{
                        ?>
                        


                    <!-- user login end -->
                           
                            <div class="dropdown account-details">
                                <i class="fas fa-user"></i>
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">USER </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <a class="dropdown-item" href="profiles.php">MY PROFILE</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="login.php">LOGIN</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="userreg.php">REGISTRATION</a>
                                    </li>
                                    <!-- <li>
                                        <a class="dropdown-item" href="logout.php">Logout</a>
                                    </li> -->
                                </ul>
                            </div>
                            <?php 
                    }
                    
                    ?>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Top bar Area -->
    <!-- Start Header Area -->
    <div class="header-area">
        <div class="navbar-area">

            <div class="main-responsive-nav">
                <div class="container">
                    <div class="mobile-nav">
                        <a href="index.php" class="logo1"><img src="assets/images/citygo.png" alt="logo1"></a>
                        <ul class="menu-sidebar menu-small-device">
                            <li><button class="popup-button"><i class="fas fa-search"></i></button></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light bg-light">
                            <!-- <div id="sidebar" onclick="togglemenu()">
                                <div class="toggle-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                    <ul>
                                        <li>profile</li>
                                        <li>my booking</li>
                                        <li>My Cart</li>
                                        <li>My invoice</li>
                                        <li>Edit Profile</li>
                                        <li>Log in</li>
                                        <li>Register</li>
                                    </ul>
                                </div> -->
                                <!-- <input type="checkbox" id="check">
                                <label for="check">
                                    <i class="fas fa-bars"><>
                                </label> -->
                        <!-- <div class="sidebar">
                            <header> My services </header>
                                <ul>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Profile</a></li>
                                </ul>
                        </div> -->
                    
                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/citygo.png" alt="logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu justify-content-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
                                <li class="nav-item"><a href="about.php" class="nav-link">ABOUT</a></li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">SERVICES <i class="fas fa-sort-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <?php 
                                                $bb1 = 'SELECT * FROM services';
                                                $res1 = mysqli_query($conn, $bb1);

                                                if(mysqli_num_rows($res1)>0)
                                                {
                                                    while($ro1 = mysqli_fetch_assoc($res1))
                                                    {
                                            ?>
                                            
                                        
                                        <li class="nav-item"><a href="service-details.php?sid=<?php echo $ro1['sid']?>"><?php echo $ro1['s_name']; ?></a></li>
                                        <?php 
                                                } }                                        
                                        ?>
                                    </ul>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Pages <i class="fas fa-sort-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="team.html" class="nav-link">Our Team</a></li>
                                        <li class="nav-item"><a href="pricing.html" class="nav-link">Pricing Plan</a></li>
                                        <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                                        <li class="nav-item"><a href="error.html" class="nav-link">404 Error</a></li>
                                        <li class="nav-item"><a href="authentication.html" class="nav-link">Login/Register</a></li>
                                        <li class="nav-item"><a href="testimonial.html" class="nav-link">Testimonials</a></li>
                                        <li class="nav-item"><a href="privacy.html" class="nav-link">Privacy Policy</a></li>
                                        <li class="nav-item"><a href="terms.html" class="nav-link">Terms & Conditions</a></li>
                                    </ul>
                                </li> -->

                                <!-- <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Projects <i class="fas fa-sort-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="projects.html" class="nav-link">Our Projects</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Blog <i class="fas fa-sort-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="blog.html" class="nav-link">Blog Grid</a></li>
                                       
                                    </ul>
                                </li> -->
                                <li class="nav-item"><a href="booking.php" class="nav-link">BOOKING</a></li>
                                <li class="nav-item"><a href="contact.php" class="nav-link">CONTACT US</a></li>
                            </ul>
                            <div id="mySidebar" class="sidebar">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="profiles.php">PROFILE</a>
                                <a href="invoice.php">MY BOOKING</a>
                                <a href="view_cart.php">MY CART</a>
                                <a href="invoices1.php">MY INVOICE</a>
                                <a href="login.php">LOGIN</a>
                                <a href="userreg.php">REGISTER</a>

                            </div>
                            <div id="main">
                                <button class="openbtn" onclick="openNav()">&#9776;</button>
                            </div>
                            <!-- <div id="mySidebar" class="sidebar">
                                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                                <a href="profile.php">Profile</a>
                                <a href="invoice.php">My Booking</a>
                                <a href="view_cart.php">My Cart</a>
                                <a href="#">My Invoice</a>
                                <a href="login.php">Log in</a>
                                <a href="userreg.php">Register</a>
                            </div>
                            

                            <div id="main">
                                <button class="openbtn" onclick="openNav()">&#9776; </button>
                            </div> -->
                            <!-- togglemenu -->
                            <!-- <div id="sidebar" onclick="togglemenu()">
                            <div class="toggle-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                                <ul>
                                    <li>profile</li>
                                    <li>my booking</li>
                                    <li>My Cart</li>
                                    <li>My invoice</li>
                                    <li>Edit Profile</li>
                                    <li>Log in</li>
                                    <li>Register</li>
                                </ul>
                            </div> -->
                                            
                            <!-- <div class="menu-sidebar">
                                <form>
                                    <div class="input-group m-search-box">
                                        <input type="text" class="form-control" placeholder="Search" required="">
                                        <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div> -->
                            <!-- <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget">
                    <h4 class="title"></h4>
                    
                        <div class="profile-thumb">
                        <img src="gallery/" alt="Profile">
                    </div>
                    <!-- <div class="profile-thumb">
                        <img src="assets\img\800x800.png" alt="Profile">
                    </div> -->
                    
                    <!-- <ul>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="invoice.php">My Booking</a></li>
                        <li><a href="view_cart.php">My Cart</a></li>
                        <li><a href="invoices1.php">My Invoices</a></li>
                        <li><a href="profile.php">Edit Profile</a></li>
                        
                        
                        <li> <a  href="logout.php">Logout</a></li>
                        
                         
                            <li> <a class="popup-with-form" href="#login-form">Login</a></li>
                        <li> <a class="popup-with-form" href="#register-form">Register</a></li>
                        
                    </ul>
                </div> --> 
                
                
            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <!-- End Header Area -->