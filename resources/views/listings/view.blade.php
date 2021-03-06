@extends('master')
@section('stylesheet')
    <style>
        #in-put{font-size:12px;}
        .star1, .star2, .star3, .star4, .star5{color:#F90;}
    </style>
@endsection
@section('content')
    <?php $formular_down = 0;?>
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Business Information</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <!--  <ul>
                                      <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                      <li><a href="#">Jobs</a> <i class="fa fa-angle-right"></i></li>
                                      <li><a href="#">Developer</a> <i class="fa fa-angle-right"></i></li>
                                      <li>HTML Developer (1-2 Yrs Exp.)</li>
                                  </ul> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp listing Single cont Wrapper Start -->
    <div class="jp_listing_single_main_wrapper">
        <div class="container">
            @include('partials._message')
            <div class="row">

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
                                <div class="jp_rightside_job_categories_heading">
                                    <h4>Overview</h4>
                                </div>
                                <div class="jp_jop_overview_img_wrapper">
                                    <div class="jp_jop_overview_img">
                                        <img src="{{$listing->logo}}" alt="Business Logo" />
                                    </div>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4>{{$listing->name}}</h4>
                                        <p>{{$listing->category->name}}</p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <p class="text-center">
                                            Ratings &nbsp;
                                        </p>
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                                <label>Attention to details:</label>
                                                <div class="progress">
                                                    <div class="progress-bar
                                                        @if($listing->attention == 100 || $listing->attention > 80)
                                                            progress-bar-success
                                                        @elseif($listing->attention == 80 || $listing->attention > 60)
                                                            progress-bar-info
                                                        @elseif($listing->attention == 60 || $listing->attention > 40)
                                                            progress-bar-warning
                                                        @elseif($listing->attention == 40 || $listing->attention > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$listing->attention}}"
                                                         aria-valuemin="{{$listing->attention}}" aria-valuemax="100" style="width:{{$listing->attention}}%">
                                                        <span>{{$listing->attention}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                                <label>Speed:</label>
                                                <div class="progress">
                                                    <div class="progress-bar
                                                        @if($listing->speed == 100 || $listing->speed > 80)
                                                            progress-bar-success
                                                        @elseif($listing->speed == 80 || $listing->speed > 60)
                                                            progress-bar-info
                                                        @elseif($listing->speed == 60 || $listing->speed > 40)
                                                            progress-bar-warning
                                                        @elseif($listing->speed == 40 || $listing->speed > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$listing->speed}}"
                                                         aria-valuemin="{{$listing->speed}}" aria-valuemax="100" style="width:{{$listing->speed}}%">
                                                        <span>{{$listing->speed}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                                <label>Blending:</label>
                                                <div class="progress">
                                                    <div class="progress-bar
                                                        @if($listing->blending == 100 || $listing->blending > 80)
                                                            progress-bar-success
                                                        @elseif($listing->blending == 80 || $listing->blending > 60)
                                                            progress-bar-info
                                                        @elseif($listing->blending == 60 || $listing->blending > 40)
                                                            progress-bar-warning
                                                        @elseif($listing->blending == 40 || $listing->blending > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$listing->blending}}"
                                                         aria-valuemin="{{$listing->blending}}" aria-valuemax="100" style="width:{{$listing->blending}}%">
                                                        <span>{{$listing->blending}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                                <label>Creativity:</label>
                                                <div class="progress">
                                                    <div class="progress-bar
                                                        @if($listing->creativity == 100 || $listing->creativity > 80)
                                                            progress-bar-success
                                                        @elseif($listing->creativity == 80 || $listing->creativity > 60)
                                                            progress-bar-info
                                                        @elseif($listing->creativity == 60 || $listing->creativity > 40)
                                                            progress-bar-warning
                                                        @elseif($listing->creativity == 40 || $listing->creativity > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$listing->creativity}}"
                                                         aria-valuemin="{{$listing->creativity}}" aria-valuemax="100" style="width:{{$listing->creativity}}%">
                                                        <span>{{$listing->creativity}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                                <label>Customer Service:</label>
                                                <div class="progress">
                                                    <div class="progress-bar
                                                        @if($listing->customer == 100 || $listing->customer > 80)
                                                            progress-bar-success
                                                        @elseif($listing->customer == 80 || $listing->customer > 60)
                                                            progress-bar-info
                                                        @elseif($listing->customer == 60 || $listing->customer > 40)
                                                            progress-bar-warning
                                                        @elseif($listing->customer == 40 || $listing->customer > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$listing->customer}}"
                                                         aria-valuemin="{{$listing->customer}}" aria-valuemax="100" style="width:{{$listing->customer}}%">
                                                        <span>{{$listing->customer}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-2"></div>
                                            <div class="col-lg-8">
                                                <label>Overall:</label>
                                                <div class="progress">
                                                    <div class="progress-bar
                                                        @if($listing->overall == 100 || $listing->overall > 80)
                                                            progress-bar-success
                                                        @elseif($listing->overall == 80 || $listing->overall > 60)
                                                            progress-bar-info
                                                        @elseif($listing->overall == 60 || $listing->overall > 40)
                                                            progress-bar-warning
                                                        @elseif($listing->overall == 40 || $listing->overall > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$listing->overall}}"
                                                         aria-valuemin="{{$listing->overall}}" aria-valuemax="100" style="width:{{$listing->overall}}%">
                                                        <span>{{$listing->overall}}%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="jp_listing_overview_list_outside_main_wrapper">
                                    <div class="jp_listing_overview_list_main_wrapper">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Email:</li>
                                                <li>{{$listing->email}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-map-marker"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Location:</li>
                                                <li>{{$listing->address}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Phone</li>
                                                <li>{{$listing->phone}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-globe"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Website</li>
                                                <li>Website from social</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-bank"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Work-Hours</li>
                                                <li>{{$listing->work_hours}}</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                                        <div class="jp_listing_list_icon">
                                            <i class="fa fa-briefcase"></i>
                                        </div>
                                        <div class="jp_listing_list_icon_cont_wrapper">
                                            <ul>
                                                <li>Work-Days</li>
                                                <li>{{$listing->work_days}}</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin_top hidden-sm hidden-xs" style="margin-top:20px;">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_rightside_job_categories_wrapper jp_blog_right_box_search">
                                    <div class="jp_rightside_job_categories_heading" style="background:#0A0;">
                                        <h4><i class="fa fa-thumbs-up"></i> Rate Service Provider</h4>
                                    </div>
                                    <br>
                                    <div class="jp_blog_right_search_wrapper">
                                        <form action="{{route('customer.listing.view',['listing' => $listing->id,'user' => auth()->guard('user')->id()])}}" method="post">
                                            {{csrf_field()}}
                                            <label>Attention to details:</label><br/>
                                            <select name="attention" required style="width:70%; height:40px; padding:10px; margin-bottom:5px; border:1px solid #F3F3F3;">
                                                @foreach($ratings as $rating)
                                                    <option value="{{$rating->id}}">{{$rating->name}}</option>
                                                @endforeach
                                            </select><br/>
                                            <label>Speed:</label><br/>
                                            <select name="speed" required style="width:70%; height:40px; padding:10px; margin-bottom:5px; border:1px solid #F3F3F3;">
                                                @foreach($ratings as $rating)
                                                    <option value="{{$rating->id}}">{{$rating->name}}</option>
                                                @endforeach
                                            </select><br/>
                                            <label>Blending:</label><br/>
                                            <select name="blending" required style="width:70%; height:40px; padding:10px; margin-bottom:5px; border:1px solid #F3F3F3;">
                                                @foreach($ratings as $rating)
                                                    <option value="{{$rating->id}}">{{$rating->name}}</option>
                                                @endforeach
                                            </select><br/>
                                            <label>Creativity:</label><br/>
                                            <select name="creativity" required style="width:70%; height:40px; padding:10px; margin-bottom:5px; border:1px solid #F3F3F3;">
                                                @foreach($ratings as $rating)
                                                    <option value="{{$rating->id}}">{{$rating->name}}</option>
                                                @endforeach
                                            </select><br/>
                                            <label>Customer Service:</label><br/>
                                            <select name="customer" required style="width:70%; height:40px; padding:10px; margin-bottom:5px; border:1px solid #F3F3F3;">
                                                @foreach($ratings as $rating)
                                                    <option value="{{$rating->id}}">{{$rating->name}}</option>
                                                @endforeach
                                            </select>
                                            <br/>
                                            <button type="submit" name="sub_ratings" class="btn btn-info btn-md"><i class="fa fa-arrow-right"></i> Submit</button>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>





                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_listing_left_sidebar_wrapper">
                        <div class="jp_job_des">
                            <h2>About Us / Description</h2>
                            <p>{{$listing->descn}}</p>
                            <ul>
                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="www.google.com">WEBSITE LINK</a></li>
                                <!-- <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li> -->

                            </ul>
                        </div>
                        <div class="jp_job_res">
                            <h2>Social Networks</h2>
                            <p> </p>
                            <ul>
                                <li><img src="images/content/46-facebook-512.png" width="30" height="30">&nbsp FACEBOOK</li>
                                <li> <img src="images/content/social-media_instagram_flat-circle-white-on-black_512x512.png" width="30" height="30">&nbsp;&nbsp; INSTAGRAM</li>
                                <li><img src="images/content/twitter-2.png" width="30" height="30">&nbsp;&nbsp; TWITTER</li>
                                <li><img src="images/content/linkedin_circle_black-512.png" width="30" height="30">&nbsp;&nbsp; LINKEDLN</li>
                            </ul>


                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <h2> Service Request Form </h2>

                            <p style="font-size:12px;"> Fill the form below to request for our services </p>
                            <form action="{{route('customer.listing.service',['listing' => $listing->id,'user' => auth()->guard('user')->id()])}}" method="post">
                                {{csrf_field()}}
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                        <i class="fa fa-envelope"></i><input type="text" name="fullname" maxlength="38" required placeholder="Full Name *" id="in-put">
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                        <i class="fa fa-envelope"></i><input type="email" name="email" maxlength="38" required placeholder="Email *" id="in-put">
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                        <i class="fa fa-envelope"></i><input type="text" name="phone" maxlength="11" required placeholder="Phone *" id="in-put">
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                        <i class="fa fa-envelope"></i><input type="text" name="subject" maxlength="40" required placeholder="Subject *" id="in-put">
                                    </div>
                                </div>

                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                        <i class="fa fa-envelope"></i><textarea name="msg" placeholder="Message *" required maxlength="220" style="width:100%; height:100px; border:1px solid #E2E2E2; border-radius:6px; padding:4px;" id="in-put"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-md-5 col-sm-8 col-xs-12">
                                    <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                        <button type="submit" name="sub_request" class="btn btn-danger btn-block btn-large">Send Message</button>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_key_wrapper">
                    </div>
                    <div class="jp_listing_related_heading_wrapper">
                        <h2>Related Services</h2>
                        <div class="jp_listing_related_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    @for($i = 0; $i < count($related); $i++)
                                        @if($i == 0 || $i == 2)
                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="{{$related[$i]->logo}}" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont">
                                                                    <h4>{{$related[$i]->name}}</h4>
                                                                    <p>{{$related[$i]->category->name}}</p>

                                                                    <ul>

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
                                                        <!--  <p>
                                                          Rating: &nbsp;
                                                          <span class="fa fa-star star1" id="downFIRST"></span>
                                                         <span class="fa fa-star star2" id="downFIRST"></span>
                                                         <span class="fa fa-star star3" id="downFIRST"></span>
                                                         <span class="fa fa-star star4" id="downFIRST"></span>
                                                         <span class="fa fa-star star5" id="downFIRST"></span>

                                                         </p>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- jp listing Single cont Wrapper End -->
@endsection

@section('script')
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





	$('.star-block2').each(function(el, item){
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







    <script>




            </script>
@endsection