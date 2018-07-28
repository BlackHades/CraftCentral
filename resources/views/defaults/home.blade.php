<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>{{$title}} | Craft Central</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <base href="{{asset('/')}}">
    <link rel="stylesheet" type="text/css" href="css/animate.css" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <!--<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="css/style2.css" />
    <link rel="stylesheet" type="text/css" href="css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome-all.min.css" />
    <link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.0.8/web-fonts-with-css/css/fontawesome.min.css" />
    <!-- <link rel="stylesheet" href="css/bootstrap-3.3.7-dist/css/bootstrap.min.css" /> -->
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="images/header/favicon.ico" />
    <style>
        .checked {
            color: orange;
        }

        #number{font-size:13px;}

        .mybtn{float:left;
            width:100%;
            height:50px;
            -webkit-border-radius:15px;
            -moz-border-radius:15px;
            border-radius:15px;
            background:#F63;
            color:#ffffff;

            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
        }

        .jp_job_post_right_cont .rating-default span{background:#8A8A8A;}

        .pager_wrapper{
            margin-top:80px;
            text-align:center;
        }
        .pagination > li > a{
            color:#000000;
            background:#ffffff;
            font-size:12px;
            text-transform:uppercase;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
            padding-right: 19px;
            width:30px;
            height:30px;
            line-height:18px;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
            text-align:center;
            margin-right:10px;
        }
        .pagination > li:first-child > a{
            width:60px;
            height:30px;
            line-height:17px;
            text-align:center;
            font-size:12px;
            color:#000000;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
            border:1px solid #e2e2e2;
            margin-right:20px;
            background:#ffffff;
            padding-left: 17px;
        }
        .pagination > li:last-child > a{
            width:60px;
            height:30px;
            line-height:17px;
            text-align:center;
            font-size:12px;
            -webkit-border-radius:10px;
            -moz-border-radius:10px;
            border-radius:10px;
            border:1px solid #e2e2e2;
            margin-left:10px;
            background:#ffffff;
            padding-left: 14px;
        }
        .pagination > li:first-child:hover > a{
            background:#23c0e9;
            border:1px solid #23c0e9;
        }
        .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
            z-index: 2;
            color: #fff;
            border:1px solid #23c0e9;
            background-color: #23c0e9;
            border-color: none;
            -webkit-transition: all 0.5s;
            -o-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -moz-transition: all 0.5s;
            transition: all 0.5s;
        }
    </style>

</head>

