<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>MeroAuto / Home</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('template/images/favicon.ico') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/bootstrap.min.css') }}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/flaticon.css') }}" />

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/mega-menu/mega_menu.css') }}" />

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/font-awesome.min.css') }}" />

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/owl-carousel/owl.carousel.css') }}" />

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/magnific-popup/magnific-popup.css') }}" />

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/jquery-ui.css') }}" />

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/revolution/css/settings.css') }}">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/responsive.css') }}" />

</head>

<body>

<!--=================================
  loading -->

<div id="loading">
    <div id="loading-center">
        <img src="{{ URL::asset('template/images/loader3.gif') }}" alt="">
    </div>
</div>

<!--=================================
  loading -->


<!--=================================
 header -->

<header id="header" class="defualt">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-left text-left">
                        <ul class="list-inline">
                            <li> <i class="fa fa-envelope-o"> </i> support@meroauto.com</li>
                            <li> <i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00. Sunday CLOSED</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-right text-right">
                        <ul class="list-inline">
                            <li> <i class="fa fa-phone"></i> (007) 123 456 7890</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--=================================
     mega menu -->

    <div class="menu">
        <!-- menu start -->
        <nav id="menu" class="mega-menu">
            <!-- menu list items container -->
            <section class="menu-list-items">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <!-- menu logo -->
                            <ul class="menu-logo">
                                <li>
                                    <a href="index.html"><img id="logo_img" src="{{ URL::asset('template/images/MeroAutoLogo.png') }}" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="active"><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                        <li><a href="index-8.html">Home 8</a></li>
                                        <li><a href="index-9.html">Home 9</a></li>
                                        <li class="active"><a href="index.blade.php">Home 10</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down full width -->
                                    <div class="drop-down menu-bg grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="about-01.html">About 01</a></li>
                                                    <li><a href="about-02.html">About 02</a></li>
                                                    <li><a href="service-01.html">service 01</a></li>
                                                    <li><a href="service-02.html">service 02</a></li>
                                                    <li><a href="career.html">career</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="team-01.html">team 01</a></li>
                                                    <li><a href="team-02.html">team 02</a></li>
                                                    <li><a href="contact-01.html">contact 01</a></li>
                                                    <li><a href="contact-02.html">contact 02</a></li>
                                                    <li><a href="faq.html">faq</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="login.html">login</a></li>
                                                    <li><a href="register.html">register</a></li>
                                                    <li><a href="error-404.html">error 404</a></li>
                                                    <li><a href="coming-soon.html">coming soon</a></li>
                                                    <li><a href="typography.html">typography</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="page-left-sidebar.html">page left sidebar </a></li>
                                                    <li><a href="page-right-sidebar.html">page right sidebar </a></li>
                                                    <li><a href="page-both-sidebar.html">page both sidebar </a></li>
                                                    <li><a href="terms-and-conditions.html">terms and conditions </a></li>
                                                    <li><a href="privacy-policy.html">privacy policy </a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                                <li><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="javascript:void(0)">blog classic <i class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-left-sidebar.blade.php">left sidebar</a></li>
                                                <li><a href="blog-right-sidebar.blade.php">right sidebar</a></li>
                                                <li><a href="blog-fullwidth.blade.php">fullwidth</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">Masonry  <i class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-masonry-2-collums.html"> 2 column </a> </li>
                                                <li><a href="blog-masonry-3-collums.html"> 3 column </a> </li>
                                                <li><a href="blog-masonry-4-collums.html"> 4 column </a> </li>
                                                <li><a href="blog-masonry-left-sidebar.html">left sidebar</a></li>
                                                <li><a href="blog-masonry-right-sidebar.html">right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:void(0)">blog single <i class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-single-01.html">blog single 01 </a> </li>
                                                <li><a href="blog-single-02.html">blog single 02 </a> </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Car listing  <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="listing-01.html">listing 01</a></li>
                                        <li><a href="listing-02.html">listing 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Car details  <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="details-01.html">details 01</a></li>
                                        <li><a href="details-02.html">details 02</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)"> Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel right-menu">
                                        <li><a href="contact-01.html">contact 01</a></li>
                                        <li><a href="contact-02.html">contact 02</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="search-top"> <a class="search-btn not_click" href="javascript:void(0);">Search Button</a>
                                        <div class="search-box not-click">
                                            <div class="row">
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="selected-box">
                                                        <select class="selectpicker">
                                                            <option>Make </option>
                                                            <option>BMW</option>
                                                            <option>Honda </option>
                                                            <option>Hyundai </option>
                                                            <option>Nissan </option>
                                                            <option>Mercedes Benz </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="selected-box">
                                                        <select class="selectpicker">
                                                            <option>Model</option>
                                                            <option>3-Series</option>
                                                            <option>Carrera</option>
                                                            <option>GT-R</option>
                                                            <option>Cayenne</option>
                                                            <option>Mazda6</option>
                                                            <option>Macan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="selected-box">
                                                        <select class="selectpicker">
                                                            <option>Year</option>
                                                            <option>2010</option>
                                                            <option>2011</option>
                                                            <option>2012</option>
                                                            <option>2013</option>
                                                            <option>2014</option>
                                                            <option>2015</option>
                                                            <option>2016</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="selected-box">
                                                        <select class="selectpicker">
                                                            <option>Body style</option>
                                                            <option>2dr Car</option>
                                                            <option>4dr Car</option>
                                                            <option>Convertible</option>
                                                            <option>Sedan</option>
                                                            <option>Sports Utility</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="selected-box">
                                                        <select class="selectpicker">
                                                            <option>Vehicle Status</option>
                                                            <option>Condition</option>
                                                            <option>All Conditions</option>
                                                            <option>Condition</option>
                                                            <option>Brand New</option>
                                                            <option>Slightly Used</option>
                                                            <option>Used</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2 col-md-2">
                                                    <div class="text-center">
                                                        <button class="button red" type="button">Search</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
