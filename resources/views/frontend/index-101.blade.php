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
<div class="col-md-12" style=" margin-top: -1em;">
    <div class="container">

        <div class="row">
            <div class="col-sm-8 col-md-6 col-lg-8" style="">
                <div class="thumbnail">
                    <a href="" target="_blank">
                        @if($featuredNews->image)
                            <img src="{{ \App\Models\Upload::findOrFail($featuredNews->image)->path() }}"
                                 alt="Image Not Found" style="width:750px; height:400px;">
                        @endif
                        <div class="caption">
                            <h1><a href=""><p style="line-height: 50px;">{{ $featuredNews->english_heading }}</p></a>
                            </h1>
                            <br>
                            <p>{{ $featuredNews->english_content }}</p>
                            <a class="button"> see more</a>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-4 col-md-6 col-lg-4" style="margin-top: 15px;">
                <div class="search-block">
                    <div class="row no-gutter">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="title text-white"><i class="fa fa-search"></i>कार खोज
                            </h3>
                            </br>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label>Select make</label>
                    <select class="form-control">
                        <option>select make</option>
                    </select>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label>Select body</label>
                    <select>
                        <option>select body</option>
                    </select>
                </div>
                </br></br></br></br>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label>Price</label>
                    <input class="form-control" type="number" name="minprice" placeholder="Min Price">
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <input style="margin-top: 29px;" class="form-control" type="number" name="minprice"
                           placeholder="Max Price">
                </div>
                <a class="button" href="#" style="margin-top: 20px;  margin-left:17px; width:90%">खोज्नुहोस </a>
            </div>

        </div>
    </div>
</div>

<div class="clearfix"></div>

<!--=================================
 custom block -->