<body>
<!-- preloader Start -->
{{--<div id="preloader">--}}
    {{--<div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">--}}
    {{--</div>--}}
{{--</div>--}}
<!-- Top Scroll End -->
<!-- Header Wrapper Start -->
<div class="jp_top_header_img_wrapper">
    <div class="jp_slide_img_overlay"></div>
    <div class="gc_main_menu_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                    <div class="gc_header_wrapper">
                        <div class="gc_logo">
                            <a href="{{route('home')}}"><img src="images/header/2.png" alt="Craft Central Logo" title="Craft Central" class="img-responsive"></a>
                            <!-- <a href="index.html"><span style="font-size:24px; font-weight:600;">CraftCentral</span></a> -->

                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-10 col-sm-12 col-xs-12 center_responsive">
                    <div class="header-area hidden-menu-bar stick" id="sticker">
                        <!-- mainmenu start -->
                        <div class="mainmenu">
                            <ul class="float_left">
                                <li class="parent"><a href="{{route('home')}}">HOME</a></li>
                                <li class="gc_main_navigation parent"><a href="{{route('works')}}" class="gc_main_navigation">HOW IT WORKS</a></li>
                                <li class="gc_main_navigation parent"><a href="{{route('about')}}" class="gc_main_navigation">ABOUT US</a></li>
                                <li class="gc_main_navigation parent" style="margin-right:40px; border-right:1px solid #DCDCDC;"><a href="{{route('contact')}}" class="gc_main_navigation">CONTACT</a></li>
                                <li class="has-mega gc_main_navigation">
                                    <a href="#" class="gc_main_navigation">&nbsp; | &nbsp; CUSTOMER &nbsp;<i class="fa fa-angle-down"></i></a>
                                    <!-- mega menu start -->
                                    <ul>
                                        <li class="parent"><a href="{{route('customer.login')}}">Login</a></li>
                                        <li class="parent"><a href="{{route('customer.register')}}">Signup</a></li>

                                    </ul>
                                </li>

                                <li class="has-mega gc_main_navigation">
                                    <a href="#" class="gc_main_navigation">&nbsp; | &nbsp;  SERVICE PROVIDER &nbsp;<i class="fa fa-angle-down"></i></a>
                                    <!-- mega menu start -->
                                    <ul>
                                        <li class="parent"><a href="{{route('business.login')}}">Login</a></li>
                                        <li class="parent"><a href="{{route('business.register')}}">Register Service</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- mainmenu end -->
                        <!-- mobile menu area start -->
                        <header class="mobail_menu">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="gc_logo">
                                            <!-- <a href="index-2.html"><img src="images/header/logo.png" alt="Logo" title="Grace Church"></a> -->
                                            <!--  <a href="index.html"><span style="font-size:24px; font-weight:600;">CraftCentral</span></a> -->
                                            <a href="index.php"><img src="images/header/2.png" alt="Logo" title="Craft Central" class="img-responsive"></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="cd-dropdown-wrapper">
                                            <a class="house_toggle" href="#0">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#ffffff"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#ffffff"/></g></g></svg>
                                            </a>
                                            <nav class="cd-dropdown">
                                                <h2>
                                                    <!--<a href="#">Job<span>Pro</span></a> -->
                                                    <a href="index.php"><img src="images/header/2.png" alt="Craft Central Logo" title="Craft Central" class="img-responsive"></a>

                                                </h2>
                                                <a href="#0" class="cd-close">Close</a>
                                                <ul class="cd-dropdown-content">


                                                    <li>
                                                        <a href="{{route('home')}}">HOME</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('works')}}">HOW IT WORKS</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('about')}}">ABOUT US</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{route('contact')}}">CONTACT</a>
                                                    </li>


                                                    <li class="has-children">
                                                        <a href="#">CUSTOMER</a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#">Back</a></li>
                                                            <li>
                                                                <a href="{{route('customer.login')}}">Login</a>
                                                            </li>
                                                            <!-- .has-children -->

                                                            <li>
                                                                <a href="{{route('customer.register')}}">Signup</a>
                                                            </li>

                                                        </ul>
                                                        <!-- .cd-secondary-dropdown -->
                                                    </li>

                                                    <li class="has-children">
                                                        <a href="#">SERVICE PROVIDER</a>

                                                        <ul class="cd-secondary-dropdown is-hidden">
                                                            <li class="go-back"><a href="#">Back</a></li>
                                                            <li>
                                                                <a href="{{route('business.login')}}">Login</a>
                                                            </li>
                                                            <!-- .has-children -->
                                                            <li>
                                                                <a href="{{route('business.register')}}">Register Service </a>
                                                            </li>

                                                        </ul>
                                                        <!-- .cd-secondary-dropdown -->
                                                    </li>

                                                </ul>
                                                <!-- .cd-dropdown-content -->
                                            </nav>
                                            <!-- .cd-dropdown -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- .cd-dropdown-wrapper -->
                        </header>
                    </div>
                </div>
                <!-- mobile menu area end -->
            </div>
        </div>
    </div>
    <div class="jp_banner_heading_cont_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_job_heading_wrapper">
                        <div class="jp_job_heading">
                            <!--  <h1><span>Over 2,000</span> Registered Services</h1>
                              <p>Find & Rate Service Providers</p> -->
                            <h1>Find & Rate <span> Service Providers </span></h1>
                        </div>
                    </div>
                </div>
                @include('partials._message')
                @include('partials._search',['route' => route('home')])
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_banner_main_jobs_wrapper">
                        <div class="jp_banner_main_jobs">
                            <ul>
                                <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                @foreach($cat as $c)
                                    <li><a href="{{route('home',['category' => $c->id])}}">{{$c->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="jp_banner_jobs_categories_wrapper">
        <div class="container">
            @foreach($cat as $c)
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-pencil-alt"></i>
                        <h3><a href="{{route('home',['category' => $c->id])}}">{{$c->name}}</a></h3>
                        <!-- <p>(240 jobs)</p> -->
                    </div>
                </div>
            @endforeach
            <div class="jp_top_jobs_category_wrapper">
                <div class="jp_top_jobs_category">
                    <i class="fa fa-th-large"></i>
                    <h3><a href="{{route('home')}}">All Categories</a></h3>
                    <!-- <p>(2000+ jobs)</p> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Header Wrapper End -->
<!-- jp tittle slider Wrapper Start -->
<div class="jp_tittle_slider_main_wrapper" style="float:left; width:100%; margin-top:30px;">
    <div class="container">
        <div class="jp_tittle_name_wrapper">
            <div class="jp_tittle_name">
                <h3>Trending</h3>
                <h4>Services</h4>

                <p>

                    <br>

                </p>

            </div>
        </div>
        <div class="jp_tittle_slider_wrapper">
            <div class="jp_tittle_slider_content_wrapper">
                <div class="owl-carousel owl-theme">
                    <?php $count = (int) count($list)/3?>
                        @for($i = 0; $i < $count; $i = $i+3)
                            <?php $rows = $list[$i]?>
                            <div class="item">
                                <div class="jp_tittle_slides_one">
                                    <div class="jp_tittle_side_img_wrapper">
                                        <img src="{{$rows->logo}}" alt="tittle_img" />
                                    </div>
                                    <div class="jp_tittle_side_cont_wrapper">
                                        <div class="col-lg-12">
                                            <div class="progress">
                                                <div class="progress-bar
                                                                                        @if($rows->overall == 100 || $rows->overall > 80)
                                                        progress-bar-success
@elseif($rows->overall == 80 || $rows->overall > 60)
                                                        progress-bar-info
@elseif($rows->overall == 60 || $rows->overall > 40)
                                                        progress-bar-warning
@elseif($rows->overall == 40 || $rows->overall > 0)
                                                        progress-bar-danger
@endif progress-bar-striped" role="progressbar" aria-valuenow="{{$rows->overall}}"
                                                     aria-valuemin="{{$rows->overall}}" aria-valuemax="100" style="width:{{$rows->overall}}%">
                                                    <span>{{$rows->overall}}%</span>
                                                </div>
                                            </div>
                                        </div>


                                        <a href="{{route('customer.listing.view',['listing' => $rows->id])}}"><h4>{{$rows->name}}</h4></a>
                                        <p>{{$rows->category->name}}</p>
                                    </div>
                                </div>
                                <?php $rows = $list[$i+1]?>
                                <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                    <div class="jp_tittle_side_img_wrapper">
                                        <img src="{{$rows->logo}}" alt="tittle_img" />
                                    </div>
                                    <div class="jp_tittle_side_cont_wrapper">
                                        <div class="col-lg-12">
                                            <div class="progress">
                                                <div class="progress-bar
                                                                                        @if($rows->overall == 100 || $rows->overall > 80)
                                                        progress-bar-success
@elseif($rows->overall == 80 || $rows->overall > 60)
                                                        progress-bar-info
@elseif($rows->overall == 60 || $rows->overall > 40)
                                                        progress-bar-warning
@elseif($rows->overall == 40 || $rows->overall > 0)
                                                        progress-bar-danger
@endif progress-bar-striped" role="progressbar" aria-valuenow="{{$rows->overall}}"
                                                     aria-valuemin="{{$rows->overall}}" aria-valuemax="100" style="width:{{$rows->overall}}%">
                                                    <span>{{$rows->overall}}%</span>
                                                </div>
                                            </div>
                                        </div>


                                        <a href="{{route('customer.listing.view',['listing' => $rows->id])}}"><h4>{{$rows->name}}</h4></a>
                                        <p>{{$rows->category->name}}</p>
                                    </div>



                                </div>
                                <?php $rows = $list[$i+2]?>
                                <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                    <div class="jp_tittle_side_img_wrapper">
                                        <img src="{{$rows->logo}}" alt="tittle_img" />
                                    </div>
                                    <div class="jp_tittle_side_cont_wrapper">
                                        <div class="col-lg-12">
                                            <div class="progress">
                                                <div class="progress-bar
                                                                                        @if($rows->overall == 100 || $rows->overall > 80)
                                                        progress-bar-success
@elseif($rows->overall == 80 || $rows->overall > 60)
                                                        progress-bar-info
@elseif($rows->overall == 60 || $rows->overall > 40)
                                                        progress-bar-warning
@elseif($rows->overall == 40 || $rows->overall > 0)
                                                        progress-bar-danger
@endif progress-bar-striped" role="progressbar" aria-valuenow="{{$rows->overall}}"
                                                     aria-valuemin="{{$rows->overall}}" aria-valuemax="100" style="width:{{$rows->overall}}%">
                                                    <span>{{$rows->overall}}%</span>
                                                </div>
                                            </div>
                                        </div>


                                        <a href="{{route('customer.listing.view',['listing' => $rows->id])}}"><h4>{{$rows->name}}</h4></a>
                                        <p>{{$rows->category->name}}</p>
                                    </div>



                                </div>
                            </div>
                        @endfor
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp tittle slider Wrapper End -->
<!-- jp first sidebar Wrapper Start -->
<div class="jp_first_sidebar_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> <!--MAin WIdth change for body --------------------->
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cc_featured_product_main_wrapper">
                            <div class="jp_hiring_heading_wrapper jp_job_post_heading_wrapper">
                                <h2>Recommemded Services For You</h2>
                            </div>
                            <!-- <ul class="nav nav-tabs" role="tablist">
                                 <li role="presentation" class="active"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Featured</a></li>
                                 <li role="presentation"><a href="#hot" aria-controls="hot" role="tab" data-toggle="tab">Remotely</a></li>
                                 <li role="presentation"><a href="#trand" aria-controls="trand" role="tab" data-toggle="tab">Part Time</a></li>
                                 <li role="presentation"><a href="#best" aria-controls="best" role="tab" data-toggle="tab">Full Time </a></li>
                             </ul>-->
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="best">
                                <div class="ss_featured_products">
                                    <div class="row">
                                        @foreach($search as $rows)
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                <div class="jp_job_post_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{$rows->logo}}" alt="Business Logo" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="progress">
                                                                            <div class="progress-bar
                                                                                        @if($rows->overall == 100 || $rows->overall > 80)
                                                                                    progress-bar-success
@elseif($rows->overall == 80 || $rows->overall > 60)
                                                                                    progress-bar-info
@elseif($rows->overall == 60 || $rows->overall > 40)
                                                                                    progress-bar-warning
@elseif($rows->overall == 40 || $rows->overall > 0)
                                                                                    progress-bar-danger
@endif progress-bar-striped" role="progressbar" aria-valuenow="{{$rows->overall}}"
                                                                                 aria-valuemin="{{$rows->overall}}" aria-valuemax="100" style="width:{{$rows->overall}}%">
                                                                                <span>{{$rows->overall}}%</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <h4>{{$rows->name}}</h4>
                                                                <p>{{$rows->category->name}}</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper">
                                                                <ul>
                                                                    <li>  </li>
                                                                    <li><a href="{{route('customer.listing.view',['listing' => $rows->id])}}">Check Reviews</a></li>
                                                                    <li><a href="{{route('customer.listing.view',['listing' => $rows->id])}}">More details</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <!--   <p>
                                                       Rating: &nbsp;
                                                      <span class="fa fa-star checked"></span>
                                                      <span class="fa fa-star checked"></span>
                                                      <span class="fa fa-star"></span>
                                                      <span class="fa fa-star"></span>
                                                      <span class="fa fa-star"></span>

                                                      </p>-->
                                                </div>
                                            </div>
                                            <!--  </div> -->
                                        </div>
                                        @endforeach
                                            <?php $data = $search->toArray();?>
                                            @include('partials._paginator')
                                    </div>
                                </div>
                                <!--    -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>

<!-- jp Best deals Wrapper End -->
<!-- jp Client Wrapper Start -->
<div class="jp_client_slider_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_first_client_slider_wrapper">
                    <div class="jp_first_client_slider_img_overlay"></div>
                    <div class="jp_client_heading_wrapper">
                        <h2>What Clients Say?</h2>
                    </div>
                    <div class="jp_client_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper">
                                        <img src="images/content/black-man2.jpg" alt="client_img" />
                                    </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“I registered my business on craftcentral and since then my customer database trippled, This platform is the best online service directory ever”</p>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <span>~ Jeniffer Doe &nbsp;<b>(Baker)</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper">
                                        <img src="images/content/black-man2.jpg" alt="client_img" />
                                    </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“Most services from craftcentral are low cost and very affordable, This platform makes life easy for people”</p>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><span>~ John Doe &nbsp;<b>(Developer)</b></span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="jp_client_slide_show_wrapper">
                                    <div class="jp_client_slider_img_wrapper">
                                        <img src="images/content/black-man1.jpg" alt="client_img" />
                                    </div>
                                    <div class="jp_client_slider_cont_wrapper">
                                        <p>“This platform is extremly fast, effective and secure”</p>
                                        <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i><span>~ Temidayo Doe &nbsp;<b>(Fashion Designer)</b></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jp pricing Wrapper End -->
<!-- jp downlord Wrapper Start -->
<div class="jp_downlord_main_wrapper">

    <!-- jp downlord Wrapper End -->
    <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <div class="jp_newsletter_wrapper">
            <div class="container">
                <div class="row">
                </div>
            </div>
        </div>
        <!-- jp Newsletter Wrapper End -->
        <!-- jp footer Wrapper Start -->
        <div class="jp_footer_main_wrapper">
            <div class="container">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_bottom_footer_Wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_bottom_footer_left_cont">
                                    <p>© 2018 Craftcentral. All Rights Reserved.</p>
                                </div>
                                <div class="jp_bottom_top_scrollbar_wrapper">
                                    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_bottom_footer_right_cont">
                                   @include('partials._social')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp footer Wrapper End -->
<!--main js file start-->
<!--<script src="js/jquery_min.js"></script> -->
<script src="js/jquery-3.1.0.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="css/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.inview.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/custom.js"></script>
<!--main js file end-->




<script>




    $('.star-block').each(function(el, item){
        var starYellow = '<span class="fa fa-star " style="color:orange"></span>';
        var star = '<span class="fa fa-star"></span>';
        var starVal = parseInt($(item).attr('data-rate'));
        console.log(starVal)
        for(var i = 1; i <= 5; i++){
            if(starVal >= i){
                $(item).append(starYellow);
            }
            else $(item).append(star);
        }
    })




</script>




</body>



</html>

