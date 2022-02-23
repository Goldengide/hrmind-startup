@extends("layouts.parent")
@section("content")
<section class="page-title-section">
    <div class="icon-layer-one" style="background-image:url({{ URL::asset("images/background/pattern-15.png") }})"></div>
    <div class="icon-layer-two" style="background-image:url({{ URL::asset("images/background/pattern-16.png") }})"></div>
    <div class="icon-layer-three" style="background-image:url({{ URL::asset("images/icons/icon-3.png") }})"></div>
    <div class="icon-layer-four" style="background-image:url({{ URL::asset("images/icons/icon-3.png") }})"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Title Column -->
            <div class="title-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                    <ul class="page-breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>Contact
                        </li>
                    </ul>
                    <h1>
                        Contact<br>
                        Us
                    </h1>
                </div>
            </div><!-- Image Column -->
            <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="color-layer"></div>
                    <div class="color-layer-two"></div>
                    <div class="icon-layer-five" style="background-image:url({{ URL::asset("images/icons/icon-12.png") }})"></div>
                    <div class="icon-layer-six" style="background-image:url({{ URL::asset("images/icons/icon-22.png") }})"></div>
                    <div class="icon-layer-seven" style="background-image:url({{ URL::asset("images/icons/pattern-10.png") }})"></div>
                    <div class="icon-layer-eight" style="background-image:url({{ URL::asset("images/icons/pattern-19.png") }})"></div>
                    <div class="image">
                        <img src="{{ URL::asset("images/resource/page-title-2.png") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Page Title Slider --><!-- Contact Page Section -->
<section class="contact-page-section">
    <div class="auto-container">
        <div class="inner-container">
            <div class="row clearfix">
                <!-- Info Column -->
                <div class="info-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="color-layer"></div>
                        <div class="pattern-layer-one" style="background-image: url({{ URL::asset("images/icons/pattern-20.png") }})"></div>
                        <div class="pattern-layer-two" style="background-image: url({{ URL::asset("images/icons/pattern-20.png") }})"></div>
                        <div class="pattern-layer-three" style="background-image: url({{ URL::asset("images/icons/arrow-4.html") }})"></div>
                        <div class="title">
                            GET IN TOUCH
                        </div>
                        <h2>
                            Visit one of our Company<br>
                            contact us today
                        </h2>
                        <ul class="info-box">
                            <li>
                                <span class="icon flaticon-map"></span><strong>Address</strong>Unit 1, Loughborough Centre Brixton London SW9 7PD
                            </li>
                            <li>
                                <span class="icon flaticon-phone-call"></span><strong>Our Phone</strong>Telephone:<a href="tel:01781648101">078 699 20554</a><br>
                                Mobile:<a href="tel:07869920554">078 699 20554</a>
                            </li>
                            <li>
                                <span class="icon flaticon-send"></span><strong>Our Email</strong>Telephone:<a href="tel:+028577101">028577101</a><br>
                                Mobile:<a href="tel:01781648101">01781648101</a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Form Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="pattern-layer-four" style="background-image: url({{ URL::asset("images/icons/pattern-20.png") }})"></div>
                        <h3>
                            Leave a message
                        </h3>
                        <div class="text">
                            We will be glad to hear from you!
                        </div><!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="#." name="contact-form">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Full Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone" required="">
                                </div>
                                <div class="form-group">
                                    <textarea class="" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="theme-btn btn-style-five" type="submit" name="submit-form"><span class="txt">Send Message</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Contact Page Section --><!-- Map Contact Section -->
<section class="map-contact-section">
    <div class="auto-container">
        <!-- Map Boxed -->
        <div class="map-boxed">
            <!-- Map Outer -->
            <!-- <div class="map-outer">
                <iframe src="http://www.google.cn/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" width="100%" height="500px" frameborder="0" style="border:0;" allowfullscreen></iframe>
            </div> -->
        </div>
    </div>
</section><!-- End Map Contact Section --><!-- Main Footer / Style Two -->


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
    <form method="post" action="http://demo.dedemao.com/h5/13472/blog.html">
        <div class="form-group">
            <input type="search" name="search-field" value="" placeholder="Search Here" required=""><button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </form>
</div><!-- End Header Search --><!-- Scroll To Top -->
<div class="scroll-to-tops scroll-to-target" data-target="html">
    <span class="fa fa-angle-up"></span>
</div>
@endsection
