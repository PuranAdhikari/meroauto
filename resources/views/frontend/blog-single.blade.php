<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template"/>
    <meta name="author" content="potenzaglobalsolutions.com"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>MeroAuto - Accelerate with us</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ URL::asset('template/images/favicon.ico') }}"/>

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/bootstrap.min.css') }}"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/flaticon.css') }}"/>

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/mega-menu/mega_menu.css') }}"/>

    <!-- mega menu -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/font-awesome.min.css') }}"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/owl-carousel/owl.carousel.css') }}"/>

    <!-- magnific-popup -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/magnific-popup/magnific-popup.css') }}"/>

    <!-- jquery-ui -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/jquery-ui.css') }}"/>

    <!-- revolution -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/revolution/css/settings.css') }}">

    <!-- main style -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/style.css') }}"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('template/css/responsive.css') }}"/>

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


<!--=================================
 mega menu -->

<header id="header" class="topbar-dark">
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-left text-left">
                        <ul class="list-inline">
                            <li><i class="fa fa-envelope-o"> </i> support@meroauto.com</li>
                            <li><i class="fa fa-clock-o"></i> Mon - fri 8.00 - 18.00. Saturday CLOSED</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="topbar-right text-right">
                        <ul class="list-inline">
                            <li><i class="fa fa-phone"></i> (977) 123 456 7890</li>
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
    <!-- <div style="padding-top:5px;" class = "container">
     <div class = "col-md-4">
       <img src="images/43.jpg" height="170px" width="250px">
     </div>

   </div> -->
    <!-- <div col-md-></div> -->

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
                                    <a href="http://demo.meroauto.com/"><img id="logo_dark_img"
                                                                             src="{{ URL::asset('template/images/Meroauto.png') }}"
                                                                             alt="logo"> </a>
                                </li>
                            </ul>
                            <!-- menu links -->
                            <ul class="menu-links">
                                <!-- active class -->
                                <li class="active">
                                    <a href="http://demo.meroauto.com/">Home</a>
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
</header>

<!--=================================
 header -->
<section @if($nepalinews->image)
         style="background-image: url('{{\App\Models\Upload::findOrFail($nepalinews->image)->path()}}');
        background-repeat: no-repeat;"
         @else
         style="background-color: black"
         @endif
         class="inner-intro">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-lg-6 col-md-6 text-left">
                <h1 style="background: black" class="text-white">{!! $nepalinews->nepali_heading !!} </h1>
            </div>
            <div class="col-lg-6 col-md-6 text-right">
                <ul class="page-breadcrumb">
                    <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                    <li><span>blog single 01</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
 banner -->


<!--=================================
 blog  -->

