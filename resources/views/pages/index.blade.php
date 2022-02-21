@extends("layouts.parent")
@section("content")
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
                                        <a href="#">Home</a>
                                    </li>
                                    <li>
                                        <a href="#">Employers</a>
                                    </li>
                                    <li>
                                        <a href="#">Job Seekers</a>
                                    </li>
                                    <li>
                                        <a href="#">Resources</a>
                                    </li>
                                    <li>
                                        <a href="#">About Us</a>
                                    </li>
                                    <li>
                                        <a href="#">News</a>
                                    </li>


                                    <li>
                                        <a href="contact.html">Contact us</a>
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
                                    <button class="cart-box-btn dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-user"></span></button>

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
    <!-- Banner Slider Two -->
    <section class="banner-section-two">
        <div class="icon-layer-one" style="background-image:url({{ URL::asset("images/icons/icon-11.png") }})"></div>
        <div class="icon-layer-two" style="background-image:url({{ URL::asset("images/icons/icon-3.png") }})"></div>
        <div class="icon-layer-three" style="background-image:url({{ URL::asset("images/background/pattern-8.png") }})  "></div>
        <div class="icon-layer-eight" style="background-image:url({{ URL::asset("images/background/pattern-9.png") }})"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 cl-md-12 col-sm-12">
                    <div class="inner-column">
                        <h1>
                            Solving Healthcare<br>
                            Staffing<br>
                            Shortages<br>
                        </h1>
                        <div class="text">
                            Leading suppliers of contract and temporary health & social care professionals across the UK
                        </div><a class="theme-btn btn-style-five" href="#"><span class="txt">Join Our Workforce</span></a>
                        <div class="phone-box">
                            <div class="box-inner">
                                <span class="icon flaticon-phone-call"></span> Call us <a href="tel:07869920554">078 699 20554</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Image Column -->
                <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="color-layer"></div>
                        <div class="icon-layer-four" style="background-image:url({{ URL::asset("images/background/pattern-7.png") }})"></div>
                        <div class="icon-layer-five" style="background-image:url({{ URL::asset("images/icons/icon-12.png") }})"></div>
                        <div class="icon-layer-six" style="background-image:url({{ URL::asset("images/icons/icon-3.png") }})"></div>
                        <div class="icon-layer-seven" style="background-image:url({{ URL::asset("images/icons/icon-12.png") }})"></div>
                        <div class="image">
                            <img src="{{ URL::asset("images/resource/homehrmind.png") }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Banner Slider -->
    <!-- Featured Section -->
    <section class="services-section">
        <div class="icon-layer-one" style="background-image:url({{ URL::asset("images/icons/icon-4.png") }})"></div>
        <div class="icon-layer-two" style="background-image:url({{ URL::asset("images/icons/icon-5.png") }})"></div>
        <div class="icon-layer-three" style="background-image:url({{ URL::asset("images/icons/icon-4.png") }})"></div>
        <div class="icon-layer-four" style="background-image:url({{ URL::asset("images/icons/icon-11.png") }})"></div>
        <div class="icon-layer-five" style="background-image:url({{ URL::asset("images/background/pattern-4.png") }})"></div>
        <div class="icon-layer-six" style="background-image:url({{ URL::asset("images/background/pattern-4.png") }})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">
                    Solving shortages...
                </div>
                <h2>
                    Nationwide Staffing Supply
                </h2>
            </div>
            <div class="inner-container">
                <div class="circle-one"></div>
                <div class="circle-two"></div>
                <div class="row clearfix">
                    <!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Services Block -->
                        <div class="services-block">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-correct"></span>
                                    </div>
                                    <h5>
                                        <a href="#">Nurses (RN, RMN, RLDNs)</a>
                                    </h5>
                                    <div class="text">
                                        Registered Nurses to work at all levels e.g. Staff Nurse, Clinical Team Leader and Ward Manager. Registered Mental Health / Learning Disability Nurses (RMNs / RLDNs) for psychiatric units, nursing homes, etc.
                                    </div><a href="#" class="explore">Explore <span class="arrow"><img src="{{ URL::asset("images/icons/arrow-2.png") }}" alt=""></span></a>
                                </div>
                            </div>
                        </div><!-- Title Block -->
                        <div class="title-block">
                            <div class="inner-block">
                                <div class="image titlt" data-tilt="" data-tilt-max="4">
                                    <img src="{{ URL::asset("images/resource/service.png") }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div><!-- Column -->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <!-- Services Block -->
                        <div class="services-block style-two">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-correct"></span>
                                    </div>
                                    <h5>
                                        <a href="#">Support Workers (SW)</a>
                                    </h5>
                                    <div class="text">
                                        SW / Senior SW for supported housing, homeless projects, family assessment centres, etc.
                                        Mental Health SW for rehabilitation schemes and community based services. Youth Workers for accommodation and support services
                                    </div><a href="#" class="explore">Explore <span class="arrow"><img src="{{ URL::asset("images/icons/arrow-2.png") }}" alt=""></span></a>
                                </div>
                            </div>
                        </div><!-- Services Block -->
                        <div class="services-block style-three">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-correct"></span>
                                    </div>
                                    <h5>
                                        <a href="#">Registered Care Managers</a>
                                    </h5>
                                    <div class="text">
                                        Registered Care Managers / Project Managers. <br>Senior Management Roles, including Area Managers and Operations Directors.
                                    </div><a href="#" class="explore">Explore <span class="arrow"><img src="{{ URL::asset("images/icons/arrow-2.png") }}" alt=""></span></a>
                                </div>
                            </div>
                        </div><!-- Services Block -->
                        <div class="services-block style-four">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon-box">
                                        <span class="icon flaticon-correct"></span>
                                    </div>
                                    <h5>
                                        <a href="#">Health Care Assistants (HCA)</a>
                                    </h5>
                                    <div class="text">
                                        Health Care Assistants for large mental hospitals with multiple specialities, to specialist units such as CAMHS or learning disabilities. Care Assistants for elderly and physical and learning disability care settings.
                                    </div><a href="#" class="explore">Explore <span class="arrow"><img src="{{ URL::asset("images/icons/arrow-2.png") }}" alt=""></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><!-- End Services Section --><!-- Testimonial Section Two -->

    <!-- Connection Section -->
    <section class="connection-section"><br><br>
        <div class="color-one"></div>
        <div class="pattern-layer" style="background-image:url({{ URL::asset("images/background/pattern-10.png") }})"></div>
        <div class="icon-layer-one" style="background-image:url({{ URL::asset("images/icons/icon-4.png") }})"></div>
        <div class="icon-layer-two" style="background-image:url({{ URL::asset("images/icons/icon-15.png") }})"></div>
        <div class="icon-layer-three" style="background-image:url({{ URL::asset("images/icons/icon-4.png") }})"></div>
        <div class="icon-layer-four" style="background-image:url({{ URL::asset("images/icons/pattern-10.png") }})"></div>
        <div class="icon-layer-five" style="background-image:url({{ URL::asset("images/icons/icon-3.png") }})"></div>
        <div class="left-color-layer"></div>
        <div class="right-color-layer"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>
                                Human resources and transformative  <br> technology for quality care<br>

                            </h2>
                            <div class="text">
                              You will find several reasons to work with us as staff or client
                            </div>
                        </div>
                        <div class="row clearfix">
                            <!-- Feature Block Three -->
                            <div class="feature-block-three col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-meditation"></span>
                                    </div>
                                    <h4>
                                        <a href="#">Ease of operation</a>
                                    </h4>
                                    <div class="text">
                                        Use of technology to find what you need, who you need without hassle or speak to us 24hours about anything.
                                    </div><a href="#" class="link">Join our workforce</a>
                                </div>
                            </div><!-- Feature Block Three -->
                            <div class="feature-block-three col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-outer">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <span class="icon flaticon-mortarboard"></span>
                                        </div>
                                        <h4>
                                            <a href="#">Timely payment and unbeatable rates</a>
                                        </h4>
                                        <div class="text">
                                            We will move you to our Workforce without stress, pay you more than your current employer and above all, pay you wages with zero delay.
                                        </div><a href="#" class="link">Join our workforce</a>
                                    </div>
                                </div>
                            </div><!-- Feature Block Three -->
                            <div class="feature-block-three col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                <div class="inner-box">
                                    <div class="icon-box">
                                        <span class="icon flaticon-bar-chart"></span>
                                    </div>
                                    <h4>
                                        <a href="#">Wellbeing and efficiency</a>
                                    </h4>
                                    <div class="text">
                                       We don't snooze, we up round the clock matching you with suitable clients and when you can't work we can pay you in advance:)
                                    </div><a href="#" class="link">Join our workforce</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Video Column -->
                <div class="video-column col-lg-4 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="color-two"></div><!-- Video Box -->
                        <div class="video-boxed-two wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="video-image">
                                <img src="{{ URL::asset("images/resource/she-hrmind.png") }}" alt="">
                            </figure><a href="https://www.youtube.com/watch?v=kxPCFljwJws" class="lightbox-image overlay-box"><span class="flaticon-play-arrow"><i class="ripple"></i></span></a> <i class="time">5.20 m</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> <br><br><!-- End Connection Section -->


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
                                            <a href="#">About Us</a>
                                        </li>
                                        <li>
                                            <a href="#">Employers
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">Job Seekers</a>
                                        </li>
                                        <li>
                                            <a href="#">Contact Us</a>
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
                                            <a href="#">Nurses</a>
                                        </li>
                                        <li>
                                            <a href="#">Support Workers</a>
                                        </li>
                                        <li>
                                            <a href="#">Health Care Assistants</a>
                                        </li>
                                        <li>
                                            <a href="#">Care Managers</a>
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
                                            <a href="#">Timesheets</a>
                                        </li>
                                        <li>
                                            <a href="#">Policies</a>
                                        </li>
                                        <li>
                                            <a href="#">News</a>
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
@endsection
