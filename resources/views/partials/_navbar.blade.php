

<!-- preloader Start -->
@if(\App\Helpers\WebConstant::$MODE == "production")
    <div id="preloader">
        <div id="status"><img src="images/header/loadinganimation.gif" id="preloader_image" alt="loader">
        </div>
    </div>
@endif
<!-- Top Scroll End -->
<!-- Top Header Wrapper Start -->
<div class="jp_top_header_main_wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="jp_top_header_left_wrapper">
                    <div class="jp_top_header_left_cont">
                        <!-- <p><i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
                         <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="#">Email@example.com</a></p> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="jp_top_header_right_wrapper">
                    <div class="jp_top_header_right_cont">
                        <ul>
                            <!--  <li><a href="#"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li> -->
                            <li><a href="{{route('contact')}}" style="color:#0F0F0F;"><i class="fa fa-envelope" style="color:#F66;"></i>&nbsp; Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="jp_top_header_right__social_cont">
                        @include('partials._social')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Top Header Wrapper End -->
<!-- Header Wrapper Start -->
<div class="jp_top_header_img_wrapper">
    <div class="gc_main_menu_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                    <div class="gc_header_wrapper">
                        <div class="gc_logo">
                            <a href="{{route('home')}}"><img src="images/header/2.png" alt="Craft Central Logo" title="Craft Central" class="img-responsive"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 full_width">
                    <div class="header-area hidden-menu-bar stick" id="sticker">
                        <!-- mainmenu start -->
                        <div class="mainmenu">

                            <ul class="float_left">
                                <li class="has-mega gc_main_navigation"><a href="{{route('home')}}" class="gc_main_navigation">  HOME </a>

                                </li>
                                <li class="gc_main_navigation parent"><a href="{{route('works')}}" class="gc_main_navigation">HOW IT WORKS</a></li>
                                <li class="gc_main_navigation parent"><a href="{{route('about')}}" class="gc_main_navigation">ABOUT US</a></li>
                                <li class="gc_main_navigation parent"><a href="{{route('contact')}}" class="gc_main_navigation">CONTACT</a></li>
                                @if(auth()->guard('user')->check())
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> &nbsp;<i class="fa fa-user" style="font-size:24px;"></i>{{auth()->guard('user')->user()->email}}</a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="dropdown-header">{{auth()->guard('user')->user()->email}} </li>
                                            <li class="parent"><a href="{{route('customer.logout')}}">Logout</a></li>
                                        </ul>
                                    </li>
                                @elseif(auth()->guard('business')->check())
                                    {{--<li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> &nbsp;<i class="fa fa-user" style="font-size:24px;">{{auth()->guard('business')->user()->email}}</a>--}}
                                        {{--<!-- mega menu start -->--}}
                                        {{--<ul>--}}
                                            {{--<li class="dropdown-header"> {{auth()->guard('business')->user()->email}}</li>--}}
                                            {{--<li class="parent"><a href="{{route('business.profile')}}">Profile</a></li>--}}
                                            {{--<li class="parent"><a href="{{route('business.logout')}}">Logout</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    <li class="has-mega gc_main_navigation"><a href="#" class="gc_main_navigation"> &nbsp;<i class="fa fa-user" style="font-size:24px;"></i>{{auth()->guard('business')->user()->email}}</a>
                                        <!-- mega menu start -->
                                        <ul>
                                            <li class="dropdown-header">{{auth()->guard('business')->user()->email}} </li>
                                            <li class="parent"><a href="{{route('business.profile')}}">Profile</a></li>
                                            <li class="parent"><a href="{{route('business.logout')}}">Logout</a></li>
                                        </ul>
                                    </li>
                                @endif


                            </ul>
                        </div>
                        <!-- mainmenu end -->
                        <!-- mobile menu area start -->
                        <header class="mobail_menu">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="gc_logo">
                                            <a href="index.php"><img src="images/header/ccLogo-cropped-cropped2.png" alt="Logo" title="Craft Central" class="img-responsive"></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="cd-dropdown-wrapper">
                                            <a class="house_toggle" href="#0">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000000"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000000"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000000"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000000"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000000"/></g></g></svg>
                                            </a>
                                            <nav class="cd-dropdown">
                                                <!--<h2><a href="#">Craft<span>Central</span></a></h2> -->
                                                <a href="{{route('home')}}"><img src="images/header/2.png" alt="Craft Central Logo" title="Craft Central" class="img-responsive"></a>
                                                <a href="#0" class="cd-close">Close</a>
                                                <ul class="cd-dropdown-content">
                                                    <li>
                                                        <a href="{{route('home')}}">Home</a>
                                                    </li>
                                                    <!-- .has-children -->
                                                    <li class="has-children">
                                                        @if(auth()->guard('user')->check())
                                                            <a href="#">{{auth()->guard('user')->user()->email}} </a>
                                                        @elseif(auth()->guard('business')->check())
                                                            <a href="#">{{auth()->guard('business')->user()->email}} </a>
                                                        @endif
                                                            <ul class="cd-secondary-dropdown is-hidden">

                                                            <li>
                                                                <a href="{{route('works')}}">HOW IT WORKS</a>
                                                            </li>


                                                            <li>
                                                                <a href="{{route('about')}}">ABOUT US</a>
                                                            </li>

                                                            <li>
                                                                <a href="">CONTACT</a>
                                                            </li>
                                                            <!-- .has-children -->

                                                            <li>
                                                                <a href="{{route('customer.logout')}}">Logout</a>
                                                            </li>
                                                            <!-- .has-children -->

                                                        </ul>
                                                        <!-- .cd-secondary-dropdown -->
                                                    </li>
                                                    <!-- .has-children -->
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>