</header>

<!--=================================
 header -->


<!--=================================
 rev slider -->

<section class="video-slider">
    <div id="video-background" class="bg-overlay-black" style="width: 100%;"  data-vide-bg="mp4: {{ URL::asset('template/video/video.mp4') }}, webm: {{ URL::asset('template/video/video.webm') }}, ogv: {{ URL::asset('template/video/video.ogv') }}, poster: {{ URL::asset('template/video/video.mp4') }}" data-vide-options="position: 0% 50%">
    </div><!-- END REVOLUTION SLIDER -->
</section>

<!--=================================
 rev slider -->


<!--=================================
 super-car -->

<section class="custom-block-3 search-here white-bg page-section-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="custom-block-content">
                    <div class="title">
                        <h3>about Car dealer</h3>
                    </div>
                    <div class="content">
                        <h2 class="text-red">10</h2>
                        <strong>Car Dealer is Most enticing, creative, modern and multipurpose auto dealer Premium WordPress Theme!  </strong>
                        <p>Car Dealer is the best premium WordPress Theme. We provide everything you need to build an <b> Amazing dealership website </b> developed especially for car sellers, dealers or auto motor retailers. </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-box-3">
                            <div class="icon">
                                <i class="glyph-icon flaticon-beetle"></i>
                            </div>
                            <div class="content">
                                <h6>All brands </h6>
                                <p>Mirum est notare </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-box-3">
                            <div class="icon">
                                <i class="glyph-icon flaticon-interface-1"></i>
                            </div>
                            <div class="content">
                                <h6>Free Support</h6>
                                <p>Qui sequitur mutationem </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-box-3">
                            <div class="icon">
                                <i class="glyph-icon flaticon-key"></i>
                            </div>
                            <div class="content">
                                <h6>Dealership</h6>
                                <p>Quam littera gothica</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-box-3">
                            <div class="icon">
                                <i class="glyph-icon flaticon-wallet"></i>
                            </div>
                            <div class="content">
                                <h6>Affordable</h6>
                                <p>Parum claram dynamicus </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="search-block">
                    <div class="row no-gutter">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="title text-white"> <i class="fa fa-search"></i> SEARCH HERE </h3>
                        </div>
                    </div>
                    <div class="row search-top-2">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Select make</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>Make </option>
                                    <option>BMW</option>
                                    <option>Honda </option>
                                    <option>Hyundai </option>
                                    <option>Nissan </option>
                                    <option>Mercedes Benz </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Select model</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>Model</option>
                                    <option>3-Series</option>
                                    <option>Carrera</option>
                                    <option>GT-R</option>
                                    <option>Cayenne</option>
                                    <option>Mazda6</option>
                                    <option>Macan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Select yar</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>Year</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                    <option>2015</option>
                                    <option>2016</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Select body style</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>Body style</option>
                                    <option>2dr Car</option>
                                    <option>4dr Car</option>
                                    <option>Convertible</option>
                                    <option>Sedan</option>
                                    <option>Sports Utility</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Select vehicle status</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>Vehicle Status</option>
                                    <option>Condition</option>
                                    <option>All Conditions</option>
                                    <option>Condition</option>
                                    <option>Brand New</option>
                                    <option>Slightly Used</option>
                                    <option>Used</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <span>Select Mileage</span>
                            <div class="selected-box">
                                <select class="selectpicker">
                                    <option>1</option>
                                    <option>102</option>
                                    <option>13</option>
                                    <option>1540</option>
                                    <option>15</option>
                                    <option>20</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="price-slide">
                                <div class="price">
                                    <label for="amount">Price Range</label>
                                    <input type="text" id="amount" class="amount" value="$50 - $300" />
                                    <div id="slider-range"></div>
                                    <a class="button" href="#">Search the Vehicle</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 super-car -->



