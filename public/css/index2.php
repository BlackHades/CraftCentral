<?php session_start();  ?>

<?php

include('HomeMainSearch.php');

//echo "<script> alert('DB not connected') </script>";

?>




<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->



<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8" />
    <title>Craftcentral</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content=" " />
    <meta name="keywords" content=" " />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
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
</style>
    
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
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
                               <a href="index.php"><img src="images/header/ccLogo-cropped-cropped2.png" alt="Logo" title="Craft Central" class="img-responsive"></a> 
                            <!-- <a href="index.html"><span style="font-size:24px; font-weight:600;">CraftCentral</span></a> -->
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-10 col-sm-12 col-xs-12 center_responsive"> 
                    <!-- <div class="col-lg-9 col-md-10 col-sm-12 col-xs-12 center_responsive"> -->
                        <div class="header-area hidden-menu-bar stick" id="sticker">
                            <!-- mainmenu start -->
                            <div class="mainmenu">
                              <!--  <div class="gc_right_menu">
                                    <ul>
                                         <li id="search_button">
                                           <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px" viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve"><g><path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z" fill="#23c0e9"/></g></svg> 
                                        </li>-->
                                       <!-- <li>
                                            <div id="search_open" class="gc_search_box">
                                                <input type="text" placeholder="Search here">
                                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                                            </div>
                                        </li> 
                                    </ul>
                                </div>-->
                                <ul class="float_left">
                                   <!-- <li class="has-mega gc_main_navigation">
                                     <a href="#" class="gc_main_navigation">  Home&nbsp;<i class="fa fa-angle-down"></i></a>
                                        mega menu start -->
                                        <!--<ul>
                                            <li class="parent"><a href="index.html">Home1</a></li>
                                            
                                        </ul>
                                    </li> --->
                                  <!--  <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation">  Listing&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -
                                        <ul>
                                            <li class="parent"><a href="listing_left.html">Listing-Left</a></li>
                                            <li class="parent"><a href="listing_right.html">Listing-Right</a></li>
                                            <li class="parent"><a href="listing_single.html">listing_single.html</a></li>

                                        </ul>
                                    </li>
                                    <li class="parent gc_main_navigation"><a href="#" class="gc_main_navigation">Candidates &nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- sub menu start --
                                        <ul>
                                            <li class="parent"><a href="#">header style</a>
                                                <!-- second child menu start --
                                                <ul>
                                                    <li><a href="#">header 1</a></li>
                                                    <li><a href="#">header 1 fluid</a></li>
                                                    <li><a href="#">header 2</a></li>
                                                    <li><a href="#">header 2 fluid</a></li>
                                                    <li><a href="#">header sidebar onepage</a></li>
                                                </ul>
                                                <!-- second child menu end --
                                            </li>
                                            <li class="parent"><a href="#">slider style</a>
                                                <!-- second child menu start -->
                                              <!--  <ul>
                                                    <li><a href="#">slider version 1</a></li>    <!---select slier style --
                                                    <li><a href="#">slider version 2</a></li>
                                                    <li><a href="#">slider version 3</a></li>
                                                </ul> -->
                                                <!-- second child menu end --
                                            </li>
                                            <li class="parent"><a href="#">text change style</a>
                                                <!-- second child menu start --
                                                <ul>
                                                    <li><a href="#">clip style</a></li>
                                                    <li><a href="#">push style</a></li>
                                                    <li><a href="#">scale style</a></li>
                                                    <li><a href="#">slide style</a></li>
                                                    <li><a href="#">typed style</a></li>
                                                    <li><a href="#">zoom style</a></li>
                                                    <li><a href="#">rotate 1 style</a></li>
                                                    <li><a href="#">rotate 2 style</a></li>
                                                    <li><a href="#">rotate 3 style</a></li>
                                                    <li><a href="#">loading bar style</a></li>
                                                </ul>
                                                <!-- second child menu end --
                                            </li>
                                            <li class="parent"><a href="#">breadcrumb style</a>
                                                <!-- second child menu start --
                                                <ul>
                                                    <li><a href="#">breadcrumb default</a></li>
                                                    <li><a href="#"> breadcrumb left </a></li>
                                                    <li><a href="#"> breadcrumb right</a></li>
                                                    <li><a href="#"> breadcrumb color </a></li>
                                                    <li><a href="#">breadcrumb color left</a></li>
                                                    <li><a href="#">breadcrumb color right</a></li>
                                                </ul>
                                                <!-- second child menu end --
                                            </li>
                                            <li class="parent"><a href="#">multilevel dropdown</a>
                                                <!-- second child menu start --
                                                <ul>
                                                    <li><a href="#">second level</a></li>
                                                    <li><a href="#">second level</a></li>
                                                    <li class="parent"><a href="#">More level</a>
                                                        <!-- third child menu start --
                                                        <ul>
                                                            <li><a href="#">third level</a></li>
                                                            <li><a href="#">third level</a></li>
                                                            <li class="parent"><a href="#">More level</a>
                                                                <!-- fourth child menu start --
                                                                <ul>
                                                                    <li><a href="#">forth level</a></li>
                                                                    <li><a href="#">forth level</a></li>
                                                                    <li class="parent"><a href="#">More level</a>
                                                                        <!-- fifth child menu start --
                                                                        <ul>
                                                                            <li><a href="#">fifth level</a></li>
                                                                            <li><a href="#">fifth level</a></li>
                                                                            <li class="parent"><a href="#">More level</a>
                                                                                <!-- sixth child menu start --
                                                                                <ul>
                                                                                    <li><a href="#">sixth level</a></li>
                                                                                    <li><a href="#">sixth level</a></li>
                                                                                    <li><a href="#">sixth level</a></li>
                                                                                    <li><a href="#">sixth level</a></li>
                                                                                </ul>
                                                                                <!-- sixth child menu start --
                                                                            </li>
                                                                            <li><a href="#">fifth level</a></li>
                                                                        </ul>
                                                                        <!-- fifth child menu end --
                                                                    </li>
                                                                    <li><a href="#">forth level</a></li>
                                                                </ul>
                                                                <!-- fourth child menu start --
                                                            </li>
                                                            <li><a href="#">third level</a></li>
                                                        </ul>
                                                        <!-- third child menu end --
                                                    </li>
                                                    <li><a href="#">second level</a></li>
                                                </ul>
                                                <!-- second child menu end --
                                            </li>
                                        </ul>
                                        <!-- sub menu end --
                                    </li> --->


                                   <!-- <li class="has-mega gc_main_navigation">
                                    <a href="#" class="gc_main_navigation">  Blog&nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start --
                                        <ul>
                                            <li class="parent"><a href="blog_left.html">Blog-Left</a></li>
                                            <li class="parent"><a href="blog_right.html">Blog-Right</a></li>
                                            <li class="parent"><a href="blog_single_left.html">Blog-Single-Left</a></li>
                                            <li class="parent"><a href="blog_single_right.html">Blog-Single-Right</a></li>

                                        </ul>
                                    </li> -->
                                    
                                    <li class="parent"><a href="index.html">Home</a></li>
                                    <li class="gc_main_navigation parent"><a href="#" class="gc_main_navigation">About Us</a></li>
                                    <li class="gc_main_navigation parent"><a href="contact-us.html" class="gc_main_navigation">Contact</a></li>
                                    
                                    <li class="has-mega gc_main_navigation">
                                    <a href="#" class="gc_main_navigation">&nbsp; | &nbsp; Customer &nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="user-login.php">Login</a></li>
                                            <li class="parent"><a href="new-Customer.php">Signup</a></li>
                                            
                                        </ul>
                                    </li>
                                    
                                    <li class="has-mega gc_main_navigation">
                                    <a href="#" class="gc_main_navigation">&nbsp; | &nbsp;  Service Provider &nbsp;<i class="fa fa-angle-down"></i></a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="parent"><a href="Business-login.php">Login</a></li>
                                            <li class="parent"><a href="New-Business.php">Register Business</a></li>
                                            
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
             <a href="index.php"><img src="images/header/ccLogo-cropped-cropped2.png" alt="Logo" title="Craft Central" class="img-responsive"></a> 
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
                                                    CraftCentral
                                                    
                                                    </h2>
                                                    <a href="#0" class="cd-close">Close</a>
                                                    <ul class="cd-dropdown-content">
                                                        <!--<li>
                                                            <form class="cd-search">
                                                                <input type="search" placeholder="Search...">
                                                            </form>
                                                        </li> -->
                                                       <!-- <li class="has-children">
                                                            <a href="#">Home</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#">Back</a></li>
                                                              <!--  <li>
                                                                    <a href="index-2.html">Home1</a>
                                                                </li> -->
                                                                <!-- .has-children -->

                                                               <!-- <li>
                                                                    <a href="index_II.html">Home2</a>
                                                                </li> -->
                                                                <!-- .has-children --

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown 
                                                        </li> -->
                                                        
                                                         <li>
                                                            <a href="index.html">Home</a>
                                                        </li>
                                                        
                                                        <li>
                                                            <a href="#">About Us</a>
                                                        </li>
                                                        <!-- .has-children -->
                                                        <li>
                                                            <a href="contact-us.html">Contact</a>
                                                        </li>
                                                        
                                                         <li class="has-children">
                                                            <a href="#">Customer</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#">Back</a></li>
                                                                <li>
                                                                    <a href="user-login.php">Login</a>
                                                                </li> 
                                                                <!-- .has-children -->
                                                                
                                                                <li>
                                                                    <a href="new-Customer.php">Signup</a>
                                                                </li>

                                                            </ul>
                                                            <!-- .cd-secondary-dropdown -->
                                                        </li>
                                                        
                                                        <li class="has-children">
                                                            <a href="#">Service Provider</a>

                                                            <ul class="cd-secondary-dropdown is-hidden">
                                                                <li class="go-back"><a href="#">Back</a></li>
                                                                <li>
                                                                    <a href="Business-login.php">Login</a>
                                                                </li> 
                                                                <!-- .has-children -->
                                                                <li>
                                                                    <a href="New-Business.php">Register Business </a>
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
                   <!-- <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                       <div class="jp_navi_right_btn_wrapper">
                            <ul>
                             <li><a href="#"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                <li><a href="#"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li> 
                            </ul>
                        </div>
                        
                        
                       
                        
                    </div> -->
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
                        <div class="jp_header_form_wrapper">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <input type="text" name="keyword" placeholder="Keyword e.g. (Computer Repair, Fashion Designer, Office Space)">
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_location_wrapper">
                                    <i class="fa fa-dot-circle-o first_icon"></i>
								<select name="state" id="select">
                                <option value="None">Select Location</option>
                                <option value="ABUJA">ABUJA FCT</option>
                                <option value="ABIA">ABIA</option>
                                <option value="ADAMAWA">ADAMAWA</option>
                                <option value="AKWA-IBOM">AKWA IBOM</option>
                                <option value="ANAMBRA">ANAMBRA</option>
                                <option value="BAUCHI">BAUCHI</option>
                                <option value="BAYELSA">BAYELSA</option>
                                <option value="BENUE">BENUE</option>
                                <option value="BORNO">BORNO</option>
                                <option value="CROSS-RIVER">CROSS RIVER</option>
                                <option value="DELTA">DELTA</option>
                                <option value="EBONYI">EBONYI</option>
                                <option value="EDO">EDO</option>
                                <option value="EKITI">EKITI</option>
                                <option value="ENUGU">ENUGU</option>
                                <option value="GOMBE">GOMBE</option>
                                <option value="IMO">IMO</option>
                                <option value="JIGAWA">JIGAWA</option>
                                <option value="KADUNA">KADUNA</option>
                                <option value="KANO">KANO</option>
                                <option value="KATSINA">KATSINA</option>
                                <option value="KEBBI">KEBBI</option>
                                <option value="KOGI">KOGI</option>
                                <option value="KWARA">KWARA</option>
                                <option value="LAGOS">LAGOS</option>
                                <option value="NASSARAWA">NASSARAWA</option>
                                <option value="NIGER">NIGER</option>
                                <option value="OGUN">OGUN</option>
                                <option value="ONDO">ONDO</option>
                                <option value="OSUN">OSUN</option>
                                <option value="OYO">OYO</option>
                                <option value="PLATEAU">PLATEAU</option>
                                <option value="RIVERS">RIVERS</option>
                                <option value="SOKOTO">SOKOTO</option>
                                <option value="TARABA">TARABA</option>
                                <option value="YOBE">YOBE</option>
                                <option value="ZAMFARA">ZAMFARA</option>
                                </select><i class="fa fa-angle-down second_icon"></i>
							
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <div class="jp_form_exper_wrapper">
                                   <!-- <i class="fa fa-dot-circle-o first_icon"></i>
                                    <select>
								<option>High Experience Level</option>
								<option>Medium Experience Level</option>
								<option>Low Experience Level</option>
							
							</select><i class="fa fa-angle-down second_icon"></i>--->
                            
                             <input type="text" name="lga" placeholder="L.G.A">
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
           <li><button type="submit" name="Submit" id="mybtn" class="btn btn-danger btn-lg mybtn"><i class="fa fa-search"></i> Search</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_banner_main_jobs_wrapper">
                            <div class="jp_banner_main_jobs">
                                <ul>
                                    <li><i class="fa fa-tags"></i> Trending Keywords :</li>
                                    <li><a href="#">Make-up ,</a></li>
                                    <li><a href="#">Developer,</a></li>
                                    <li><a href="#">Manicure </a></li>
                                    <li><a href="#">Bike repairs,</a></li>
                                    <li><a href="#">Laptop repairs,</a></li>
                                    <li><a href="#">call center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_jobs_categories_wrapper">
            <div class="container">
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-code"></i>
                        <h3><a href="#">Makeup & Beauty</a></h3>
                       <!-- <p>(240 jobs)</p> -->
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-laptop"></i>
                        <h3><a href="#">Tailoring & Clothe</a></h3>
                       <!-- <p>(504 jobs)</p> -->
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-bar-chart"></i>
                        <h3><a href="#">Web Development & Design</a></h3>
                      <!--  <p>(2250 jobs)</p> -->
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-medkit"></i>
                        <h3><a href="#">Auto Services</a></h3>
                      <!--  <p>(202 jobs)</p> -->
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-university"></i>
                        <h3><a href="#">Artistry & Sculpting</h3>
                       <!-- <p>(1457 jobs)</p> -->
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-th-large"></i>
                        <h3><a href="#">All Categories</a></h3>
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
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img1.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Mj Makeovers</h4>
                                    <p>Make-up Artistry </p>
                                  
                                </div>
                                
                                 <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img2.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Oneflare Tech Solutions</h4>
                                    <p>Technology</p>
                              
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img3.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Planet Solutions</h4>
                                    <p>Repairs</p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img2.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>OLM Sales Services</h4>
                                    <p>Sales</p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img3.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>Oxygen Manicure & Pedicure</h4>
                                    <p>Personal Care </p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img1.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>FAA Arts</h4>
                                    <p>Artistry & Sculpting.</p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                        </div>
                        <div class="item">
                            <div class="jp_tittle_slides_one">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img3.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>House of Makela </h4>
                                    <p>Tailoring & Designs</p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                                
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_two">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img1.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>BellGold Travels</h4>
                                    <p>Services</p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                            <div class="jp_tittle_slides_one jp_tittle_slides_third">
                                <div class="jp_tittle_side_img_wrapper">
                                    <img src="images/content/tittle_img2.png" alt="tittle_img" />
                                </div>
                                <div class="jp_tittle_side_cont_wrapper">
                                    <h4>zz Phone Repairs </h4>
                                    <p>Auto Service </p>
                                </div>
                                
                                <p> 
                                   
                                 <span class="fa fa-star checked"></span>
                                 <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                                                    
                                </p>
                                
                            </div>
                        </div>
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
                       <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_hiring_slider_main_wrapper">
                                <div class="jp_hiring_heading_wrapper">
                                    <h2>Recommemded Services For You</h2>
                                </div>
                                <div class="jp_hiring_slider_wrapper">
                                    <div class="owl-carousel owl-theme">
                                       <!-- <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="images/content/hiring_img1.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                      <!--  <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="images/content/hiring_img2.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="images/content/hiring_img3.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                       <!--- <div class="item">
                                            <div class="jp_hiring_content_main_wrapper">
                                                <div class="jp_hiring_content_wrapper">
                                                    <img src="images/content/hiring_img4.png" alt="hiring_img" />
                                                    <h4>Akshay INC.</h4>
                                                    <p>(NewYork)</p>
                                                    <ul>
                                                        <li><a href="#">4 Opening</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>---
                                    </div>
                                </div>
                            </div>
                        </div>-->
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
                                    
                                    
                                          <?php 
  
								if(($error == 0) && ($keywordID > 0))
								 
					{
						/*echo "<script> alert('Keyword is greater than 0') </script>";
						
						echo "<script> alert('State: $state') </script>"; */
						
						if(empty($lga) && $state == "None")
						{
							
						$search = $verify->Home_search_query($keywordID);  //query 1
						
						
						}elseif(empty($lga) && $state != "None" && !empty($state))
						{
							$search = $verify->Home_search_query_state($keywordID, $state);  // query 2
							
						}
						elseif(!empty($lga) && !empty($state))
						{
							$search = $verify->Home_search_query_state_lga($keywordID, $lga);     //query 3
							
						}
						
						//thus will be like a bug that need fixing ...only two column search for the three column is used ..for 3 column search only LGA and State are used..THIS WILL BE FIXED LATER.
						
						/*
						elseif(!empty($state) && !empty($lga) && $state != "None")
						{
							$search = $verify->search_query_state_lga($keywordID, $lga);     //query 3
							
						}*/
						
					/*	echo "<script> alert('Keyword is greater than 0') </script>"; */
						 }
						  
