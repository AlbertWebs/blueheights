<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Eventer - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="../css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">
<link href="../css2-1?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{asset('theme/assets/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/owl.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/animate.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/nice-select.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/elpath.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/color.css')}}" id="jssDefault" rel="stylesheet">
<link href="{{asset('theme/assets/css/rtl.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/style.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/banner.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/mission.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/about.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/gallery.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/clients.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/conference.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/testimonial.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/cta.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/module-css/news.css')}}" rel="stylesheet">
<link href="{{asset('theme/assets/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="b" class="letters-loading">
                                B
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                            <span data-text-preloader="u" class="letters-loading">
                                u
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader=" " class="letters-loading">
                              &nbsp;
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                H
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="g" class="letters-loading">
                                g
                            </span>
                            <span data-text-preloader="h" class="letters-loading">
                                h
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="s" class="letters-loading">
                                s
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!-- main header -->
        <header class="main-header header-style-two">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="auto-container">
                    <div class="outer-box">
                        <figure class="logo-box"><a href="{{url('/')}}"><img src="{{asset('theme/assets/images/menulogo.png')}}" alt=""></a></figure>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current dropdown"><a href="#">Home</a>

                                        </li>
                                        <li class="dropdown"><a href="#">About</a>

                                        </li>

                                        <li class="dropdown"><a href="#">Portfolio</a>

                                        </li>
                                        <li><a href="contact.html">Services</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box mr_40"><a href="{{url('/')}}" class="theme-btn btn-one">Purchase Ticket</a></div>
                            <ul class="social-links">
                                <li><a href="{{url('/')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{url('/')}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{url('/')}}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="auto-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><a href="{{url('/')}}"><img src="{{asset('theme/assets/images/menulogo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="menu-right-content">
                            <div class="btn-box mr_40"><a href="{{url('/')}}" class="theme-btn btn-one">Purchase Ticket</a></div>
                            <ul class="social-links">
                                <li><a href="{{url('/')}}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{url('/')}}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{url('/')}}"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->


        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="{{url('/')}}"><img src="{{asset('theme/assets/images/menulogo.png')}}" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Cosy Nook Aparment, Suit 8, 3rd Floor, Brookside Drive,
                            Off Muguga green Drive.
                        </li>
                        <li><a href="tel:+254 723 280 2602">0723 280 260</a></li>
                        <li><a href="mailto:pmwangi@blueheightsltd.com">pmwangi@blueheightsltd.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="{{url('/')}}"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="{{url('/')}}"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="{{url('/')}}"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="{{url('/')}}"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="{{url('/')}}"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- banner-style-two -->
        <section class="banner-style-two">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none owl-nav-none">
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/banner/banner-1.jpg')}}');"></div>
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url('{{asset('theme/assets/images/shape/shape-23.png')}}');"></div>
                        <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-24.png')}}');"></div>
                        <div class="pattern-3" style="background-image: url('{{asset('theme/assets/images/shape/shape-25.png')}}');"></div>
                        <div class="pattern-4" style="background-image: url('{{asset('theme/assets/images/shape/shape-26.png')}}');"></div>
                        {{-- <div class="pattern-5" style="background-image: url('{{asset('theme/assets/images/shape/shape-27.png')}}');"></div> --}}
                        <div class="pattern-6" style="background-image: url('{{asset('theme/assets/images/shape/shape-28.png')}}');"></div>
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="date"><img src="{{asset('theme/assets/images/icons/icon-1.png')}}" alt="">September 21th-24th,</span>
                            <h2>Digital Business <span>Conferences</span></h2>
                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                            <div class="btn-box">
                                <a href="{{url('/')}}" class="theme-btn btn-one">Purchase Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item p_relative">
                    <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/banner/banner-2.jpg')}}');"></div>
                    <div class="pattern-layer">
                        <div class="pattern-1" style="background-image: url('{{asset('theme/assets/images/shape/shape-23.png')}}');"></div>
                        <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-24.png')}}');"></div>
                        <div class="pattern-3" style="background-image: url('{{asset('theme/assets/images/shape/shape-25.png')}}');"></div>
                        <div class="pattern-4" style="background-image: url('{{asset('theme/assets/images/shape/shape-26.png')}}');"></div>
                        <div class="pattern-6" style="background-image: url('{{asset('theme/assets/images/shape/shape-28.png')}}');"></div>
                    </div>
                    <div class="auto-container">
                        <div class="content-box">
                            <span class="date"><img src="{{asset('theme/assets/images/icons/icon-1.png')}}" alt="">September 21th-24th,</span>
                            <h2>Digital Business <span>Conferences</span></h2>
                            <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                            <div class="btn-box">
                                <a href="{{url('/')}}" class="theme-btn btn-one">Purchase Ticket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-style-two end -->

    <!-- about-style-two -->
    <section class="about-style-two pt_120 pb_120">
        <div class="pattern-11"></div>
        <div class="pattern-layer">
            <div class="pattern-1"></div>
            {{-- <div class="pattern-2" style="background-image: url('{{asset('theme/assets/images/shape/shape-33.png')}}');"></div> --}}
        </div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title mb_20">
                            <span class="sub-title"># About The Events</span>
                            <h3>Premium Event Management Services for Corporate Clients by The Blue Heights Events Ltd</h3>
                        </div>
                        <div class="text-boxs">
                            <p>
                                The Blue Heights Events Ltd is an event management company that was
                                established to provide events management services to various corporate
                                clients and enable them achieve memorable events and effectively promote
                                their brand.<br><br>
                                We specialize in providing premium services to corporate clients both the
                                private and public sectors of the economy. We are committed to providing
                                innovative solutions spanning; Design of exhibition floor plans, provision of
                                quality shell scheme structures, media coverage and comprehensive
                                provision of all conferencing equipment that gurantees our clientele
                                satisfaction.
                                <br><br>
                            </p>
                            <a href="{{url('/')}}" class="theme-btn btn-one">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box">
                        <figure class="image image-1"><img src="{{asset('theme/assets/images/resource/about-4.jpg')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->

     <!-- gallery-section -->
    <section  class="gallery-section p_120" >
        <div class="pattern-111"></div>
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12 title-column">
                    <div class="title-inner">
                        <div class="sec-title">
                            <span class="sub-title"># What We Do</span>
                            <h3>Comprehensive Corporate Event <br> Management  Solutions</h3>
                        </div>
                        <br>
                        <p>With Passion, Knowledge, Experience , Creative & Inspiration.</p>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 gallery-block">
                    <div class="gallery-block-one ml_40">
                        <div class="inner-box">
                            <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/gallery/gallery-2.jpg')}}'); background-size:cover;"></div>
                            <h2><a href="{{url('/')}}">Corporate Events</a></h2>
                            <div class="link"><a href="{{url('/')}}"><i class="icon-25"></i></a></div>
                        </div>
                    </div>
                </div>

                {{--  --}}
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/gallery/gallery-3.jpg')}}');"></div>
                            <h2><a href="{{url('/')}}">Exhibition Booths</a></h2>
                            <div class="link"><a href="{{url('/')}}"><i class="icon-25"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/gallery/gallery-4.jpg')}}');"></div>
                            <h2><a href="{{url('/')}}">Events Logistics</a></h2>
                            <div class="link"><a href="{{url('/')}}"><i class="icon-25"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 gallery-block">
                    <div class="gallery-block-one">
                        <div class="inner-box">
                            <div class="bg-layer" style="background-image: url('{{asset('theme/assets/images/gallery/gallery-5.jpg')}}');"></div>
                            <h2><a href="{{url('/')}}">Branding</a></h2>
                            <div class="link"><a href="{{url('/')}}"><i class="icon-25"></i></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <center>
            <a href="{{url('/')}}" class="theme-btn btn-one">Explore More</a>
        </center>

    </section>
    <!-- gallery-section end -->




        <!-- clients-style-two -->
        <section class="clients-style-two pt_110 pb_140">
            {{-- <div class="pattern-layer" style="background-image: url('{{asset('theme/assets/images/shape/shape-34.png')}}');"></div> --}}
            <div class="auto-container">
                <ul class="clients-logo-list">
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/united-states-agency-text-label.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/159-1590925_siemens-logo-png-transparent-png-removebg-preview.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/prdlogo.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/11-GAK-Logo.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/STRYDE-Logo-Firesm.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/1597603258579-removebg-preview.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/1541781582-97-davis-shirtliff-removebg-preview.png')}}" alt=""></a></li>
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/png-transparent-dsv-transport-logistics-cargo-business-business-blue-text-trademark-removebg-preview.png')}}" alt=""></a></li>
                </ul>
                {{-- <ul class="clients-logo-list">
                    <li><a href="{{url('/')}}"><img style="width:140px" src="{{asset('theme/assets/images/aatf.png')}}" alt=""></a></li>

                </ul> --}}
            </div>
        </section>
        <!-- clients-style-two end -->

        <!-- conference-style-two -->
        <section class="conference-style-two pt_140 pb_140">
            <div class="bg-layer" style="background-image: url(assets/images/background/conference-bg.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-35.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-36.png);"></div>
            </div>
            <div class="auto-container">
                <div class="title-inner mb_60">
                    <div class="sec-title mb_20 light">
                        <span class="sub-title"># About The Events</span>
                        <h2>Advancing Craft Connect <br>People</h2>
                    </div>
                    <p>With our passion, knowledge, creative flair and inspiration, we are <br>dedicated in helping you to achieve your dream wedding day.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 conference-block">
                        <div class="conference-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('theme/assets/images/resource/conference-1.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <h3><a href="{{url('/')}}">Top Conference: Clients in Control Building Demand-Driven IT Systems</a></h3>
                                    <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                    <div class="link"><a href="{{url('/')}}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 conference-block">
                        <div class="conference-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('theme/assets/images/resource/conference-2.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <h3><a href="{{url('/')}}">4 Workshops: Modern Technology Training Courses with Best Leaders</a></h3>
                                    <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                    <div class="link"><a href="{{url('/')}}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 conference-block">
                        <div class="conference-block-one">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('theme/assets/images/resource/conference-3.jpg')}}" alt=""></figure>
                                <div class="lower-content">
                                    <h3><a href="{{url('/')}}">Worldwide Speakers Talks: Mind-blowing Talks from Leading IT Minds</a></h3>
                                    <p>Nulla in mattis arcu ultrices suspendisse sed amet pulvinarert aliquam. Condimentum congue morbi risus platea. Ante elittg dolor augue tellus turpis tortor</p>
                                    <div class="link"><a href="{{url('/')}}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- conference-style-two end -->


        <!-- testimonial-section -->
        <section class="testimonial-section pt_110 pb_140">
            <div class="pattern-layer">
                <div class="pattern-1 float-bob-x" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="title-inner mb_60">
                    <div class="sec-title mb_20">
                        <span class="sub-title"># Testimonial</span>
                        <h2>What our clients are saying</h2>
                    </div>
                    {{-- <p>With our passion, knowledge, creative flair and inspiration, we are dedicated in helping.</p> --}}
                </div>
                <div class="testimonial-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('theme/assets/images/resource/testimonial-1.jpg')}}" alt=""></figure>
                                <div class="icon-box"><i class="icon-8"></i></div>
                            </div>
                            <div class="text-box">
                                <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut, mattis pretium neque. Vestibulum finibus eleifend tellus vel convallis. Aliquam faucibus quis lacus quis sodales. Nulla id suscipit sem.</p>
                                <h3>Wade Warren</h3>
                                <span class="designation">Designation</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="{{asset('theme/assets/images/resource/testimonial-2.jpg')}}" alt=""></figure>
                                <div class="icon-box"><i class="icon-8"></i></div>
                            </div>
                            <div class="text-box">
                                <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut, mattis pretium neque. Vestibulum finibus eleifend tellus vel convallis. Aliquam faucibus quis lacus quis sodales. Nulla id suscipit sem.</p>
                                <h3>Floyd Miles</h3>
                                <span class="designation">Web Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- cta-section -->
        <section class="cta-section centred pt_140 pb_140">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url('{{('theme/assets/images/background/cta-bg.jpg')}}');"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-35.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-36.png);"></div>
            </div>
            <div class="auto-container">
                <div class="inner-box">
                    <span># Ticket</span>
                    <h2>Having an Event in the near <br>Future</h2>
                    <a href="{{url('/')}}" class="theme-btn btn-one">Engage Us Now</a>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


        <!-- news-section -->
        <section class="news-section pt_140 pb_110">
            <div class="pattern-layer">
                <div class="pattern-1 rotate-me" style="background-image: url(assets/images/shape/shape-20.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-21.png);"></div>
            </div>
            <div class="auto-container">
                <div class="title-inner mb_60 centred">
                    <div class="sec-title centred mb_20">
                        <span class="sub-title"># Blogs</span>
                        <h2>Latest Blog & News Event</h2>
                    </div>
                    <p>With our passion, knowledge, creative flair and inspiration, <br>we are dedicated in helping.</p>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{asset('theme/assets/images/news/news-1.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="info-list mb_15">
                                        <li>April 25, 2022</li>
                                        <li>|</li>
                                        <li><a href="blog-details.html">by admin</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">You should acquire tickets to attend the event.</a></h3>
                                    <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut.</p>
                                    <div class="link"><a href="blog-details.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{asset('theme/assets/images/news/news-2.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="info-list mb_15">
                                        <li>April 25, 2022</li>
                                        <li>|</li>
                                        <li><a href="blog-details.html">by admin</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Brooklyn Beta was the most important conferen best tristique</a></h3>
                                    <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut.</p>
                                    <div class="link"><a href="blog-details.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-details.html"><img src="{{asset('theme/assets/images/news/news-3.jpg')}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <ul class="info-list mb_15">
                                        <li>April 25, 2022</li>
                                        <li>|</li>
                                        <li><a href="blog-details.html">by admin</a></li>
                                    </ul>
                                    <h3><a href="blog-details.html">Worldwide Speakers Talks: Mind-blowing Talks from Leading </a></h3>
                                    <p>Pellentesque quis scelerisque justo. Aenean mauris justo, sagittis ornare felis ut.</p>
                                    <div class="link"><a href="blog-details.html">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.419707195239!2d36.7899799!3d-1.2591332!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17b847b45ecd%3A0x41aae9ed994e225a!2sBlue%20Heights%20Events%20Limited!5e0!3m2!1sen!2ske!4v1722137315559!5m2!1sen!2ske" width="600" height="535" frameborder="0" style="border:0; width: 100%" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- main-footer -->
        <footer class="main-footer style-two">
            <div class="bg-layer" style="background-image: url('{{('theme/assets/images/menulogo.png')}}');"></div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner">
                        <figure class="footer-logo"><a href="{{url('/')}}"><img src="{{('theme/assets/images/menulogo.png')}}" alt=""></a></figure>
                        <div class="copyright"><p>&copy; 2024 <a style="color:#219fcf" href="{{url('/')}}">Blueheights Events Limited</a> All Rights Reserved</p></div>
                        <ul class="social-links">
                            <li><a href="{{url('/')}}">facebook</a></li>
                            <li><a href="{{url('/')}}">twitter</a></li>
                            <li><a href="{{url('/')}}">linkedin</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

    </div>


    <!-- jequery plugins -->
    <script src="{{asset('theme/assets/js/jquery.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/owl.js')}}"></script>
    <script src="{{asset('theme/assets/js/wow.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('theme/assets/js/appear.js')}}"></script>
    <script src="{{asset('theme/assets/js/isotope.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/parallax-scroll.js')}}"></script>
    <script src="{{asset('theme/assets/js/scrollbar.js')}}"></script>

    <!-- main-js -->
    <script src="{{asset('theme/assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