<!--=================================
 custom block -->

<section class="custom-block-5 bg-1">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-md-offset-6 col-md-6  bg-overlay-black-90">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-left">
                            <span class="text-white">Read our latest news</span>
                            <h2 class="text-white">latest news </h2>
                            <div class="separator"></div>
                            <p class="text-white">Incredible Premium HTML5 template with powerful customization ion tools that help you build your stunning vehicles dealer website. Especially for car sellers, dealers or auto motor retailers.</p>
                        </div>
                    </div>
                </div>
                <div class="row custom-block-5-content">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="glyph-icon flaticon-beetle text-white"></i>
                            </div>
                            <div class="content">
                                <h5 class="text-white">All brands</h5>
                                <p class="text-white">Galley simply dummy text lorem Ipsum is of the printin k a of type and </p>
                            </div>
                        </div>
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="glyph-icon flaticon-key text-white"></i>
                            </div>
                            <div class="content">
                                <h5 class="text-white">DEALERSHIP</h5>
                                <p class="text-white">Printin k a of type and lorem Ipsum is simply dummy text of the galley</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="glyph-icon flaticon-interface-1 text-white"></i>
                            </div>
                            <div class="content">
                                <h5 class="text-white">FREE SUPPORT </h5>
                                <p class="text-white">Text of the printin lorem ipsum the is simply k a type text and galley of </p>
                            </div>
                        </div>
                        <div class="feature-box-1">
                            <div class="icon">
                                <i class="glyph-icon flaticon-wallet text-white"></i>
                            </div>
                            <div class="content">
                                <h5 class="text-white">AFFORDABLE </h5>
                                <p class="text-white">The printin k a galley Lorem Ipsum is type and simply dummy text of </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 custom block -->



<!--=================================
 recent-vehicle-->

<section class="recent-vehicle white-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <span>Check out our recent cars</span>
                    <h2>RECENT VEHICLE</h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row no-gutter">
            <div class="col-lg-12 col-ld-12">
                <div class="isotope-filters">
                    <button data-filter="" class="active">All</button>
                    <button data-filter=".bmw">bmw</button>
                    <button data-filter=".mercedes">mercedes</button>
                    <button data-filter=".audi">audi</button>
                    <button data-filter=".hyundai">hyundai</button>
                </div>
            </div>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-12 col-ld-12">
                <div class="isotope popup-gallery column-4">
                    <div class="grid-item mercedes audi">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/01.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/01.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Acura Rsx</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item bmw audi">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/02.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/02.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Lexus GS 450h</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item mercedes hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/03.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/03.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">GTA 5 Lowriders DLC</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item bmw audi">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/04.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/04.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Toyota avalon hybrid </a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item mercedes hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/05.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/05.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Hyundai santa fe sport </a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item bmw audi hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/06.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/06.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Lexus is f</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item bmw hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/07.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/07.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Hyundai santa fe</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item mercedes hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/01.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/01.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Acura Rsx</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item mercedes hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/02.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/02.jpg') }}images/car/02.jpg"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Lexus GS 450h</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item bmw audi">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/03.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/03.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">GTA 5 Lowriders DLC</a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item mercedes hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/04.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/04.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#"> Toyota avalon hybrid </a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item bmw audi hyundai">
                        <div class="car-item-3">
                            <img class="img-responsive center-block" src="{{ URL::asset('template/images/car/05.jpg') }}" alt="">
                            <div class="car-popup">
                                <a class="popup-img" href="{{ URL::asset('template/images/car/05.jpg') }}"><i class="fa fa-plus"></i></a>
                            </div>
                            <div class="car-overlay text-center">
                                <a class="link" href="#">Hyundai santa fe sport </a>
                                <span class="price">$32,698</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 recent-vehicle-->



<!--=================================
custom block -->