/* while($row = $verify->search_query($keywordID)) {


$verify->search_query($keywordID)

$sp_id2 = $row[0];	
$sp_name2 = $row[1];
$categoryID2 = $row[2];
$category2 = $row[3];
$state2 = $row[9];
$lga2 = $row[10];
} */

 if($search !="" && !empty($search) && $error == 0)
{

foreach($search as $rows)
{
	$sp_id = $rows['Id'];
	$sp_name = $rows['Business_name'];
	//$sp_address = $rows['Business_address'];
	//$sp_email = $rows['Business_email'];
	//$sp_phone = $rows['Business_Phone'];
	$sp_image = $rows['Logo'];
	$sp_category = $rows['Category'];
	$sp_lga = $rows['Lga'];
	$sp_state = $rows['State'];

/*
echo "<br>";

echo $sp_address;
echo "<br>";
echo $sp_email;
echo "<br>";
echo $sp_phone;
echo "<br>";
*/


/*

echo "<br>";

echo $sp_id2;
echo "<br>";

echo $sp_email;
echo "<br>";

echo $categoryID2;
echo "<br>";

echo $category2;
echo "<br>";

$state2;
echo "<br>";

$lga2;
echo "<br>";
*/
	

					?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <!--<div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1"> -->
                                                 <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="<?php echo "$sp_image"; ?>" alt="post_img" />
                                                                </div>
                                                              <div class="jp_job_post_right_cont">
                                                                    <h4><?php echo $sp_name; ?></h4>
                                                                    <p><?php echo $sp_category; ?></p>
                                                                    
                                                                    <ul>
                                                                       <!-- <li><i class="fa fa-map-marker"></i>&nbsp; ogba, Lagos</li>
                                                                        
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li> -->
                                                                   </ul>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li>&nbsp;</li>
                                                                        <li><a href="#">Check Reviews</a></li>
                                                                        <li><a href="#">Hire</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                         <p> 
                                                         Rating: &nbsp;
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        
                                                        
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        |
                                                        &nbsp;
                                                        &nbsp;
                                                        
                                                      <!-- <span>Likes:&nbsp; <span id="number">14</span> <i class="fa fa-heart like"></i></span> -->
                                                        
                                                        </p>
                                                    </div>
                                                </div>
                                          <!--  </div> -->
                                        </div>  
                                        
                                          <?php } } ?> 
                                        <!-- end 1 -->
                                        <!--start 2 -->
                                        
                                        <!---
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                           <!-- <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1"> -->
                                             <!--    <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="images/content/job_post_img1.jpg" alt="post_img" />
                                                                </div>
                                                              <div class="jp_job_post_right_cont">
                                                                    <h4>Lion Travel</h4>
                                                                    <p>Travel Agencies And Tourism</p>
                                                                    
                                                                    <ul>
                                                                       <!-- <li><i class="fa fa-map-marker"></i>&nbsp; ogba, Lagos</li>
                                                                        
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li> -->
                                                             <!--      </ul>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li>&nbsp;</li>
                                                                        <li><a href="#">Check Reviews</a></li>
                                                                        <li><a href="#">Hire</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                         <p> 
                                                         Rating: &nbsp;
                                                        <span class="fa fa-star checked"></span>


                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        
                                                        
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        |
                                                        &nbsp;
                                                        &nbsp;
                                                        
                                                       <span>Likes:&nbsp; <span id="number">2</span> <i class="fa fa-heart like"></i></span>
                                                        
                                                        </p>
                                                    </div>
                                                </div>
                                           <!-- </div> --
                                        </div> 
                                        <!-- --2 -->
                                        <!-- start 3 -->
                                         
                                    <!--    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                           <!-- <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1"> -->
                                        <!--         <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="images/content/job_post_img4.jpg" alt="post_img" />
                                                                </div>
                                                              <div class="jp_job_post_right_cont">
                                                                    <h4>BellGold  Travel</h4>
                                                                    <p>Travel Agencies And Tourism</p>
                                                                    
                                                                    <ul>
                                                                        <!--<li><i class="fa fa-map-marker"></i>&nbsp; ogba, Lagos</li>
                                                                        
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li> -->
                                                       <!--            </ul>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li>&nbsp;</li>
                                                                        <li><a href="#">Check Reviews</a></li>
                                                                        <li><a href="#">Hire</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                         <p> 
                                                         Rating: &nbsp;
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        
                                                        
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        |
                                                        &nbsp;
                                                        &nbsp;
                                                        
                                                       <span>Likes:&nbsp; <span id="number">13</span> <i class="fa fa-heart like"></i></span>
                                                        
                                                        </p>
                                                    </div>
                                                </div>
                                           <!-- </div> --
                                        </div> 
                                        <!-- end 3 -->
                                        <!-- start 4 -->
                                        
                                     <!--    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                           <!-- <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1"> -->
                                            <!--     <div class="jp_job_post_main_wrapper_cont jp_job_post_main_wrapper_cont2">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="images/content/hiring_img5.png" alt="post_img" />
                                                                </div>
                                                              <div class="jp_job_post_right_cont">
                                                                    <h4>Orchid Travel</h4>
                                                                    <p>Travel Agencies And Tourism</p>
                                                                    
                                                                    <ul>
                                                                       <!-- <li><i class="fa fa-map-marker"></i>&nbsp; Ikeja, Lagos</li>
                                                                        
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li> -->
                                                     <!--              </ul>
                                                            </div>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper">
                                                                    <ul>
                                                                        <li>&nbsp;</li>
                                                                        <li><a href="#">Check Reviews</a></li>
                                                                        <li><a href="#">Hire</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                         <p> 
                                                         Rating: &nbsp;
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                        
                                                        
                                                        &nbsp;
                                                        &nbsp;
                                                        &nbsp;
                                                        |
                                                        &nbsp;
                                                        &nbsp;
                                                        
                                                       <span>Likes:&nbsp; <span id="number">2</span> <i class="fa fa-heart like"></i></span>
                                                        
                                                        </p>
                                                    </div>
                                                </div>
                                           <!-- </div> -->
                                        
                                        <!-- end 4 -->
                                            
                                            
                                            
                                          
                                            
                                            
                                            
                                            
                                           
                                        </div>
                                    </div>
                                    <!--<div class="video_nav_img_wrapper">
                                        <div class="video_nav_img">
                                           <!-- <ul>
                                                <li><a class="button secondary url owl_nav" href="#zero">1</a></li>
                                                <li><a class="button secondary url owl_nav" href="#one">2</a></li>
                                                <li><a class="button secondary url owl_nav active" href="#two">3</a></li>
                                            </ul> 
                                        </div>
                                    </div> -->
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
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_text">
                         <!--  <img src="images/content/news_logo.png" class="img-responsive" alt="news_logo" /> -->
                           <span style="font-size:17px;"> Subscribe To Our Newsletters </span>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="jp_newsletter_field">
                            <i class="glyphicon glyphicon-envelope"></i><input type="text" placeholder="Enter Your Email"><button type="submit">Submit</button>
                        </div>
                    </div>
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
                                        <ul>
                                        
                                          <!--  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="hidden-xs"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            -->
                                            
            <li> <a href="#" title="Craftcentral on facebook"><img src="images/content/46-facebook-512.png" width="30" height="30"> </a></li>
   <li> 
 <a href="#" title="Craftcentral on Instagram">
 <img src="images/content/social-media_instagram_flat-circle-white-on-black_512x512.png" width="30" height="30">
 </a>
    </li>
    
   <li> <a href="#" title="Craftcentral on Twitter"><img src="images/content/twitter-2.png" width="30" height="30"></a></li>
   <li> <a href="#" title="Craftcentral on Twitter"><img src="images/content/linkedin_circle_black-512.png" width="30" height="30"></a></li>
                                            
                                        </ul>
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
</body>



</html>