<section class="latest-blog gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <span>मुख्य खबर पढ्नुस </span>
                    <h2>मुख्य खबर </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($mainNews as $news)
                <div class="col-lg-4 col-md-4">
                    <div class="blog-2">
                        <div class="blog-image">
                            <img class="img-responsive" src="{{ URL::asset('template/images/car/01.jpg') }}" alt="">
                            <div class="date">
                                <span>aug 17</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-admin-main">
                                <div class="blog-admin">
                                    <img class="img-responsive" src="{{ URL::asset('template/images/car/11.png') }}"
                                         alt="">
                                    <span>meroauto admin</span>
                                </div>
                                <div class="blog-meta pull-right">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-comment"></i><br/> 123</a></li>
                                        <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br/> ...</a>
                                            <div class="blog-social">
                                                <ul>
                                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-description text-center">
                                <a href="#"> {{ $news->english_heading }}</a>
                                <div class="separator"></div>
                                <p style="height: 80px; width: 100%;">{{ $news->nepali_heading }} </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-lg-4 col-md-4">
                <div class="search-block">
                    <div class="row no-gutter">
                        <div class="col-lg-12 col-md-12 text-center">
                            <h3 class="title text-whie">RECENT NEWS</h3>
                            </br>
                        </div>
                    </div>
                </div>

                <div class="scroll" style="overflow-y: scroll; height:400px;">
                    @foreach($recentNews as $recent)
                        <div class="recent-post" style="">
                            <div class="recent-post-image">
                                @if($recent->image)
                                    <img src="{{\App\Models\Upload::findOrFail($recent->image)->path()}}"
                                         alt="Image Not Found" width="50">
                                @endif
                            </div>
                            <div class="recent-post-info">
                                @if($recent->language == 'Both')
                                    <p>{{ $recent->nepali_heading }}</p>
                                @elseif($recent->language == 'English')
                                    <p>{{ $recent->english_heading }}</p>
                                @else
                                    <p>{{ $recent->nepali_heading }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <?php $i = 0 ?>
            @foreach($recentNews as $news)
                @if($news->belongingCategory->slug == 'auto-news')
                    <?php $i++ ?>
                    @if($i == 3)
                        <?php break; ?>
                    @endif
                    <div class="col-lg-4 col-md-4">
                        <div class="blog-2">
                            <div class="blog-image">
                                @if($news->image)
                                    <img class="img-responsive"
                                         src="{{\App\Models\Upload::findOrFail($news->image)->path()}}"
                                         alt="Image Not Found">
                                @endif
                                <div class="date">
                                    <span>{{ date('M d', strtotime($news->updated_at)) }}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-admin-main">
                                    <div class="blog-admin">
                                        <img class="img-responsive"
                                             src="{{ URL::asset('template/images/car/14.png') }}"
                                             alt="">
                                        <span>meroauto admin</span>
                                    </div>
                                    <div class="blog-meta pull-right">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-comment"></i><br/> 123</a></li>
                                            <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br/> ...</a>
                                                <div class="blog-social">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-description text-center">
                                    <a href="#">{{ $news->headline }}</a>
                                    <div class="separator"></div>
                                    <p>ट्राफिक समस्या समाधानका लागि सडक बनाउनु भनेको आगो निभाउन मट्टीतेल प्रयोग
                                        गर्नुजस्तै
                                        हो
                                        भन्ने बोगर्टा (कोलम्बिया) का पूर्वमेयर एनरीके पेनालोजाकोभनाइलाई नेपाली सडक
                                        व्यवस्थापनमा
                                        दाँज्न सकिन्छ </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>

<div class="latest-blog gray-bg page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="section-title">
                    <span>Top news  </span>
                    <h2>Banking and Insurance </h2>
                    <div class="separator"></div>
                </div>
            </div>
        </div>

        <section class="latest-blog gray-bg page-section-ptb">
            <div class="container">
                <div class="row">
                    <?php $i = 0 ?>
                    @foreach($recentNews as $news)
                        @if($news->belongingCategory->slug == 'banking-and-insurance')
                            <?php $i++ ?>
                            @if($i == 4)
                                <?php break; ?>
                            @endif
                            <div class="col-lg-4 col-md-4">
                                <div class="blog-2">
                                    <div class="blog-image">
                                        @if($news->image)
                                            <img class="img-responsive"
                                                 src="{{\App\Models\Upload::findOrFail($news->image)->path()}}"
                                                 alt="Image Not Found">
                                        @endif
                                        <div class="date">
                                            <span>{{ date('M d', strtotime($news->updated_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-admin-main">
                                            <div class="blog-admin">
                                                <img class="img-responsive"
                                                     src="{{ URL::asset('template/images/car/14.png') }}"
                                                     alt="">
                                                <span>meroauto admin</span>
                                            </div>
                                            <div class="blog-meta pull-right">
                                                <ul>
                                                    <li><a href="#"> <i class="fa fa-comment"></i><br/> 123</a></li>
                                                    <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br/>
                                                            ...</a>
                                                        <div class="blog-social">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog-description text-center">
                                            <a href="#">{{ $news->headline }}</a>
                                            <div class="separator"></div>
                                            <p>ट्राफिक समस्या समाधानका लागि सडक बनाउनु भनेको आगो निभाउन मट्टीतेल प्रयोग
                                                गर्नुजस्तै
                                                हो
                                                भन्ने बोगर्टा (कोलम्बिया) का पूर्वमेयर एनरीके पेनालोजाकोभनाइलाई नेपाली
                                                सडक
                                                व्यवस्थापनमा
                                                दाँज्न सकिन्छ </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        <section class="latest-blog gray-bg page-section-ptb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title">
                            <span>Read Tips and Interviews</span>
                            <h2>TIPS AND INTERVIEWS </h2>
                            <div class="separator"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $i = 0 ?>
                    @foreach($recentNews as $news)
                        @if($news->belongingCategory->slug == 'interview')
                            <?php $i++ ?>
                            @if($i == 2)
                                <?php break; ?>
                            @endif
                            <div class="col-lg-4 col-md-4">
                                <div class="blog-2">
                                    <div class="blog-image">
                                        @if($news->image)
                                            <img class="img-responsive"
                                                 src="{{\App\Models\Upload::findOrFail($news->image)->path()}}"
                                                 alt="Image Not Found">
                                        @endif
                                        <div class="date">
                                            <span>{{ date('M d', strtotime($news->updated_at)) }}</span>
                                        </div>
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-admin-main">
                                            <div class="blog-admin">
                                                <img class="img-responsive"
                                                     src="{{ URL::asset('template/images/car/14.png') }}"
                                                     alt="">
                                                <span>meroauto admin</span>
                                            </div>
                                            <div class="blog-meta pull-right">
                                                <ul>
                                                    <li><a href="#"> <i class="fa fa-comment"></i><br/> 123</a></li>
                                                    <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br/>
                                                            ...</a>
                                                        <div class="blog-social">
                                                            <ul>
                                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="blog-description text-center">
                                            <a href="#">{{ $news->headline }}</a>
                                            <div class="separator"></div>
                                            <p>ट्राफिक समस्या समाधानका लागि सडक बनाउनु भनेको आगो निभाउन मट्टीतेल प्रयोग
                                                गर्नुजस्तै
                                                हो
                                                भन्ने बोगर्टा (कोलम्बिया) का पूर्वमेयर एनरीके पेनालोजाकोभनाइलाई नेपाली
                                                सडक
                                                व्यवस्थापनमा
                                                दाँज्न सकिन्छ </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <div class="col-lg-4 col-md-4">
                        <div class="search-block">
                            <div class="row no-gutter">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <h3 class="title text-white">INTERVIEWS</h3>
                                    </br>
                                </div>
                            </div>
                        </div>
                        <div class="scroll" style="overflow-y: scroll; height:400px;">
                            @foreach($recentNews as $recent)
                                @if($recent->belongingCategory->slug == 'interview')
                                    <div class="recent-post" style="">
                                        <div class="recent-post-image">
                                            @if($recent->image)
                                                <img src="{{\App\Models\Upload::findOrFail($recent->image)->path()}}"
                                                     alt="Image Not Found" width="50">
                                            @endif
                                        </div>
                                        <div class="recent-post-info">
                                            @if($recent->language == 'Both')
                                                <p>{{ $recent->nepali_heading }}</p>
                                            @elseif($recent->language == 'English')
                                                <p>{{ $recent->english_heading }}</p>
                                            @else
                                                <p>{{ $recent->nepali_heading }}</p>
                                            @endif
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4" style="border-left:1px solid white;">
                        <div class="search-block">
                            <div class="row no-gutter">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <h3 class="title text-white">TIPS</h3>
                                    </br>
                                </div>
                            </div>
                        </div>

                        <div class="tips">
                            <li>ksfdgserng</li>
                            <li>ksfdgserng</li>
                            <li>ksfdgserng</li>
                            <li>ksfdgserng</li>
                        </div>
        </section>
        <div class="col-md-12" style="">
            <div class="container">

                <div class="row">
                    <div class="col-sm-4 col-md-5 col-lg-4" style="">
                        <div class="search-block">
                            <div class="row no-gutter">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <h3 class="title text-white"> Traffic </h3>

                                    <div class="col-lg-12 col-md-12 col-sm-12"
                                         style="overflow-y: scroll; height:300px;">
                                        @foreach($recentNews as $recent)
                                            @if($recent->belongingCategory->slug == 'traffic')
                                                <div class="recent-post" style="">
                                                    <div class="recent-post-image">
                                                        @if($recent->image)
                                                            <img src="{{\App\Models\Upload::findOrFail($recent->image)->path()}}"
                                                                 alt="Image Not Found" width="50">
                                                        @endif
                                                    </div>
                                                    <div class="recent-post-info">
                                                        @if($recent->language == 'Both')
                                                            <p>{{ $recent->nepali_heading }}</p>
                                                        @elseif($recent->language == 'English')
                                                            <p>{{ $recent->english_heading }}</p>
                                                        @else
                                                            <p>{{ $recent->nepali_heading }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4" style="border-left: 1px solid white;">
                        <div class="search-block">
                            <div class="row no-gutter">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <h3 class="title text-white" style="background-color: blue;"> Economy </h3>
                                    <div class="col-lg-12 col-md-12 col-sm-12"
                                         style="overflow-y: scroll; height:300px;">
                                        @foreach($recentNews as $recent)
                                            @if($recent->belongingCategory->slug == 'economic-news')
                                                <div class="recent-post" style="">
                                                    <div class="recent-post-image">
                                                        @if($recent->image)
                                                            <img src="{{\App\Models\Upload::findOrFail($recent->image)->path()}}"
                                                                 alt="Image Not Found" width="50">
                                                        @endif
                                                    </div>
                                                    <div class="recent-post-info">
                                                        @if($recent->language == 'Both')
                                                            <p>{{ $recent->nepali_heading }}</p>
                                                        @elseif($recent->language == 'English')
                                                            <p>{{ $recent->english_heading }}</p>
                                                        @else
                                                            <p>{{ $recent->nepali_heading }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-4" style="border-left: 1px solid white;">
                        <div class="search-block">
                            <div class="row no-gutter">
                                <div class="col-lg-12 col-md-12 text-center">
                                    <h3 class="title text-white"> Transportation </h3>
                                    <div class="col-lg-12 col-md-12 col-sm-12"
                                         style="overflow-y: scroll; height:300px;">
                                        @foreach($recentNews as $recent)
                                            @if($recent->belongingCategory->slug == 'transportation-news')
                                                <div class="recent-post" style="">
                                                    <div class="recent-post-image">
                                                        @if($recent->image)
                                                            <img src="{{\App\Models\Upload::findOrFail($recent->image)->path()}}"
                                                                 alt="Image Not Found" width="50">
                                                        @endif
                                                    </div>
                                                    <div class="recent-post-info">
                                                        @if($recent->language == 'Both')
                                                            <p>{{ $recent->nepali_heading }}</p>
                                                        @elseif($recent->language == 'English')
                                                            <p>{{ $recent->english_heading }}</p>
                                                        @else
                                                            <p>{{ $recent->nepali_heading }}</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=================================
     custom block -->


    <!--=================================
     recent-vehicle-->

    <section class="recent-vehicle white-bg page-section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <span>See images here</span>
                        <h2>Foto Feature </h2>
                        <div class="separator"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row no-gutter">
                <div class="col-lg-12 col-ld-12">
                    <div class="isotope-filters">
                        <!-- <button data-filter=".bmw">bmw</button>
                        <button data-filter=".mercedes">mercedes</button>
                        <button data-filter=".audi">audi</button>
                        <button data-filter=".hyundai">hyundai</button>  -->
                    </div>
                </div>
            </div>
            <div class="row no-gutter">
                <div class="col-lg-12 col-ld-12">
                    <div class="isotope popup-gallery column-4">
                        <div class="grid-item mercedes audi">
                            <div class="car-item-3">
                                <img class="img-responsive center-block" src="images/car/01.jpg" alt="">
                                <div class="car-popup">
                                    <a class="popup-img" href="images/car/01.jpg"><i class="fa fa-plus"></i></a>
                                </div>
                                <div class="car-overlay text-center">
                                    <a class="link" href="#">Acura Rsx</a>
                                    <span class="price">$32,698</span>
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
 recent-vehicle-->


<!--=================================
custom block -->

<section class="custom-block-5">
    <div class="section-title">
        <span>compare cars here</span>
        <h2>Compare Cars</h2>
        <div class="separator"></div>
    </div>
    <div class="container">
        <div class="col-lg-4 col-md-4">
            <label>Car1</label>
            <img src="images/car/13.png" height="100px">
            <select>
                <option>select make</option>
            </select>
            <select>
                <option>select model</option>
            </select>
            <select>
                <option>select variant</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-4">
            <label>Car2</label>
            <img src="images/car/19.jpg" height="100px">
            <select>
                <option>select make</option>
            </select>
            <select>
                <option>select model</option>
            </select>
            <select>
                <option>select varaint</option>
            </select>
        </div>
        <div class="col-lg-4 col-md-4">
            <label>Car3</label>
            <img src="images/car/14.png" height="100px">
            <select>
                <option>select make</option>
            </select>
            <select>
                <option>select model</option>
            </select>
            <select>
                <option>select varaint</option>
            </select>
        </div>
        <button type="button" class="btn btn-danger btn-lg" style="margin-left: 50%;">COMPARE CARS</button>
    </div>

</section>

<!--=================================
 custom block -->


<!--=================================
 latest news -->


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
                        <img class="img-responsive center-block" src="images/clients/01.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/02.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/03.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/04.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/05.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/06.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/07.png" alt="">
                    </li>
                    <li>
                        <img class="img-responsive center-block" src="images/clients/08.png" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <img class="img-responsive center-block" src="images/objects/08.png" alt="">
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
                    <img class="img-responsive" id="logo-footer" src="images/MeroAutoLogo.png" alt="">
                    <p>We provide everything you need to build an amazing dealership website developed especially for
                        car sellers dealers or auto motor retailers.</p>
                </div>
                <div class="address">
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span>mid-banesor, Kathmandu</span></li>
                        <li><i class="fa fa-phone"></i><span>(007) 123 456 7890</span></li>
                        <li><i class="fa fa-envelope-o"></i><span>support@meroauto.com</span></li>
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
                    <p>Keep up on our always evolving products features and technology. Enter your e-mail and subscribe
                        to our newsletter.</p>
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

<!-- bootstrap -->
<script type="text/javascript" src="{{ URL::asset('template/js/mega-menu/mega_menu.js') }}"></script>

<!-- select -->
<script type="text/javascript" src="{{ URL::asset('template/js/select/jquery-select.js') }}"></script>

<!-- custom -->
<script type="text/javascript" src="{{ URL::asset('template/js/custom.js') }}"></script>


</body>
</html>