<section class="custom-block-5 bg-9">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-6 col-md-6 bg-overlay-black-90">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title text-left">
                            <span class="text-white">Build an amazing dealership website </span>
                            <h2 class="text-white">ABOUT CARDEALER  </h2>
                            <div class="separator"></div>
                            <p class="text-white">Car Dealer is the best HTML5 template. We provide everything you need to build an Amazing dealership website developed especially for car sellers, dealers or auto motor retailers.</p>
                        </div>
                    </div>
                </div>
                <div class="row counter counter-style-2">
                    <div class="col-lg-6 col-md-6 col-sm-6 item">
                        <div class="counter-block text-left">
                            <div class="separator"></div>
                            <div class="info">
                                <h6 class="text-white">Vehicles in Stock</h6>
                                <i class="glyph-icon flaticon-beetle"></i>
                                <b class="timer text-white" data-to="561" data-speed="10000">561</b>
                            </div>
                        </div>
                        <div class="counter-block text-left">
                            <div class="separator"></div>
                            <div class="info">
                                <h6 class="text-white">Dealer Reviews</h6>
                                <i class="glyph-icon flaticon-interface"></i>
                                <b class="timer text-white" data-to="856" data-speed="10000">856</b>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 item">
                        <div class="counter-block text-left">
                            <div class="separator"></div>
                            <div class="info">
                                <h6 class="text-white">Happy Customer</h6>
                                <i class="glyph-icon flaticon-circle"></i>
                                <b class="timer text-white" data-to="789" data-speed="10000">789</b>
                            </div>
                        </div>
                        <div class="counter-block text-left">
                            <div class="separator"></div>
                            <div class="info">
                                <h6 class="text-white">Awards</h6>
                                <i class="glyph-icon flaticon-cup"></i>
                                <b class="timer text-white" data-to="356" data-speed="10000">356</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 custom block -->


<!--=================================
 latest news -->

<section class="latest-blog gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <span>Read our latest news</span>
                    <h2>latest news </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="blog-2">
                    <div class="blog-image">
                        <img class="img-responsive" src="{{ URL::asset('template/images/blog/05.jpg') }}" alt="">
                        <div class="date">
                            <span>aug 17</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-admin-main">
                            <div class="blog-admin">
                                <img class="img-responsive" src="{{ URL::asset('template/images/team/01.jpg') }}" alt="">
                                <span>John Doe</span>
                            </div>
                            <div class="blog-meta pull-right">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-comment"></i><br /> 123</a></li>
                                    <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br /> ...</a>
                                        <div class="blog-social">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="#">Does Your Life Lack Meaning</a>
                            <div class="separator"></div>
                            <p>You will begin to realize why this exercise Pattern is called the Dickens with reference to the ghost</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog-2">
                    <div class="blog-image">
                        <img class="img-responsive" src="{{ URL::asset('template/images/blog/06.jpg') }}" alt="">
                        <div class="date">
                            <span>aug 17</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-admin-main">
                            <div class="blog-admin">
                                <img class="img-responsive" src="{{ URL::asset('template/images/team/02.jpg') }}" alt="">
                                <span>Paul Flavius</span>
                            </div>
                            <div class="blog-meta pull-right">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-comment"></i><br /> 123</a></li>
                                    <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br /> ...</a>
                                        <div class="blog-social">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="#">The A Z Of Motivation</a>
                            <div class="separator"></div>
                            <p>Exercise is called you will begin to Pattern realize why this the Dickens Pattern with reference to ghost</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="blog-2">
                    <div class="blog-image">
                        <img class="img-responsive" src="{{ URL::asset('template/images/blog/07.jpg') }}" alt="">
                        <div class="date">
                            <span>aug 17</span>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-admin-main">
                            <div class="blog-admin">
                                <img class="img-responsive" src="{{ URL::asset('template/images/team/03.jpg') }}" alt="">
                                <span>Sara Lisbon</span>
                            </div>
                            <div class="blog-meta pull-right">
                                <ul>
                                    <li><a href="#"> <i class="fa fa-comment"></i><br /> 123</a></li>
                                    <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br /> ...</a>
                                        <div class="blog-social">
                                            <ul>
                                                <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                                                <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="blog-description text-center">
                            <a href="#">Motivation In Life</a>
                            <div class="separator"></div>
                            <p>Dickens Pattern you will begin to realize why this Dickens exercise is the with reference to the ghost</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
 latest news -->


<!--=================================
clients -->

<section class="our-clients page-section-pt">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <span>Wold wide clients </span>
                    <h2>OUR CLIENTS </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <ul class="list-style-none">
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/01.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/02.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/03.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/04.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/05.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/06.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/07.png') }}" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="{{ URL::asset('template/images/clients/08.png') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img class="img-responsive center-block" src="{{ URL::asset('template/images/objects/08.png') }}" alt="">
    </div>
