<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   
   <!-- site metas -->
   <title>Complaint Management System</title>
  
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- fonts -->
   <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Poppins:400,700&display=swap" rel="stylesheet">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesoeet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

     
      <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #333; /* Assuming the navbar has a dark background */
        }

        .logo h1 {
            font-size: 40px;
            color: white;
            margin: 0;
            white-space: nowrap;
        }

        /* Media query for smaller screens */
        @media (max-width: 768px) {
            .logo h1 {
                font-size: 30px; /* Adjust font size for smaller screens */
            }
        }

        @media (max-width: 576px) {
            .logo h1 {
                font-size: 20px; /* Adjust font size for even smaller screens */
            }
        }

        /* Navbar styles */
        .navbar {
            background-color: #444;
            transition: background-color 0.5s ease-in-out;
        }

        .navbar-nav .nav-link {
            color: white;
            font-size: 18px;
            padding: 10px 15px;
            transition: color 0.3s, background-color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            background-color: #555;
            color: #fff;
            border-radius: 5px;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 0.5%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-collapse {
            justify-content: flex-end;
        }

        /* Add some animation */
        .nav-item {
            position: relative;
            overflow: hidden;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background-color: white;
            transition: width 0.3s ease, left 0.3s ease;
        }

        .nav-item:hover::after {
            width: 100%;
            left: 0;
        }
    </style>

    <!-- Bootstrap CSS (Assuming you're using Bootstrap 4) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



</head>

<body>
   <!--header section start -->
   <div class="header_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2 col-6">
                    <a class="logo" href="index.php"><h1>CMX</h1></a>
                </div>
                <div class="col-sm-8 col-6">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="admin/index.php">Admin</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user/index.php">User Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="user/registration.php">User Registration</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        
        <!-- banner section start -->
        <div class="banner_section layout_padding">
            <div class="container">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <h1 class="banner_taital">Lodge Your Complaint </h1>
                            <div class="read_bt"></div>
                            <div class="number_main">
                                <div class="number_text">01</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <h1 class="banner_taital">Feel Free To Complaint</h1>
                            <div class="read_bt"></div>
                            <div class="number_main">
                                <div class="number_text">02</div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </div>
    <!-- header section end -->
    
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">Complaint Management System.</p>
        </div>
    </div>
    <!-- copyright section end -->
   <!-- Javascript files-->
   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <!-- javascript -->
   <script src="js/owl.carousel.js"></script>
   <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>