<section class="blog blog-single page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="blog-entry">
                    <div class="blog-entry-image  clearfix">
                        <div class="portfolio-item">
                            <img class="img-responsive" src="images/blog/02.jpg" alt="">
                        </div>
                    </div>
                    <div class="entry-title">
                        <a href="#">{!! $nepalinews->nepali_sub_heading !!}</a>
                    </div>
                    <div class="entry-meta">
                        <ul>
                        <li><a href="/news/author/{{$nepalinews->user->id}}"><i class=""></i>
                        {{$nepalinews->user->name}}
                        </a> /</li>
                            <li><a href="#"><i class="fa fa-comments-o"></i> 5 Comments</a> /</li>
                            <li><a href="#"><i class="fa fa-folder-open"></i> {!! $nepalinews->created_at !!}</a> /</li>
                            <li><a href="#"><i class="fa fa-heart-o"></i>10</a></li>
                        </ul>
                    </div>
                    <div class="entry-content">
                        <p> {!! $nepalinews->nepali_content !!} </p>
                        <!-- <blockquote>
                        <cite> – </cite>
                        </blockquote> -->

                    </div>
                    <div class="entry-share clearfix">
                        <div class="share pull-right"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                            <div class="blog-social">
                                <ul class="list-style-none">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-navigation">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="navigation-next">
                                <a href="#">
                                    <img class="img-responsive" src="images/bg/01.jpg" alt="">
                                    <div class="port-arrow">
                                        <i class="fa fa-angle-left"></i>
                                    </div>
                                    <span>BLOGPOST WITH IMAGE</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="navigation-previous pull-right text-right">
                                <a href="#">
                                    <img class="img-responsive" src="images/bg/06.jpg" alt="">
                                    <div class="port-arrow">
                                        <i class="fa fa-angle-right"></i>
                                    </div>
                                    <span>BLOGPOST WITH IMAGE</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-form">
                    <div class="gray-form row">

                        <!--
                        Disqus Comment form Section Start
                        -->

                        <div id="disqus_thread"></div>
                        <script>

                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                            var disqus_config = function () {
                                this.page.url = '{{ url()->current() }}';  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = '{{ $nepalinews->id }}'; // R1eplace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function () { // DON'T EDIT BELOW THIS LINE
                                var d = document, s = d.createElement('script');
                                s.src = 'https://meroauto-comment.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments
                                powered by Disqus.</a></noscript>


                        <!--
                        Disqus Comment form Section End
                        -->

                        <div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================ -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="blog-sidebar">
                    <div class="sidebar-widget">
                        <h6>Search here</h6>
                        <div class="widget-search">
                            <i class="fa fa-search"></i>
                            <input type="search" class="form-control placeholder" placeholder="Search....">
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6>categories</h6>
                        <div class="widget-link">
                            <ul>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> Test Drives </a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> Video Reviews </a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> Analysis & Features</a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> Pre-purchase Car Inspection </a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> Analysis & Features</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6>Recent Posts</h6>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img src="images/car/01.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Time to change your </a>
                                <span><i class="fa fa-calendar"></i> September 30, 2017</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img src="images/car/02.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">The best time to</a>
                                <span><i class="fa fa-calendar"></i> September 30, 2017</span>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="recent-post-image">
                                <img src="images/car/03.jpg" alt="">
                            </div>
                            <div class="recent-post-info">
                                <a href="#">Replacing a timing</a>
                                <span><i class="fa fa-calendar"></i> September 30, 2017</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6>Tags</h6>
                        <div class="tags">
                            <ul>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">CSS3</a></li>
                                <li><a href="#">Creative</a></li>
                                <li><a href="#">Multipurpose</a></li>
                                <li><a href="#">Bootstrap</a></li>
                                <li><a href="#">HTML5</a></li>
                                <li><a href="#">Wordpress</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-widget">
                        <h6>archives</h6>
                        <div class="widget-link">
                            <ul>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> June <span
                                                class="pull-right">12</span></a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> January <span
                                                class="pull-right">28</span></a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> March <span
                                                class="pull-right">08</span></a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> November <span
                                                class="pull-right">04</span></a></li>
                                <li><a href="#"> <i class="fa fa-angle-right"></i> Desember <span
                                                class="pull-right">13</span></a></li>
                            </ul>
                        </div>
                    </div>
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
                    <p>We provide everything you need to build an amazing dealership website developed especially for
                        car sellers dealers or auto motor retailers.</p>
                </div>
                <div class="address">
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span>220E Front St. Burlington NC 27215</span></li>
                        <li><i class="fa fa-phone"></i><span>(007) 123 456 7890</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>support@website.com</span></li>
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
                    <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe
                        to our newsletter.</p>
                    <form class="news-letter">
                        <input type="email" placeholder="Enter your Email" class="form-control placeholder">
                        <a class="button red" href="#">Subscribe</a>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="copyright">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="text-left">
                        <p>©Copyright 2017 Car Dealer Developed by <a href="http://www.potenzaglobalsolutions.com/"
                                                                      target="_blank">Potenzaglobalsolutions</a></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <ul class="list-inline text-right">
                        <li><a href="#">privacy policy </a> |</li>
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
    <span><img src="images/car.png" alt=""></span>
</div>

<!--=================================
back to top -->

<!--=================================
 jquery -->

<!-- jquery  -->
<!-- jquery  -->
<script type="text/javascript" src="{{ URL::asset('template/js/jquery.min.js') }}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{ URL::asset('template/js/bootstrap.min.js') }}"></script>

<!-- bootstrap -->
<script type="text/javascript" src="{{ URL::asset('template/js/mega-menu/mega_menu.js') }}"></script>

<!-- select -->
<script type="text/javascript" src="{{ URL::asset('template/js/select/jquery-select.js') }}"></script>

<!-- custom -->
<script type="text/javascript" src="{{ URL::asset('template/js/custom.js') }}"></script>

</body>
</html>