</section>

<!--=================================
clients -->



<!--=================================
 footer -->

<footer class="footer footer-black bg-2 bg-overlay-black-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <ul>
                        <li><a class="facebook" href="#">facebook <i class="fa fa-facebook"></i> </a></li>
                        <li><a class="twitter" href="#">twitter <i class="fa fa-twitter"></i> </a></li>
                        <li><a class="pinterest" href="#">pinterest <i class="fa fa-pinterest-p"></i> </a></li>
                        <li><a class="dribbble" href="#">dribbble <i class="fa fa-dribbble"></i> </a></li>
                        <li><a class="google-plus" href="#">google plus <i class="fa fa-google-plus"></i> </a></li>
                        <li><a class="behance" href="#">behance <i class="fa fa-behance"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row page-section-pb">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="about-content">
                    <img class="img-responsive" id="logo-footer" src="{{ URL::asset('template/images/logo-light.png') }}" alt="">
                    <p>We provide everything you need to build an amazing dealership website developed especially for car sellers dealers or auto motor retailers.</p>
                </div>
                <div class="address">
                    <ul>
                        <li> <i class="fa fa-map-marker"></i><span>220E Front St. Burlington NC 27215</span> </li>
                        <li> <i class="fa fa-phone"></i><span>(007) 123 456 7890</span> </li>
                        <li> <i class="fa fa-envelope-o"></i><span>support@website.com</span> </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="usefull-link">
                    <h6 class="text-white">Useful Links</h6>
                    <ul>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Change Oil and Filter</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Brake Pads Replacement</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Timing Belt Replacement</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Pre-purchase Car Inspection</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Starter Replacement</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="recent-post-block">
                    <h6 class="text-white">recent posts </h6>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-responsive" src="{{ URL::asset('template/images/car/01.jpg') }}" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Time to change your </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-responsive" src="{{ URL::asset('template/images/car/02.jpg') }}" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">The best time to </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-responsive" src="{{ URL::asset('template/images/car/03.jpg') }}" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Replacing a timing </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="news-letter">
                    <h6 class="text-white">subscribe Our Newsletter </h6>
                    <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe to our newsletter.</p>
                    <form class="news-letter">
                        <input type="email" placeholder="Enter your Email" class="form-control placeholder">
                        <a class="button red" href="#">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="text-left">
                        <p>©Copyright 2017 Car Dealer Developed by <a href="http://www.potenzaglobalsolutions.com/" target="_blank">Potenzaglobalsolutions</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="list-inline text-right">
                        <li><a href="#">privacy policy </a> | </li>
                        <li><a href="#">terms and conditions </a> |</li>
                        <li><a href="#">contact us </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--=================================
footer -->

<!--=================================
back to top -->

<div class="car-top">
    <span><img src="{{ URL::asset('template/images/car.png') }}" alt=""></span>
</div>

<!--=================================
back to top -->

<!--=================================
 jquery -->

<!-- jquery  -->
<script type="text/javascript" src="{{ URL::asset('template/js/jquery.min.js') }}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{ URL::asset('template/js/bootstrap.min.js') }}"></script>

<!-- mega-menu -->
<script type="text/javascript" src="{{ URL::asset('template/js/mega-menu/mega_menu.js') }}"></script>

<!-- appear -->
<script type="text/javascript" src="{{ URL::asset('template/js/jquery.appear.js') }}"></script>

<!-- counter -->
<script type="text/javascript" src="{{ URL::asset('template/js/counter/jquery.countTo.js') }}"></script>

<!-- isotope -->
<script type="text/javascript" src="{{ URL::asset('template/js/isotope/isotope.pkgd.min.js') }}"></script>

<!-- owl-carousel -->
<script type="text/javascript" src="{{ URL::asset('template/js/owl-carousel/owl.carousel.min.js') }}"></script>

<!-- jquery-ui -->
<script type="text/javascript" src="{{ URL::asset('template/js/jquery-ui.js') }}"></script>

<!-- select -->
<script type="text/javascript" src="{{ URL::asset('template/js/select/jquery-select.js') }}"></script>

<!-- magnific popup -->
<script type="text/javascript" src="{{ URL::asset('template/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>

<!--  video -->
<script type="text/javascript" src="{{ URL::asset('template/js/video/jquery.vide.js') }}"></script>

<!-- custom -->
<script type="text/javascript" src="{{ URL::asset('template/js/custom.js') }}"></script>

</body>
</html> 