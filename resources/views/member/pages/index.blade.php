@extends('member.app')
@section('index')
<body>
    <!-- preloader -->
    <div class="preloader" style="display: none;">
        <div class="status" style="display: none;">
            <div class="status-message">
            </div>
        </div>
    </div>
    <!-- end preloader -->
    <!--  top bar -->
    <div class="top-bar hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="info-bar">
                        <ul>
                            <li><i class="fa fa-envelope" aria-hidden="true"></i> info@carwash.com</li>
                            <li>|</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>(+01) 123 456 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="top-bar-right">
                        <div class="top-menu hidden-sm">
                            <ul>
                                <li><a href="#">Schedule</a></li>
                                <li>|</li>
                                <li><a href="#">News</a></li>
                                <li>|</li>
                                <li><a href="#">Faq</a></li>
                            </ul>
                        </div>
                        <div class="social-icon">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end top bar -->
    <!--  navigation -->
    <div class="nav-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <a href="/index"><img src="{{asset('member/assets/images/logo.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="navigation">
                        <div id="cssmenu" class="">
                            <div id="menu-button">Menu</div>
                            <ul style="display: block;">
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Home</a>
                                    <ul style="display: block;">
                                        <li> <a href="index.html">Home Style 1</a></li>
                                        <li><a href="../version2/index.html">Home Style 2</a></li>
                                        <li><a href="../version3/index.html">Home Style 3</a></li>
                                        <li><a href="../version4/index.html">Home Style 4</a></li>
                                        <li><a href="../version5/index.html">Home Style 5</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Pages</a>
                                    <ul style="display: block;">
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="appointment.html">Appointment</a></li>
                                        <li><a href="location.html">Location</a></li>
                                        <li><a href="feedback.html">Feedback</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                        <li><a href="process.html">Process</a></li>
                                        <li><a href="pricing-plan.html">Pricing Plan</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="403.html">403</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="under-construction.html">Under Construction</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Services</a>
                                    <ul style="display: block;">
                                        <li><a href="services.html">Services Style 1</a></li>
                                        <li><a href="services-style-2.html">Services Style 2</a></li>
                                        <li><a href="services-details.html">Services Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Gallery</a>
                                    <ul style="display: block;">
                                        <li><a href="gallery-col3.html">Portfolio 3 Column</a></li>
                                        <li><a href="gallery-col4.html">Portfolio 4 Column</a></li>
                                        <li><a href="gallery-col5.html">Portfolio 5 Column</a></li>
                                        <li><a href="gallery-full-width.html">Portfolio Full Width</a></li>
                                        <li><a href="gallery-full-width-2.html">Portfolio Full Width</a></li>
                                        <li><a href="gallery-full-width-3.html">Portfolio Full Width</a></li>
                                        <li><a href="gallery-masonry.html">Portfolio Masonry</a></li>
                                        <li><a href="gallery-with-slider.html">Portfolio With Slider</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Team</a>
                                    <ul style="display: block;">
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="team-details.html">Team Details</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Blog</a>
                                    <ul style="display: block;">
                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-single-left-sidebar.html">Blog Single Left Sidebar</a></li>
                                        <li><a href="blog-single-right-sidebar.html">Blog Single Right Sidebar</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Shop</a>
                                    <ul style="display: block;">
                                        <li><a href="shop.html">Shop Style 1</a></li>
                                        <li><a href="shop-style-2.html">Shop Style 2</a></li>
                                        <li><a href="shop-style-3.html">Shop Style 3</a></li>
                                        <li><a href="shop-style-4.html">Shop Style 4</a></li>
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="product-details-sidebar.html">Product Details Sidebar</a></li>
                                        <li><a href="cart.html">Cart Page</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub"><span class="submenu-button"></span><a href="#">Contact</a>
                                    <ul style="display: block;">
                                        <li><a href="contact.html">Contact Style 1</a></li>
                                        <li><a href="contact-style-2.html">Contact Style 2</a></li>
                                        <li><a href="contact-style-3.html">Contact Style 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end navigation -->
    <!--  slider -->
    <div id="home-slider" class="home-slider owl-carousel owl-theme owl-loaded">

        <div class="owl-stage-outer">
            <div class="owl-stage"
                style="transform: translate3d(-5876px, 0px, 0px); transition: all 2s ease 0s; width: 10283px;">
                <div class="owl-item cloned" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-2.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-3.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-1.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-2.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item active" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-3.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-1.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-item cloned" style="width: 1469px; margin-right: 0px;">
                    <div class="item home-slider-bg" style="background-image: url('{{asset('member/assets/images/slider-2.jpg')}}')">
                        <div class="container">
                            <div class="slider-dtl">
                                <h4 class="slider-sub-heading">We Care</h4>
                                <h1 class="slider-heading">For Your Car</h1>
                                <p>Nam pretium turpis et arcu duis arcu tortor suscipit eget impe nec imperdiet iaculis
                                    ipsum sed aliquam ultrices mauris ante arcu accumsan a consectetuer eget posuere.
                                </p>
                                <div class="slider-btn">
                                    <a href="#" class="btn btn-orange">Read More</a>
                                    <a href="#" class="btn btn-default">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-controls">
            <div class="owl-nav">
                <div class="owl-prev" style="display: block;"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                <div class="owl-next" style="display: block;"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            <div class="owl-dots" style="display: none;"></div>
        </div>
    </div>
    <!--  end slider -->
    <!--  who we are -->
    <div id="who-we-are" class="who-we-are-main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section">
                        <h3 class="section-heading">Who We Are?</h3>
                        <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit aenean commodo ligula eget dolor
                            aenean mas cum soc iis natoque penatibus et magnis dis parturient montes nascetur ridiculus
                            mus donec quam felis ultricies nec pellentesque eu pretium quis sem nulla consequat massa
                            quis enim.</p>
                    </div>
                    <div class="row who-we-are-points">
                        <div class="col-sm-6">
                            <div class="who-we-are-block">
                                <div class="who-we-are-icon">
                                    <i class="icon-1" aria-hidden="true"></i>
                                </div>
                                <div class="who-we-are-dtl">
                                    <h5 class="who-we-are-heading">Donec Pede Fringilla</h5>
                                    <p>Nullam dictum felis eu pede mollis preti integer tincidunt cras dapibus vivam
                                        elementum semper nisi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="who-we-are-block">
                                <div class="who-we-are-icon">
                                    <i class="icon-2" aria-hidden="true"></i>
                                </div>
                                <div class="who-we-are-dtl">
                                    <h5 class="who-we-are-heading">Donec Pede Fringilla</h5>
                                    <p>Nullam dictum felis eu pede mollis preti integer tincidunt cras dapibus vivam
                                        elementum semper nisi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="who-we-are-block">
                                <div class="who-we-are-icon">
                                    <i class="icon-3" aria-hidden="true"></i>
                                </div>
                                <div class="who-we-are-dtl">
                                    <h5 class="who-we-are-heading">Donec Pede Fringilla</h5>
                                    <p>Nullam dictum felis eu pede mollis preti integer tincidunt cras dapibus vivam
                                        elementum semper nisi.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="who-we-are-block">
                                <div class="who-we-are-icon">
                                    <i class="icon-8" aria-hidden="true"></i>
                                </div>
                                <div class="who-we-are-dtl">
                                    <h5 class="who-we-are-heading">Donec Pede Fringilla</h5>
                                    <p>Nullam dictum felis eu pede mollis preti integer tincidunt cras dapibus vivam
                                        elementum semper nisi.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 hidden-sm">
                    <div class="who-we-are-img">
                        <img src="{{asset('member/assets/images/who-we-are.jpg')}}" class="img-responsive" alt="who-we-are">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end who we are -->
    <!--  services -->
    <div id="services" class="services-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Our Services</h3>
                <p class="sub-heading">Sollicitudin urna dolor sagittis lacus donec elit libero sodales nec</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-01.png')}}"
                                    class="img-responsive" alt="service-01"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Vehicle Hand Wash</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-02.png')}}"
                                    class="img-responsive" alt="service-02"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Headlight Lens Restoration</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-03.png')}}"
                                    class="img-responsive" alt="service-03"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Scratch Removal</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-04.png')}}"
                                    class="img-responsive" alt="service-04"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Tar Removal</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-05.png')}}"
                                    class="img-responsive" alt="service-05"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Odor Elimination</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-06.png')}}"
                                    class="img-responsive" alt="service-06"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Engine Cleaning</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-07.png')}}"
                                    class="img-responsive" alt="service-07"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Hazardous Cleaning</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="service-block text-center">
                        <div class="service-icon">
                            <a href="services-details.html"><img src="{{asset('member/assets/images/icons/service-08.png')}}"
                                    class="img-responsive" alt="service-08"></a>
                        </div>
                        <div class="service-dtl">
                            <a href="services-details.html">
                                <h5 class="service-heading">Valet Service</h5>
                            </a>
                            <p>Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque
                                enatib.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--  end services -->
    <!--  gallery -->
    <div id="work-gallery" class="work-gallery-main-block">
        <div class="parallax" style="background-image: url('{{asset('member/assets/images/bg/work-gallery-bg.jpg')}}')">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="section text-center">
                    <h3 class="section-heading">Working gallery</h3>
                    <p class="sub-heading">Donec pede justo fringilla vel aliquet nec vulputate eget arcu enim rhoncus
                    </p>
                </div>
                <div id="work-gallery-slider" class="work-gallery-slider owl-carousel owl-theme owl-loaded">

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-2632.5px, 0px, 0px); transition: all 2s ease 0s; width: 4095px;">
                            <div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-03">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-03.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-04.jpg')}}" class="img-responsive" alt="gallery-04">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-04.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-05.jpg')}}" class="img-responsive" alt="gallery-05">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-05.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-06.jpg')}}" class="img-responsive" alt="gallery-06">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-06.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-01.jpg')}}" class="img-responsive" alt="gallery-01">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-01.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-02.jpg')}}" class="img-responsive" alt="gallery-02">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-02.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-03">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-03.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-04.jpg')}}" class="img-responsive" alt="gallery-04">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-04.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-05.jpg')}}" class="img-responsive" alt="gallery-05">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-05.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-06.jpg')}}" class="img-responsive" alt="gallery-06">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-06.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-01.jpg')}}" class="img-responsive" alt="gallery-01">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-01.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-02.jpg')}}" class="img-responsive" alt="gallery-02">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-02.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-03.jpg')}}" class="img-responsive" alt="gallery-03">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-03.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 262.5px; margin-right: 30px;">
                                <div class="item work-gallery-block">
                                    <img src="{{asset('member/assets/images/gallery/gallery-04.jpg')}}" class="img-responsive" alt="gallery-04">
                                    <div class="overlay-bg"><a href="images/gallery/gallery-04.jpg"
                                            title="Your Image Title"><i class="fa fa-plus"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style="display: block;"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i></div>
                            <div class="owl-next" style="display: block;"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></div>
                        </div>
                        <div class="owl-dots" style="display: none;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end gallery -->
    <!--  team -->
    <div id="team" class="team-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Our Awesome Team</h3>
                <p class="sub-heading">Nullam dictum felis eu pede mollis pretium integer tincidunt cras dapibus</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="team-block text-center">
                        <div class="team-img">
                            <a href="team-details.html"><img src="{{asset('admin/assets/img/team/1.jpg')}}" class="img-responsive"
                                    alt="team-01">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="team-dtl">
                            <a href="team-details.html">
                                <h6 class="team-heading">Sarah Johnson</h6>
                            </a>
                            <div class="team-post">Mechanic</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-block text-center">
                        <div class="team-img">
                            <a href="team-details.html"><img src="{{asset('admin/assets/img/team/2.jpg')}}" class="img-responsive"
                                    alt="team-02">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="team-dtl">
                            <a href="team-details.html">
                                <h6 class="team-heading">John Doe</h6>
                            </a>
                            <div class="team-post">Mechanic</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-block text-center">
                        <div class="team-img">
                            <a href="team-details.html"><img src="{{asset('admin/assets/img/team/3.jpg')}}" class="img-responsive"
                                    alt="team-03">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="team-dtl">
                            <a href="team-details.html">
                                <h6 class="team-heading">Sarah Clark</h6>
                            </a>
                            <div class="team-post">Mechanic</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="team-block text-center">
                        <div class="team-img">
                            <a href="team-details.html"><img src="{{asset('admin/assets/img/team/4.jpg')}}" class="img-responsive"
                                    alt="team-04">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="team-dtl">
                            <a href="team-details.html">
                                <h6 class="team-heading">Mark Dwayne</h6>
                            </a>
                            <div class="team-post">Mechanic</div>
                            <div class="team-social">
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end team -->
    <!--  facts -->
    <div id="facts" class="facts-main-block">
        <div class="parallax" style="background-image: url('{{asset('member/assets/images/bg/facts-bg.jpg')}}')">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="facts-block text-center">
                            <div class="facts-icon">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <h2 class="facts-number counter">1025</h2>
                            <div class="facts-text">Vehicle Washed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="facts-block text-center">
                            <div class="facts-icon">
                                <i class="fa fa-car" aria-hidden="true"></i>
                            </div>
                            <h2 class="facts-number counter">850</h2>
                            <div class="facts-text">Car Washed</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="facts-block text-center">
                            <div class="facts-icon">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                            <h2 class="facts-number counter">780</h2>
                            <div class="facts-text">Happy Customers</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="facts-block text-center">
                            <div class="facts-icon">
                                <i class="fa fa-coffee" aria-hidden="true"></i>
                            </div>
                            <h2 class="facts-number counter">500</h2>
                            <div class="facts-text">Cup of Coffee</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end facts -->
    <!--  plans -->
    <div id="pricing-plan" class="pricing-plan-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Washing Plans</h3>
                <p class="sub-heading">Phasellus ullamcorper ipsum rutrum nunc nunc nonummy metus vestibulum</p>
            </div>
            <div class="pricing-plan-tab">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#plan-1" aria-controls="plan-1" role="tab"
                            data-toggle="tab"><span><i class="icon-1"></i></span>Regular Car</a></li>
                    <li role="presentation"><a href="#plan-2" aria-controls="plan-2" role="tab"
                            data-toggle="tab"><span><i class="icon-3"></i></span>Medium Car</a></li>
                    <li role="presentation"><a href="#plan-3" aria-controls="plan-3" role="tab"
                            data-toggle="tab"><span><i class="icon-2"></i></span>Compact SUV</a></li>
                    <li role="presentation"><a href="#plan-4" aria-controls="plan-4" role="tab"
                            data-toggle="tab"><span><i class="icon-4"></i></span>Mini Van</a></li>
                    <li role="presentation"><a href="#plan-5" aria-controls="plan-5" role="tab"
                            data-toggle="tab"><span><i class="icon-6"></i></span>Pickup Truck</a></li>
                    <li role="presentation"><a href="#plan-6" aria-controls="plan-6" role="tab"
                            data-toggle="tab"><span><i class="icon-8"></i></span>Cargo Truck</a></li>
                </ul>
            </div>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="plan-1">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Basic Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$49.00</h2>
                                    <div class="pricing-duration">25 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Deluxe Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$69.00</h2>
                                    <div class="pricing-duration">45 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Ultimate Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$89.00</h2>
                                    <div class="pricing-duration">60 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Super Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$109.00</h2>
                                    <div class="pricing-duration">100 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                        <li>Air Freshener</li>
                                        <li>Triple Coat Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="plan-2">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Basic Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$69.00</h2>
                                    <div class="pricing-duration">25 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Deluxe Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$89.00</h2>
                                    <div class="pricing-duration">45 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Ultimate Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$109.00</h2>
                                    <div class="pricing-duration">60 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Super Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$309.00</h2>
                                    <div class="pricing-duration">100 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                        <li>Air Freshener</li>
                                        <li>Triple Coat Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="plan-3">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Basic Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$89.00</h2>
                                    <div class="pricing-duration">25 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Deluxe Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$109.00</h2>
                                    <div class="pricing-duration">45 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Ultimate Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$149.00</h2>
                                    <div class="pricing-duration">60 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Super Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$199.00</h2>
                                    <div class="pricing-duration">100 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                        <li>Air Freshener</li>
                                        <li>Triple Coat Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="plan-4">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Basic Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$99.00</h2>
                                    <div class="pricing-duration">25 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Deluxe Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$149.00</h2>
                                    <div class="pricing-duration">45 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Ultimate Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$199.00</h2>
                                    <div class="pricing-duration">60 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Super Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$249.00</h2>
                                    <div class="pricing-duration">100 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                        <li>Air Freshener</li>
                                        <li>Triple Coat Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="plan-5">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Basic Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$99.00</h2>
                                    <div class="pricing-duration">25 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Deluxe Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$109.00</h2>
                                    <div class="pricing-duration">45 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Ultimate Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$145.00</h2>
                                    <div class="pricing-duration">60 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Super Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$249.00</h2>
                                    <div class="pricing-duration">100 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                        <li>Air Freshener</li>
                                        <li>Triple Coat Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="plan-6">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Basic Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$149.00</h2>
                                    <div class="pricing-duration">25 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Deluxe Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$199.00</h2>
                                    <div class="pricing-duration">45 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Ultimate Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$249.00</h2>
                                    <div class="pricing-duration">60 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="pricing-block text-center">
                                <h6 class="pricing-heding">Super Washing</h6>
                                <div class="pricing-price-block">
                                    <h2 class="pricing-price">$299.00</h2>
                                    <div class="pricing-duration">100 Mins</div>
                                </div>
                                <div class="pricing-dtl">
                                    <ul>
                                        <li>Exterior Hand Wash</li>
                                        <li>Towel Hand Dry</li>
                                        <li>Wheel Shine</li>
                                        <li>Tire Dressing</li>
                                        <li>Window In &amp; Out</li>
                                        <li>Sealer Hand Wax</li>
                                        <li>Interior Vacuum</li>
                                        <li>Door Shut’s &amp; Plastics</li>
                                        <li>Dashboard Clean</li>
                                        <li>Air Freshener</li>
                                        <li>Triple Coat Hand Wax</li>
                                    </ul>
                                    <a href="#" class="btn btn-default">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end plans -->
    <!--  testimonials -->
    <div id="testimonials" class="testimonials-main-block">
        <div class="parallax" style="background-image: url('{{asset('member/assets/images/bg/testimonials-bg.jpg')}}')">
            <div class="overlay-bg"></div>
            <div class="container">
                <div class="section text-center">
                    <h3 class="section-heading">Testimonials</h3>
                </div>
                <div id="testimonials-slider" class="testimonials-slider owl-carousel owl-theme owl-loaded">


                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-3420px, 0px, 0px); transition: all 2s ease 0s; width: 6840px;">
                            <div class="owl-item cloned" style="width: 1140px; margin-right: 0px;">
                                <div class="item testimonials-block">
                                    <div class="testimonials-dtl text-center">
                                        <p>“ Curabitur ligula sapien tincidunt non euismod vitae posuere imperdiet leo
                                            maecenas malesuada praesent congue erat at massa sed cursus turpis vitae
                                            tortor donec posuere vulputate arcu phasellus accumsan cursus velit
                                            vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia. ”</p>
                                    </div>
                                    <div class="testimonials-client">
                                        <div class="testimonials-client-img">
                                            <img src="{{asset('member/assets/images/testimonials-client-01.jpg')}}" class="img-responsive"
                                                alt="client-01">
                                        </div>
                                        <div class="testimonials-client-dtl">
                                            <h6 class="client-name">Sarah Cesaro</h6>
                                            <div class="client-since">Platinum user from 3 years</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1140px; margin-right: 0px;">
                                <div class="item testimonials-block">
                                    <div class="testimonials-dtl text-center">
                                        <p>“ Curabitur ligula sapien tincidunt non euismod vitae posuere imperdiet leo
                                            maecenas malesuada praesent congue erat at massa sed cursus turpis vitae
                                            tortor donec posuere vulputate arcu phasellus accumsan cursus velit
                                            vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia. ”</p>
                                    </div>
                                    <div class="testimonials-client">
                                        <div class="testimonials-client-img">
                                            <img src="{{asset('member/assets/images/testimonials-client-02.jpg')}}" class="img-responsive"
                                                alt="client-02">
                                        </div>
                                        <div class="testimonials-client-dtl">
                                            <h6 class="client-name">Smith Cesaro</h6>
                                            <div class="client-since">Platinum user from 2 years</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1140px; margin-right: 0px;">
                                <div class="item testimonials-block">
                                    <div class="testimonials-dtl text-center">
                                        <p>“ Curabitur ligula sapien tincidunt non euismod vitae posuere imperdiet leo
                                            maecenas malesuada praesent congue erat at massa sed cursus turpis vitae
                                            tortor donec posuere vulputate arcu phasellus accumsan cursus velit
                                            vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia. ”</p>
                                    </div>
                                    <div class="testimonials-client">
                                        <div class="testimonials-client-img">
                                            <img src="{{asset('member/assets/images/testimonials-client-01.jpg')}}" class="img-responsive"
                                                alt="client-01">
                                        </div>
                                        <div class="testimonials-client-dtl">
                                            <h6 class="client-name">Sarah Cesaro</h6>
                                            <div class="client-since">Platinum user from 3 years</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 1140px; margin-right: 0px;">
                                <div class="item testimonials-block">
                                    <div class="testimonials-dtl text-center">
                                        <p>“ Curabitur ligula sapien tincidunt non euismod vitae posuere imperdiet leo
                                            maecenas malesuada praesent congue erat at massa sed cursus turpis vitae
                                            tortor donec posuere vulputate arcu phasellus accumsan cursus velit
                                            vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia. ”</p>
                                    </div>
                                    <div class="testimonials-client">
                                        <div class="testimonials-client-img">
                                            <img src="{{asset('member/assets/images/testimonials-client-02.jpg')}}" class="img-responsive"
                                                alt="client-02">
                                        </div>
                                        <div class="testimonials-client-dtl">
                                            <h6 class="client-name">Smith Cesaro</h6>
                                            <div class="client-since">Platinum user from 2 years</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1140px; margin-right: 0px;">
                                <div class="item testimonials-block">
                                    <div class="testimonials-dtl text-center">
                                        <p>“ Curabitur ligula sapien tincidunt non euismod vitae posuere imperdiet leo
                                            maecenas malesuada praesent congue erat at massa sed cursus turpis vitae
                                            tortor donec posuere vulputate arcu phasellus accumsan cursus velit
                                            vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia. ”</p>
                                    </div>
                                    <div class="testimonials-client">
                                        <div class="testimonials-client-img">
                                            <img src="{{asset('member/assets/images/testimonials-client-01.jpg')}}" class="img-responsive"
                                                alt="client-01">
                                        </div>
                                        <div class="testimonials-client-dtl">
                                            <h6 class="client-name">Sarah Cesaro</h6>
                                            <div class="client-since">Platinum user from 3 years</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 1140px; margin-right: 0px;">
                                <div class="item testimonials-block">
                                    <div class="testimonials-dtl text-center">
                                        <p>“ Curabitur ligula sapien tincidunt non euismod vitae posuere imperdiet leo
                                            maecenas malesuada praesent congue erat at massa sed cursus turpis vitae
                                            tortor donec posuere vulputate arcu phasellus accumsan cursus velit
                                            vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                                            cubilia. ”</p>
                                    </div>
                                    <div class="testimonials-client">
                                        <div class="testimonials-client-img">
                                            <img src="{{asset('member/assets/images/testimonials-client-02.jpg')}}" class="img-responsive"
                                                alt="client-02">
                                        </div>
                                        <div class="testimonials-client-dtl">
                                            <h6 class="client-name">Smith Cesaro</h6>
                                            <div class="client-since">Platinum user from 2 years</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-controls">
                        <div class="owl-nav">
                            <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"
                                    aria-hidden="true"></i></div>
                            <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"
                                    aria-hidden="true"></i></div>
                        </div>
                        <div class="owl-dots" style="display: block;">
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot active"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end testimonials -->
    <!--  appointment -->
    <div id="appointment" class="appointment-main-block">
        <div class="container">
            <div class="row">
                <div class="col-md-4 hidden-sm">
                    <div class="appointment-img">
                        <img src="{{asset('member/assets/images/appointment.jpg')}}" class="img-responsive" alt="Appointment">
                    </div>
                </div>
                <div class="col-md-8 col-sm-12">
                    <div class="appointment-block">
                        <h3 class="section-heading">Get an Appointment</h3>
                        <p class="sub-heading">Etiam imperdiet imperdiet orci nunc nec neque phasellus leo dolor tempus
                            non auctor.</p>
                        <form id="appointment-form" class="appointment-form" method="post" action="appointment.php">
                            <h5 class="form-heading-title"><span class="form-heading-no">1.</span>Vehicle Information
                            </h5>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="dropdown">
                                        <button class="btn btn-dropdown dropdown-toggle" type="button" id="service-type"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="drp-name" data-bind="label">Choose Service Type</span>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="service-type">
                                            <li><a href="#">Basic Washing</a></li>
                                            <li><a href="#">Deluxe Washing</a></li>
                                            <li><a href="#">Ultimate Washing</a></li>
                                            <li><a href="#">Super Washing</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="dropdown">
                                        <button class="btn btn-dropdown dropdown-toggle" type="button" id="vehical-make"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <span class="drp-name" data-bind="label">Choose Vehicle Make</span>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="vehical-make">
                                            <li><a href="#">Honda</a></li>
                                            <li><a href="#">Hundai</a></li>
                                            <li><a href="#">BMW</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="vehical-model" name="vehical-model"
                                        placeholder="Enter Vehicle Model" required="">
                                </div>
                            </div>
                            <h5 class="form-heading-title"><span class="form-heading-no">2.</span>Appointment
                                Information</h5>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control date-pick" id="appointment-date"
                                        name="appointment-date" placeholder="Appointment Date" required="">
                                </div>
                                <div class="col-sm-6">
                                    <div class="dropdown">
                                        <button class="btn btn-dropdown dropdown-toggle" type="button"
                                            id="appointment-time" name="appointment-time" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="true">
                                            <span class="drp-name" data-bind="label">Appointments Time-frame</span>
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="appointment-time">
                                            <li><a href="#">Morning</a></li>
                                            <li><a href="#">Afternoon</a></li>
                                            <li><a href="#">Evening</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h5 class="form-heading-title"><span class="form-heading-no">3.</span>Contact Details</h5>
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Full Name" required="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Email Address" required="">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="phone" name="phone"
                                        placeholder="Phone Number" required="">
                                </div>
                                <div class="col-sm-12">
                                    <textarea id="message" name="message" rows="6" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default pull-right">Book Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end appointment -->
    <!--  latest news -->
    <div id="news" class="news-main-block">
        <div class="container">
            <div class="section text-center">
                <h3 class="section-heading">Latest News</h3>
                <p class="sub-heading">Phasellus ullamcorper ipsum rutrum nunc nunc nonummy metus vestibulum</p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="news-block">
                        <div class="news-img">
                            <a href="blog-single-left-sidebar.html"><img src="{{asset('member/assets/images/blog/blog-01.jpg')}}"
                                    class="img-responsive" alt="news-01">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="news-top">
                            <div class="news-date text-center">
                                <h4 class="news-day">21</h4>
                                <div class="news-month">March</div>
                            </div>
                            <div class="news-heading-block">
                                <a href="blog-single-left-sidebar.html">
                                    <h6 class="news-heading">Maecenas vestibulum mollis<br>
                                        diamster egestas</h6>
                                </a>
                                <ul class="news-tag">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Admin</a></li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> Comments: <a href="#">8</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-dtl">
                            <p>Lorem ipsum dolor sit amet consectetuer adipisci elit aenean commodo ligula eget dolor
                                aenean cum sociis natoque penatibus et magnis.</p>
                            <a href="blog-single-left-sidebar.html" class="read-more">Read More &gt;&gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="news-block">
                        <div class="news-img">
                            <a href="blog-single-left-sidebar.html"><img src="{{asset('member/assets/images/blog/blog-02.jpg')}}"
                                    class="img-responsive" alt="news-02">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="news-top">
                            <div class="news-date text-center">
                                <h4 class="news-day">25</h4>
                                <div class="news-month">March</div>
                            </div>
                            <div class="news-heading-block">
                                <a href="blog-single-left-sidebar.html">
                                    <h6 class="news-heading">Maecenas vestibulum mollis<br>
                                        diamster egestas</h6>
                                </a>
                                <ul class="news-tag">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Admin</a></li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> Comments: <a href="#">10</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-dtl">
                            <p>Lorem ipsum dolor sit amet consectetuer adipisci elit aenean commodo ligula eget dolor
                                aenean cum sociis natoque penatibus et magnis.</p>
                            <a href="blog-single-left-sidebar.html" class="read-more">Read More &gt;&gt;</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="news-block">
                        <div class="news-img">
                            <a href="blog-single-left-sidebar.html"><img src="{{asset('member/assets/images/blog/blog-03.jpg')}}"
                                    class="img-responsive" alt="news-03">
                                <div class="overlay-bg"></div>
                            </a>
                        </div>
                        <div class="news-top">
                            <div class="news-date text-center">
                                <h4 class="news-day">28</h4>
                                <div class="news-month">March</div>
                            </div>
                            <div class="news-heading-block">
                                <a href="blog-single-left-sidebar.html">
                                    <h6 class="news-heading">Maecenas vestibulum mollis<br>
                                        diamster egestas</h6>
                                </a>
                                <ul class="news-tag">
                                    <li><i class="fa fa-user" aria-hidden="true"></i> <a href="#">Admin</a></li>
                                    <li><i class="fa fa-comment" aria-hidden="true"></i> Comments: <a href="#">15</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="news-dtl">
                            <p>Lorem ipsum dolor sit amet consectetuer adipisci elit aenean commodo ligula eget dolor
                                aenean cum sociis natoque penatibus et magnis.</p>
                            <a href="blog-single-left-sidebar.html" class="read-more">Read More &gt;&gt;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  end latest news -->
    <!--  clients -->
    <div id="clients" class="clients-main-block">
        <div class="container">
            <div id="client-slider" class="client-slider owl-carousel owl-theme owl-loaded">

                <div class="owl-stage-outer">
                    <div class="owl-stage"
                        style="transform: translate3d(-2090px, 0px, 0px); transition: all 2s ease 0s; width: 3800px;">
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-03.png')}}" class="img-responsive" alt="client-3">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-04.png')}}" class="img-responsive" alt="client-4">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-05.png')}}" class="img-responsive" alt="client-5">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-06.png')}}" class="img-responsive" alt="client-6">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-03.png')}}" class="img-resposive" alt="client-7">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-04.png')}}" class="img-responsive" alt="client-8">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-01.png')}}" class="img-responsive" alt="client-1">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-02.png')}}" class="img-responsive" alt="client-2">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-03.png')}}" class="img-responsive" alt="client-3">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-04.png')}}" class="img-responsive" alt="client-4">
                            </div>
                        </div>
                        <div class="owl-item" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-05.png')}}" class="img-responsive" alt="client-5">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-06.png')}}" class="img-responsive" alt="client-6">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-03.png')}}" class="img-responsive" alt="client-7">
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-04.png')}}" class="img-responsive" alt="client-8">
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-01.png')}}" class="img-responsive" alt="client-1">
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-02.png')}}" class="img-responsive" alt="client-2">
                            </div>
                        </div>
                        <div class="owl-item cloned active" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-03.png')}}" class="img-responsive" alt="client-3">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-04.png')}}" class="img-responsive" alt="client-4">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-05.png')}}" class="img-responsive" alt="client-5">
                            </div>
                        </div>
                        <div class="owl-item cloned" style="width: 190px; margin-right: 0px;">
                            <div class="item client-img">
                                <img src="{{asset('member/assets/images/icons/client-06.png')}}" class="img-responsive" alt="client-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-controls">
                    <div class="owl-nav">
                        <div class="owl-prev" style="display: none;"><i class="fa fa-angle-left" aria-hidden="true"></i>
                        </div>
                        <div class="owl-next" style="display: none;"><i class="fa fa-angle-right"
                                aria-hidden="true"></i></div>
                    </div>
                    <div class="owl-dots" style="display: none;"></div>
                </div>
            </div>
        </div>
    </div>
    <!--  end clients -->
    <!--  map -->
    <div id="location" class="map-location"></div>
    <!--  end map -->
    <!--  footer -->
    <footer id="footer" class="footer-main-block">
        <div class="footer-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-about footer-widget">
                            <h5 class="footer-heading">About Us</h5>
                            <img src="{{asset('member/assets/images/logo-white.png')}}" class="img-responsive" alt="logo">
                            <p>Lorem ipsum dolor sit amet, consectetuer a dipiscing elit aenean commodo ligula eget in
                                dolor aenean massa cum sociis natoque penatibus et magnis dis parturie.</p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-services footer-widget">
                            <h5 class="footer-heading">Our Services</h5>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Vehicle Hand Wash
                                        Service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Headlight Lens
                                        Restoration Service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Scratch Removal
                                        Service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Tar Removal
                                        Service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Odor Elimination
                                        Service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Engine Cleaning
                                        Service</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Valet Car
                                        Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-opening footer-widget">
                            <h5 class="footer-heading">Opening Hours</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <div class="opening-day">Monday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">9:00 AM - 8:00 PM</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="opening-day">Tuesday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">9:00 AM - 8:00 PM</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="opening-day">Wednesday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">9:00 AM - 8:00 PM</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="opening-day">Thursday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">9:00 AM - 8:00 PM</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="opening-day">Friday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">9:00 AM - 8:00 PM</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="opening-day">Saturday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">9:00 AM - 1:00 PM</div>
                                </div>
                                <div class="col-xs-5">
                                    <div class="opening-day">Sunday</div>
                                </div>
                                <div class="col-xs-7">
                                    <div class="opening-time">Closed</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-subscribe footer-widget">
                            <h5 class="footer-heading">Subscribe Newsletter</h5>
                            <p>Lorem ipsum dolor sit amet consectetuer elit aenean commodo ligula eget dolo.</p>
                            <form id="subscribe-form" class="subscribe-form" novalidate="true">
                                <div class="form-group">
                                    <label class="sr-only">Your Email address</label>
                                    <input type="email" class="form-control" id="mc-email"
                                        placeholder="Enter email address" name="EMAIL">
                                </div>
                                <button type="submit" class="btn btn-default"><i class="fa fa-paper-plane"
                                        aria-hidden="true"></i></button>
                                <label for="mc-email"></label>
                            </form>
                            <div class="social-icon">
                                <span>Follow us on:</span>
                                <ul>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa fa-instagram"
                                                aria-hidden="true"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-pinterest"
                                                aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text text-center">
                            <p>© Copyrights 2017 <a href="index.html">Auto Plus</a>. | All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--  end footer -->
</body>
<!--body end -->
<script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;callback=initialize"></script>
</body>
<!--body end -->

<!-- Mirrored from mediacity.co.in/autoplus/car-wash/version1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 17 Sep 2022 13:28:06 GMT -->

</html>
@endsection
