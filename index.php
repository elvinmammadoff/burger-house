<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Burger House - Fast Food & Restaurant Landing page</title>

    <!-- Stylesheets -->
    <link href="assets/css/plugins/bootstrap.min.css" type="text/css" rel="stylesheet" media="all" />
    <link href="assets/css/plugins/aos.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/plugins/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/plugins/bootstrap-datetimepicker.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/plugins/touch-sideswipe.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/style.css" type="text/css" rel="stylesheet" />

    <!-- Icon Fonts -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/all.min.css">

    <!-- Favicon -->
    <!-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="256x256"  href="assets/img/favicon/android-chrome-256x256.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-chrome-192x192.png">    
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png" />
    <link rel="icon" type="image/png" href="assets/img/favicon/favicon.ico" />
    <link rel="manifest" href="assets/img/site.webmanifest" />
    <link rel="mask-icon" href="assets/img/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#990100" />
    <meta name="theme-color" content="#ffffff" />     -->

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  
    <!-- Loading Overlay Start -->  
    <div class="loading-overlay">
        <div class="spinner">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- Loading Overlay End -->    

              

    <!-- Header Start -->
    <header id="header">
        <nav class="navbar fixed-top">
            <div id="navbar_content">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" alt="logo" /></a>
                    <a href="#cd-nav" class="cd-nav-trigger right_menu_icon">
                        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <div class="navbar-right">
                        <div class="call-delivery">
                            <img src="" alt="" class="call-delivery-icon" />
                            <span class="call-delivery-number">Call for Delivery <a href=""></a></span>
                        </div>
                        <ul class="nav navbar-nav">
                            <li><a class="page-scroll" href="#header">Home</a></li>
                            <li><a class="page-scroll" href="#reservation">Menu</a></li>
                            <li><a class="page-scroll" href="#events">Events</a></li>
                            <li><a class="page-scroll" href="#footer">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->

    <!-- Banner Start -->
    <div class="banner">
        <div class="banner-inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="banner-subtitle">
                        <h3>It is a good time for the great taste of burgers</h3>
                    </div>
                    <h1 class="banner-title">Special <span>Burger</span></h1>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <img src="" alt="" class="banner-image" />
                    <div class="banner-badge">
                        <div class="banner-price">20% <span>Off</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Reservation Start -->
    <div class="fixed_layer section" id="reservation">
        <div class="fixed_layer_padd container">
            <div class="row">
                <div class="col-md-offset-6 col-md-6" data-aos="fade-down">
                    <div class="reserv_box">
                        <h1 class="section-title">online reservation</h1>
                        <p class="short">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <form id="reserv_form" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group form_pos">
                                        <input type="text" name="name" required="" placeholder="Your name" class="form-control" />
                                        <span class="form_icon"></span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group form_pos">
                                        <input type="email" name="email" required="" placeholder="Your email" class="form-control" />
                                        <span class="form_icon"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group form_pos">
                                        <input type="text" name="phone" required="" placeholder="Phone" class="form-control" />
                                        <span class="form_icon"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form_pos">
                                        <input type="text" name="date" required="" placeholder="Date" class="form-control" id="reserv_date" />
                                        <span class="form_icon"></span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group form_pos">
                                        <input type="text" name="time" required="" placeholder="Time" class="form-control" id="reserv_time" />
                                        <span class="form_icon"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea rows="3" name="message" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <input type="submit" name="send" value="book now" class="btn btn-block" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Reservation End -->

    <!-- Scroll Up Start -->
    <div class="scroll-up">
        <div class="scroll-up__icon"><i class="fa fa-arrow-up"></i></div>
    </div>
    <!-- Scroll Up End -->        

    <!-- Footer Start -->
    <footer id="footer">
    
    </footer>
    <!-- Footer End -->

        <!-- Mobile Menu Start -->
    <nav class="cd-nav-container right_menu" id="cd-nav">
        <div class="header__open_menu">
            <a href="/" class="rmenu_logo" title="">
                <img src="assets/img/logo.png" alt="logo" />
            </a>
        </div>
        <ul class="rmenu_list">
            <li><a class="page-scroll" href="#header">Home</a></li>
            <li><a class="page-scroll" href="#reservation">Reservation</a></li>
            <li><a class="page-scroll" href="#footer">Contact</a></li>
        </ul>
    </nav>
    <div class="cd-overlay"></div>
    <!-- Mobile Menu End --> 
    

    <!-- JavaScripts -->
    <script src="assets/js/plugins/jquery-2.1.1.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/plugins/jquery.mousewheel.min.js"></script>
    <script src="assets/js/plugins/jquery.easing.min.js"></script>
    <script src="assets/js/plugins/scrolling-nav.js"></script>
    <script src="assets/js/plugins/aos.js"></script>
    <script src="assets/js/plugins/jquery.touchSwipe.min.js"></script>
    <script src="assets/js/plugins/moment.js"></script>
    <script src="assets/js/plugins/bootstrap-datepicker.js"></script>
    <script src="assets/js/plugins/bootstrap-datetimepicker.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>  