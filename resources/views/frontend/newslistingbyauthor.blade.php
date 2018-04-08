<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>MeroAuto - Accelerate with us</title>

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

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/responsive.css') }}">

</head>

<body>

<!--=================================
  loading -->

<div id="loading">
    <div id="loading-center">
        <img src="{{ URL::asset('template/images/loader.gif') }}" alt="">
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
                            <li> <i class="fa fa-clock-o"></i> sun- fri 8.00 - 18.00. saturday CLOSED</li>
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
                                    <a href="index.html"><img id="logo_dark_img"
                                                              src="{{ URL::asset('template/images/Meroauto.png') }}"
                                                              alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="active">
                                    <a href="javascript:void(0)">Home</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Cars and Bikes <i
                                                class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down full width -->
                                    <div class="drop-down menu-bg grid-col-12">
                                        <!--grid row-->
                                        <div class="grid-row">
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href=""><h3>Car News</h3></a></li>
                                                    <li><a href="">Top News</a></li>
                                                    <li><a href="">Latest News</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href=""><h3>New Cars</h3></a></li>
                                                    <li><a href="">Find Cars</a></li>
                                                    <li><a href="">Compare Cars</a></li>
                                                    <li><a href="">Upcoming Cars</a></li>
                                                    <li><a href="">Cars Review</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="login.html"><h3>Used Cars</h3></a></li>
                                                    <li><a href="login.html">Buy Used Cars</a></li>
                                                    <li><a href="login.html">Sell Your Cars</a></li>
                                                    <li><a href="login.html">Car Valuation</a></li>
                                                </ul>
                                            </div>
                                            <!--grid column 3-->
                                            <div class="grid-col-3">
                                                <ul>
                                                    <li><a href="page-left-sidebar.html"><h3>Quick Search</h3></a></li>
                                                    <li><a href="page-left-sidebar.html">HatchBack Cars</a></li>
                                                    <li><a href="page-left-sidebar.html">Sedan Cars</a></li>
                                                    <li><a href="page-left-sidebar.html">Cars Below 20 Lakhs</a></li>
                                                    <li><a href="page-left-sidebar.html">Cars Above 20 Lakhs</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Banking and Insurance</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Infrastructure</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Feature</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Interview</a>
                                </li>
                                <li><a href="javascript:void(0)">More <i
                                                class="fa fa-angle-down fa-indicator"></i></a>
                                    <!-- drop down multilevel  -->
                                    <ul class="drop-down-multilevel">
                                        <li><a href="">About Us</a></li>
                                        <li><a href="">Economy</a></li>
                                        <li><a href="">Transportation</a></li>
                                        <li><a href="">Traffic</a></li>
                                        <li><a href="">Events</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </nav>
        <!-- menu end -->
    </div>
    <!-- <div class="container" style="margin-top: 5px; margin-bottom: 25px;">

     <img src="images/add_NIC.gif" width="100%">
    -->
    </div>
</header>

<!--=================================
 header -->


<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
@foreach($news as $news)
<div class="container">
        <div class="row text-center intro-title">
            <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                <h6 class="text-white">By {{ $news->user->name }} </h6>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                <ul class="page-breadcrumb">
                    <li><a href="/"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">{{ $news->user->name }}</a> <i class="fa fa-angle-double-right"></i></li>
                </ul>
            </div>
        </div>
    </div>
@endforeach   
</section>

<!--=================================
 inner-intro -->


<!--=================================
 blog  -->

<section class="latest-blog border masonry-main page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="masonry columns-3">
                    <div class="grid-sizer"></div>
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/06.jpg" alt="">
                                
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/01.jpg" alt="">
                                        <span>John Doe</span>
                                    </div>
                                    <div class="blog-meta pull-right">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-comment"></i><br /> 123</a></li>
                                            <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br /> ...</a>
                                                <div class="blog-social">
                                                    <ul class="list-style-none">
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
                                    <p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party Schlitz mustache keytar beard. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                h
                <div class="pagination-nav text-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--=================================
blog -->


<!--=================================
 footer -->

<footer class="footer bg-3 bg-overlay-black-90">
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
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="about-content">
                    <img class="img-responsive" id="logo-footer" src="images/logo-light.png" alt="">
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
                            <img class="img-responsive" src="images/car/01.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">Time to change your </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-responsive" src="images/car/02.jpg" alt="">
                        </div>
                        <div class="recent-post-info">
                            <a href="#">The best time to </a>
                            <span class="post-date"><i class="fa fa-calendar"></i>September 10, 2017</span>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="recent-post-image">
                            <img class="img-responsive" src="images/car/03.jpg" alt="">
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
        <hr />
        <div class="copyright">
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

<!-- isotope -->
<script type="text/javascript" src="{{ URL::asset('template/js/isotope/isotope.pkgd.min.js') }}"></script>

<!-- select -->
<script type="text/javascript" src="{{ URL::asset('template/js/select/jquery-select.js') }}"></script>

<!-- custom -->
<script type="text/javascript" src="{{ URL::asset('template/js/custom.js') }}"></script>

</body>
</html>