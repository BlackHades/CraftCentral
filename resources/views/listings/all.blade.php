@extends('master')
@section('stylesheet')
    <style>
        #in-put{font-size:12px;}

        .star1, .star2, .star3, .star4, .star5{color:#F90;}


    </style>
@endsection
@section('content')
    <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <!--  <h1><span>3,000+</span> Browse Jobs</h1>
                                  <p>Find Jobs, Employment & Career Opportunities</p> -->
                            </div>
                        </div>
                    </div>
                    @include('partials._message')
                    @include('partials._search',['route' => route('customer.listing')])
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
    </div>
    <!-- Header W rapper End -->
    <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_listing_heading_wrapper">
                        <h2>We found <span style="color:#F63;">{{count($search)}}</span> Matches for you.</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Category</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p style="font-size:13px;">
                                                    <!-- <input type="checkbox" id="c1" name="cb"> -->
                                                    <label for="c1">Tailoring & Clothes</label>

                                                <p style="font-size:13px;">
                                                    <!--  <input type="checkbox" id="c2" name="cb"> -->
                                                    <label for="c2">Makeup & Beauty</label>
                                                </p>
                                                <p style="font-size:13px;">
                                                    <!---  <input type="checkbox" id="c3" name="cb"> --->
                                                    <label for="c3">Website Design</label>
                                                </p>
                                                <p style="font-size:13px;">
                                                    <!--  <input type="checkbox" id="c4" name="cb"> -->
                                                    <label for="c4">Artistry & Sculpting</label>
                                                </p>
                                                <p style="font-size:13px;">
                                                    <!-- <input type="checkbox" id="c5" name="cb"> -->
                                                    <label for="c5">Car pantry & Woodwork</label>
                                                </p>
                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_job_location_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Locations</h4>
                                </div>
                                <div class="jp_rightside_job_categories_content">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <p>
                                                    <!--<input type="checkbox" id="c9" name="cb"> -->
                                                    <label for="c9">Ikeja</label>

                                                <p>
                                                    <!--  <input type="checkbox" id="c10" name="cb"> -->
                                                    <label for="c10">Ibadan</label>
                                                </p>
                                                <p>
                                                    <!--    <input type="checkbox" id="c11" name="cb"> -->
                                                    <label for="c11">Oshogbo</label>
                                                </p>
                                                <p>
                                                    <!--<input type="checkbox" id="c12" name="cb"> -->
                                                    <label for="c12">Owerri</label>
                                                </p>
                                                <p>
                                                    <!-- <input type="checkbox" id="c13" name="cb"> -->
                                                    <label for="c13">Kubwa</label>
                                                </p>
                                                <p>
                                                    <!-- <input type="checkbox" id="c14" name="cb">-->
                                                    <label for="c14">Okenne</label>
                                                </p>

                                            </div>
                                        </div>
                                        <ul>
                                            <li><i class="fa fa-plus-circle"></i> <a href="#">SHOW MORE</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_add_resume_wrapper jp_job_location_wrapper">
                                <!-- <div class="jp_add_resume_img_overlay"></div>
                                 <div class="jp_add_resume_cont">
                                     <img src="images/content/resume_logo.png" alt="logo" />
                                     <h4>Get Best Matched Jobs On your Email. Add Resume NOW!</h4>
                                     <ul>
                                         <li><a href="#"><i class="fa fa-plus-circle"></i> &nbsp;ADD RESUME</a></li>
                                     </ul>
                                 </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_listing_tabs_wrapper">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="gc_causes_select_box_wrapper">
                                        <div class="gc_causes_select_box">
                                            <select>
                                                <option>Sort Default</option>
                                                <option>Alphabetical Order</option>
                                                <option>Highest Rating</option>
                                                <option>Low  Rating</option>
                                            </select><i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="gc_causes_view_tabs_wrapper">
                                        <div class="gc_causes_view_tabs">
                                            <ul class="nav nav-pills">
                                                <li class="active"><a data-toggle="pill" href="#grid"><i class="fa fa-th-large"></i></a></li>
                                                <li><a data-toggle="pill" href="#list"><i class="fa fa-list"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                    <div class="gc_causes_search_box_wrapper gc_causes_search_box_wrapper2">
                                        <div class="gc_causes_search_box">
                                            <p>Viewing &nbsp;<span>01 to 15</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-content">
                                <div id="grid" class="tab-pane fade in active">
                                    <div class="row">
                                        @foreach($search as $s)
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="{{$s->logo}}" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                                    <ul>
                                                                        <li class='star-block' data-rate='{{$s->formular}}'>

                                                                        </li>
                                                                    </ul>
                                                                    <br>

                                                                    <h4>{{$s->name}}</h4>
                                                                    <p> {{$s->category->name}} </p>

                                                                    <ul>
                                                                        <li><i class="fa fa-map-marker"></i>&nbsp;{{"$s->lga,$s->state"}}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                                    <ul>
                                                                        <li>&nbsp;</li>
                                                                        <!-- <li><a href="#">Check Reviews</a></li> -->
                                                                        <li><a href="{{route('customer.listing.view',['listing' => $s->id,'keyword' => $keyword])}}">More details</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <!--  <p>
                                                          Rating: &nbsp;
                                                         <span class="fa fa-star checked"></span>
                                                         <span class="fa fa-star checked"></span>
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>
                                                         <span class="fa fa-star"></span>

                                                         </p>  -->
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <?php $data = $search->toArray();?>
                                        @include('partials._paginator')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- jp listing sidebar Wrapper End -->
    <!-- jp downlord Wrapper Start -->
    <div class="jp_downlord_main_wrapper">
        <!--  -->
    </div>
@endsection