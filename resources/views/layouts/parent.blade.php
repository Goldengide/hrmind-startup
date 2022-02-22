
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8">
        <title>
            HRmind UK | Healthcare Staffing Agency
        </title><!-- Stylesheets -->
        <link href="{{ URL::asset("css/bootstrap.css") }}" rel="stylesheet">
        <link href="{{ URL::asset("css/style.css") }}" rel="stylesheet">
        <link href="{{ URL::asset("css/responsive.css") }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700;900&amp;family=Merienda:wght@400;700&amp;family=Montserrat:wght@100;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="{{ URL::asset("images/favicon.png") }}" type="image/x-icon">
        <link rel="icon" href="{{ URL::asset("images/favicon.png") }}" type="image/x-icon"><!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]--><!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>
    <body>
        <div class="page-wrapper">
            <!-- Preloader -->
            <div class="preloader"></div><!-- Main Header -->
            <header class="main-header header-style-three">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="outer-container">
                        <div class="inner-container clearfix">
                            <div class="pull-left logo-box">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ URL::asset("images/logo.png") }}" style="height: 60px;"   alt="" title=""></a>
                                </div>
                            </div>
                            <div class="pull-right nav-outer clearfix">
                                <!-- Mobile Navigation Toggler -->
                                <div class="mobile-nav-toggler">
                                    <span class="icon flaticon-menu-2"></span>
                                </div><!-- Main Menu -->
                                <nav class="main-menu show navbar-expand-md">
                                    <div class="navbar-header">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <li class="current dropdown">
                                                <a href="{{url('/')}}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/employers')}}">Employers</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/job-seekers')}}">Job Seekers</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/resources')}}">Resources</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/about')}}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{url('/news')}}">News</a>
                                            </li>


                                            <li>
                                                <a href="{{url('/contact')}}">Contact us</a>
                                            </li>

                                            <li>
                                                <a href="#">Login /Signup</a>
                                            </li>

                                        </ul>
                                    </div>
                                </nav><!-- Main Menu End-->
                                <!-- Outer Box -->
                                <div class="outer-box">
                                    <!-- Search Btn -->
                                    <div class="search-box-btn search-box-outer">
                                        <span class="icon fa fa-search"></span>
                                    </div><!-- Cart Box -->
                                    <div class="cart-box">
                                        <div class="dropdown">
                                            <a href="app.hrmind.co.uk" class="cart-box-btn dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-user"></span></a>

                                        </div>
                                    </div>
                                </div><!-- Login Box -->
                                <ul class="login-box">
                                    <li>
                                        <a href="#" class="login">Login</a>
                                    </li>
                                    <li>
                                        <a href="#" class="register">Sign Up</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!--End Header Upper-->
                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn">
                        <span class="icon flaticon-multiply"></span>
                    </div>
                    <nav class="menu-box">
                        <div class="nav-logo">
                            <a href="index.html"><img src="{{ URL::asset("images/logo-2.png") }}" alt="" title=""></a>
                        </div>
                        <div class="menu-outer">
                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        </div>
                    </nav>
                </div><!-- End Mobile Menu -->
            </header><!-- End Main Header -->
            @yield("content")


           <!-- Clients Section Two -->
           <section class="clients-section-two"><br>
            <div class="auto-container">
                <!-- Title Box -->
                <div class="title-box">
                    <div class="title">
                        As Seen on
                    </div>
                    <h2>
                        We collaborate with <span>20+ leading</span><br>
                       heathcare partners
                    </h2>
                </div>
                <div class="sponsors-outer">
                    <!--Sponsors Carousel-->
                    <ul class="sponsors-carousel owl-carousel owl-theme">
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="{{ URL::asset("images/partners/rec.png") }}" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="{{ URL::asset("images/partners/seqohs.png") }}" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="{{ URL::asset("images/partners/hbg.png") }}" alt=""></a>
                            </figure>
                        </li>
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="{{ URL::asset("images/partners/ico.png") }}" alt=""></a>
                            </figure>
                        </li>
                        <!-- <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="{{ URL::asset("images/partners/seqohs.png") }}" alt=""></a>
                            </figure>
                        </li> -->
                        <li class="slide-item">
                            <figure class="image-box">
                                <a href="#"><img src="{{ URL::asset("images/partners/ics.png") }}" alt=""></a>
                            </figure>
                        </li>
                    </ul>
                </div>
            </div>
        </section><!-- End Clients Section Two -->
            <section class="info-section">
                <div class="pattern-layer" style="background-image:url({{ URL::asset("images/icons/icon-8.png") }})"></div>
                <div class="pattern-layer-two"></div>
                <div class="pattern-layer-three" style="background-image:url({{ URL::asset("images/icons/icon-7.png") }})"></div>
                <div class="auto-container">
                    <div class="inner-container">
                        <div class="pattern-layer-four" style="background-image:url({{ URL::asset("images/icons/icon-6.png") }})"></div>
                        <div class="pattern-layer-five" style="background-image:url({{ URL::asset("images/icons/pattern-5.png") }})"></div>
                        <div class="pattern-layer-six" style="background-image:url({{ URL::asset("images/icons/pattern-6.png") }})"></div>
                        <div class="pattern-layer-seven" style="background-image:url({{ URL::asset("images/icons/icon-3.png") }})"></div>
                        <div class="row clearfix">
                            <!-- Form Column -->
                            <div class="form-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image video-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a>
                                    <div class="icon flaticon-phone-call"></div><a class="phone" href="tel:07869920554">078 699 20554</a>
                                    <div class="text">
                                        Make Quick Call for any Kinds of<br>
                                        Industries Question
                                    </div>
                                    <h5>
                                        Sign up for updates
                                    </h5><!-- Subscribe Form Two -->
                                    <div class="subscribe-form-two">
                                        <form method="post" action="http://hrmind.co.uk/h5/13472/#">
                                            <div class="form-group">
                                                <input type="email" name="email" value="" placeholder="Email Address" required=""><button type="submit" class="submit-btn">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div><!-- Question Column -->
                            <div class="question-column col-lg-6 col-md-12 col-sm-12">
                                <div class="inner-column">
                                    <h4>
                                        Who We Are
                                    </h4>
                                    <div class="text">
                                        Request a demo or talk to our technical sales team to answer your questions.
                                    </div>
                                    <h6>
                                        Would you like to discuss our new service?
                                    </h6><a href="#" class="theme-btn btn-style-four"><span class="txt">Contact us <i><img src="{{ URL::asset("images/icons/arrow-1.png") }}" alt=""></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Info Section --><!-- Main Footer -->

            <!-- Main Footer / Style Two -->
            <footer class="main-footer style-three">
                <div class="pattern-layer-four" style="background-image: url({{ URL::asset("images/icons/icon-10.png") }})"></div>
                <div class="pattern-layer-five" style="background-image: url({{ URL::asset("images/icons/icon-4.png") }})"></div>
                <div class="pattern-layer-six" style="background-image: url({{ URL::asset("images/icons/icon-16.png") }})"></div>
                <div class="pattern-layer-seven" style="background-image: url({{ URL::asset("images/icons/icon-6.png") }})"></div>
                <div class="auto-container">
                    <!-- Upper Box -->
                    <div class="upper-box">
                        <div class="clearfix">
                            <div class="pull-left">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ URL::asset("images/footer-logo.png") }}" style="height: 60px;" alt=""></a>
                                </div>
                                <div class="phone">
                                    <strong>Call us</strong><a href="http://demo.dedemao.com/cdn-cgi/l/email-protection#e3d3d2d5dbd1d5d7dbd2d2d3d2">078 699 20554</a>
                                </div>
                                <div class="email">
                                    <strong>Email us</strong>Email:<a href="http://hrmind.co.uk/cdn-cgi/l/email-protection#533a3d353c13343e323a3f7d303c3e"><span class="__cf_email__" data-cfemail="f79e999198b7909a969e9bd994989a">[email&nbsp;protected]</span></a>
                                </div>
                            </div>
                            <div class="pull-right">
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li>
                                        <a href="https://www.linkedin.com/company/hrminduk/" class="fa fa-linkedin"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"></a>
                                    </li>
                                    <li>
                                        <a href="https://www.facebook.com/hrminduk/" class="fa fa-facebook-f"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-youtube-play"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-instagram"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- End Upper Box --><!-- Widgets Section -->
                    <div class="widgets-section">
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="big-column col-lg-6 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget payment-widget">
                                            <div class="text">
                                                We focus on thorough staff training, professionalism and care. HRmind is a personnel recruitment and supply company Nationwide.<br>
                                                <span>HQ: Unit 1, Loughborough Centre Brixton London SW9 7PD</span>
                                            </div>

                                        </div>
                                    </div><!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget link-widget">
                                            <h5>
                                                Company
                                            </h5>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{url('/about')}}">About Us</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/employers')}}">Employers
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/job-seekers')}}">Job Seekers</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/contact')}}">Contact Us</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Column -->
                            <div class="big-column col-lg-6 col-md-12 col-sm-12">
                                <div class="row clearfix">
                                    <!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget info-widget">
                                            <h5>
                                                Services
                                            </h5>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="{{url('/nurses')}}">Nurses</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/support-workers')}}">Support Workers</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/healthcare-assistants')}}">Health Care Assistants</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/care-managers')}}">Care Managers</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- Footer Column -->
                                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                        <div class="footer-widget link-widget">
                                            <h5>
                                               Resources
                                            </h5>
                                            <ul class="link-list">
                                                <li>
                                                    <a href="#">Staff Area</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/timesheets')}}">Timesheets</a>
                                                </li>
                                                <li>
                                                    <a href="#">Policies</a>
                                                </li>
                                                <li>
                                                    <a href="{{url('/news')}}">News</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Footer Bottom -->
                    <div class="footer-bottom">
                        <div class="copyright">
                            Copyright 2018-2022, All Right By <a href="http://www.hrmind.co.uk/">HRMIND STAFFING LIMITED</a>
                        </div>
                    </div>
                </div>
            </footer><!-- End Main Footer -->
        </div><!--End pagewrapper--><!-- Header Search -->
        <div class="search-popup">
            <button class="close-search style-two"><span class="flaticon-multiply"></span></button><button class="close-search"><span class="flaticon-multiply"></span></button>
            <form method="post" action="#">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search Here" required=""><button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div><!-- End Header Search --><!-- Scroll To Top -->
        <div class="scroll-to-tops scroll-to-target" data-target="html">
            <span class="fa fa-angle-up"></span>
        </div>
        <script src="{{ URL::asset("js/jquery.js") }}"></script>
        <script src="{{ URL::asset("js/popper.min.js") }}"></script>
        <script src="{{ URL::asset("js/bootstrap.min.js") }}"></script>
        <script src="{{ URL::asset("js/jquery.mCustomScrollbar.concat.min.js") }}"></script>
        <script src="{{ URL::asset("js/jquery.fancybox.js") }}"></script>
        <script src="{{ URL::asset("js/appear.js") }}"></script>
        <script src="{{ URL::asset("js/nav-tool.js") }}"></script>
        <script src="{{ URL::asset("js/mixitup.js") }}"></script>
        <script src="{{ URL::asset("js/owl.js") }}"></script>
        <script src="{{ URL::asset("js/tilt.jquery.min.js") }}"></script>
        <script src="{{ URL::asset("js/wow.js") }}"></script>
        <script src="{{ URL::asset("js/isotope.js") }}"></script>
        <script src="{{ URL::asset("js/jquery-ui.js") }}"></script>
        <script src="{{ URL::asset("js/script.js") }}"></script>
    </body>
</html>
