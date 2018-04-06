<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template</title>

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
                            <li> <i class="fa fa-envelope-o"> </i> support@website.com</li>
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
                                    <a href="index.html"><img id="logo_img" src="images/logo-light.png" alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
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
                                        <li><a href="index.blade.php">Home 10</a></li>
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
                                <li class="active"><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
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
                                        <li class="active"><a href="javascript:void(0)">Masonry  <i class="fa fa-angle-right fa-indicator"></i> </a>
                                            <!-- drop down second level -->
                                            <ul class="drop-down-multilevel">
                                                <li><a href="blog-masonry-2-collums.html"> 2 column </a> </li>
                                                <li class="active"><a href="blog-masonry-3-collums.html"> 3 column </a> </li>
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
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                <h1 class="text-white">blog masonry </h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>blog masonry 3 collums </span> </li>
                </ul>
            </div>
        </div>
    </div>
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
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
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
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/07.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/02.jpg" alt="">
                                        <span>Paul Flavius</span>
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
                                    <a href="#">The A Z Of Motivation</a>
                                    <div class="separator"></div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quod totam necessitatibus tempora natus quasi, vero modi delectus eius consectetur! Quasi quas repellendus, assumenda odio natus animi! Porro, dolor, facere!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/08.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/03.jpg" alt="">
                                        <span>Sara Lisbon</span>
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
                                    <p>Perspiciatis listicle PBR, Schlitz mustache keytar beard quod totam necessitatibus tempora natus quasi, vero modi art party Schlitz mustache keytar beard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/09.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/04.jpg" alt="">
                                        <span>Alice Williams</span>
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
                                    <a href="#">The A Z Of Motivation</a>
                                    <div class="separator"></div>
                                    <p>Quasi nam aliquid voluptatem dolorem, ratione nobis at. Aliquam suscipit Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam iure aliquid ea veniam nam officia! Reiciendis cupiditate neque, alias necessitatibus debitis odio architecto aliquam maxime, aspernatur, eligendi nesciunt quae? Voluptate. itaque, eaque iure at possimus enim non modi autem vel quam placeat.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/10.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/05.jpg" alt="">
                                        <span>Anne Smith</span>
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
                                    <a href="#">Does Your Life Lack Meaning</a>
                                    <div class="separator"></div>
                                    <p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party Schlitz mustache keytar beard. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/11.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/06.jpg" alt="">
                                        <span>Mellissa Doe</span>
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
                                    <a href="#">The A Z Of Motivation</a>
                                    <div class="separator"></div>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda possimus officia, sint sed. Quia, aspernatur necessitatibus adipisci perferendis ullam soluta dolores cumque quidem, esse tenetur provident sequi voluptate nihil. Quia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/12.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/07.jpg" alt="">
                                        <span>Paul Flavius</span>
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
                                    <p>Quia, aspernatur necessitatibus adipisci perferendis ullam soluta dolores cumque quidem, esse tenetur provident sequi voluptate nihil. Quia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/13.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/08.jpg" alt="">
                                        <span>Sara Lisbon</span>
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
                                    <a href="#">The A Z Of Motivation</a>
                                    <div class="separator"></div>
                                    <p>Beatae, aut at sit perferendis doloribus dicta omnis illum cum laboriosam impedit maiores, quisquam architecto dolorem temporibus est?</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================ -->
                    <div class="masonry-item clearfix">
                        <div class="blog-2">
                            <div class="blog-image">
                                <img class="img-responsive" src="images/blog/14.jpg" alt="">
                                <div class="date">
                                    <span>aug 17</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive" src="images/team/09.jpg" alt="">
                                        <span>Lara holding</span>
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
                                    <a href="#">Does Your Life Lack Meaning</a>
                                    <div class="separator"></div>
                                    <p>Slow-carb listicle PBR, Schlitz mustache keytar beard art party Schlitz mustache keytar beard.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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