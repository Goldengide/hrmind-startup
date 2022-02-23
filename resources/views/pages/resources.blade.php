@extends("layouts.parent")
@section("content")

<section class="page-title-section">
    <div class="icon-layer-one" style="background-image:url(images/background/pattern-15.png)"></div>
    <div class="icon-layer-two" style="background-image:url(images/background/pattern-16.png)"></div>
    <div class="icon-layer-three" style="background-image:url(images/icons/icon-3.png)"></div>
    <div class="icon-layer-four" style="background-image:url(images/icons/icon-3.png)"></div>
    <div class="auto-container">
        <div class="row clearfix">

            <div class="image-column col-lg-6 cl-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="color-layer"></div>
                    <div class="color-layer-two"></div>
                    <div class="icon-layer-five" style="background-image:url(images/icons/icon-12.png)"></div>
                    <div class="icon-layer-six" style="background-image:url(images/icons/icon-22.png)"></div>
                    <div class="icon-layer-seven" style="background-image:url(images/icons/pattern-10.png)"></div>
                    <div class="icon-layer-eight" style="background-image:url(images/icons/pattern-19.png)"></div>
                    <div class="image">
                        <img src="images/resource/page-title.png" alt="">
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
                        <div class="pattern-layer-one" style="background-image: url(images/icons/pattern-20.png)"></div>
                        <div class="pattern-layer-two" style="background-image: url(images/icons/pattern-20.png)"></div>
                        <div class="pattern-layer-three" style="background-image: url(images/icons/arrow-4.html)"></div>
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
                        <div class="pattern-layer-four" style="background-image: url(images/icons/pattern-20.png)"></div>
                        <h3>
                            Leave a message
                        </h3>
                        <div class="text">
                            We will be glad to hear from you!
                        </div><!-- Contact Form -->
                        <div class="contact-form">
                            <form method="post" action="#." id="contact-form" name="contact-form">
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
</section><!-- End Clients Section Two -->

@endsection
