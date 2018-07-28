@extends('master')
@section('stylesheet')
    <style>
        #in-put{font-size:12px;}

        .star1, .star2, .star3, .star4, .star5{color:#F90;}


    </style>
@endsection
@section('content')
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>SP Profile</h2>
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
                                        <img src="{{$list->logo}}" alt="Business Logo" />
                                    </div>
                                    <br>
                                    <br>
                                    <button id="btn_idd" onclick="openDialog()" class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> Update Logo</button>
                                    <form id="logo" action="{{route('business.update',['type' => 'logo'])}}" method="post" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input type="file" accept="image/*" style="display: none;" hidden id="img_up" name="img" onchange="submitForm()" placeholder="New Email Address">
                                    </form>
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4>{{$list->name}}</h4>
                                        <p>{{$list->category->name}}</p>
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
                                                        @if($list->attention == 100 || $list->attention > 80)
                                                            progress-bar-success
                                                        @elseif($list->attention == 80 || $list->attention > 60)
                                                            progress-bar-info
                                                        @elseif($list->attention == 60 || $list->attention > 40)
                                                            progress-bar-warning
                                                        @elseif($list->attention == 40 || $list->attention > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$list->attention}}"
                                                         aria-valuemin="{{$list->attention}}" aria-valuemax="100" style="width:{{$list->attention}}%">
                                                        <span>{{$list->attention}}%</span>
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
                                                        @if($list->speed == 100 || $list->speed > 80)
                                                            progress-bar-success
                                                        @elseif($list->speed == 80 || $list->speed > 60)
                                                            progress-bar-info
                                                        @elseif($list->speed == 60 || $list->speed > 40)
                                                            progress-bar-warning
                                                        @elseif($list->speed == 40 || $list->speed > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$list->speed}}"
                                                         aria-valuemin="{{$list->speed}}" aria-valuemax="100" style="width:{{$list->speed}}%">
                                                        <span>{{$list->speed}}%</span>
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
                                                        @if($list->blending == 100 || $list->blending > 80)
                                                            progress-bar-success
                                                        @elseif($list->blending == 80 || $list->blending > 60)
                                                            progress-bar-info
                                                        @elseif($list->blending == 60 || $list->blending > 40)
                                                            progress-bar-warning
                                                        @elseif($list->blending == 40 || $list->blending > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$list->blending}}"
                                                         aria-valuemin="{{$list->blending}}" aria-valuemax="100" style="width:{{$list->blending}}%">
                                                        <span>{{$list->blending}}%</span>
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
                                                        @if($list->creativity == 100 || $list->creativity > 80)
                                                            progress-bar-success
                                                        @elseif($list->creativity == 80 || $list->creativity > 60)
                                                            progress-bar-info
                                                        @elseif($list->creativity == 60 || $list->creativity > 40)
                                                            progress-bar-warning
                                                        @elseif($list->creativity == 40 || $list->creativity > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$list->creativity}}"
                                                         aria-valuemin="{{$list->creativity}}" aria-valuemax="100" style="width:{{$list->creativity}}%">
                                                        <span>{{$list->creativity}}%</span>
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
                                                        @if($list->customer == 100 || $list->customer > 80)
                                                            progress-bar-success
                                                        @elseif($list->customer == 80 || $list->customer > 60)
                                                            progress-bar-info
                                                        @elseif($list->customer == 60 || $list->customer > 40)
                                                            progress-bar-warning
                                                        @elseif($list->customer == 40 || $list->customer > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$list->customer}}"
                                                         aria-valuemin="{{$list->customer}}" aria-valuemax="100" style="width:{{$list->customer}}%">
                                                        <span>{{$list->customer}}%</span>
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
                                                        @if($list->overall == 100 || $list->overall > 80)
                                                            progress-bar-success
                                                        @elseif($list->overall == 80 || $list->overall > 60)
                                                            progress-bar-info
                                                        @elseif($list->overall == 60 || $list->overall > 40)
                                                            progress-bar-warning
                                                        @elseif($list->overall == 40 || $list->overall > 0)
                                                            progress-bar-danger
                                                        @endif progress-bar-striped" role="progressbar" aria-valuenow="{{$list->overall}}"
                                                         aria-valuemin="{{$list->overall}}" aria-valuemax="100" style="width:{{$list->overall}}%">
                                                        <span>{{$list->overall}}%</span>
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
                                                <li><li>{{$list->email}}</li> &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openEmail()"></i></li>
                                                <li class="hidden" id="toggleEmail">

                                                    <form action="{{route('business.update',['type' => 'email'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="email" name="email" placeholder="New Email Address" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:80%; padding-left:3px;">
                                                        <br>
                                                        <br>
                                                        <button type="submit" name="sub_email" class="btn btn-sm btn-primary">Submit</button>

                                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseEmail()" title="close"></i>

                                                    </form>

                                                </li>
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
                                                <li> {{$list->address}} &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openLocation()" ></i></li>
                                                <li class="hidden" id="toggleLocation">

                                                    <form action="{{route('business.update',['type' => 'address'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="text" name="address" placeholder="New Contact Address" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:90%; height:40px; padding-left:3px;">
                                                        <br>
                                                        <br>
                                                        <button type="submit" name="sub_address" class="btn btn-sm btn-primary">Submit</button>

                                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseLocation()" title="close"></i>
                                                    </form>
                                                </li>
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
                                                <li>{{$list->phone}} &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openPhone()"></i></li>
                                                <li class="hidden" id="togglePhone">

                                                    <form action="{{route('business.update',['type' => 'phone'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="text" name="phone" placeholder="New Phone Number" maxlength="11" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:80%; padding-left:3px;">
                                                        <br>
                                                        <br>
                                                        <button type="submit" name="sub_phone" class="btn btn-sm btn-primary">Submit</button>
                                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="ClosePhone()" title="close"></i>
                                                    </form>

                                                </li>

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
                                                <li><a href="{{$list->social != null ? $list->social->website : ""}}" target="_blank">{{$list->social != null ? $list->social->website : ""}}</a> &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openWebsite()"></i></li>

                                                <li class="hidden" id="toggleWebsite">

                                                    <form action="{{route('business.social',['type' => 'website'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="text" name="website" placeholder="New Website Url" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:80%; padding-left:3px;">
                                                        <br>
                                                        <br>
                                                        <button type="submit" name="sub_url" class="btn btn-sm btn-primary">Submit</button>

                                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseWebsite()" title="close"></i>

                                                    </form>

                                                </li>
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
                                                <li>{{$list->work_hours}} <i class="fa fa-edit icolor" title="Edit" onClick="openWorkHour()"></i></li>
                                                <li class="hidden" id="toggleWorkHour">

                                                    <form action="{{route('business.update',['type' => 'work_hours'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="text" name="work_hours" placeholder="New Work Hours" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:90%; height:40px; padding-left:3px;">
                                                        <br>
                                                        <br>
                                                        <button type="submit" name="sub_address" class="btn btn-sm btn-primary">Submit</button>

                                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseWorkHour()" title="close"></i>
                                                    </form>
                                                </li>
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
                                                <li>{{$list->work_days}} <i class="fa fa-edit icolor" title="Edit" onClick="openWorkDay()"></i></li>
                                                <li class="hidden" id="toggleWorkDay">

                                                    <form action="{{route('business.update',['type' => 'work_days'])}}" method="post">
                                                        {{csrf_field()}}
                                                        <input type="text" name="work_days" placeholder="New Work Days" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:90%; height:40px; padding-left:3px;">
                                                        <br>
                                                        <br>
                                                        <button type="submit" name="sub_address" class="btn btn-sm btn-primary">Submit</button>

                                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseWorkDay()" title="close"></i>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
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
                            <p>{{$list->descn}}
                                <br>
                                <i class="fa fa-edit icolor" title="Edit" onClick="openDescription()"></i>
                            </p>


                            <div class="hidden" id="toggleDescription">
                                <p>
                                <form action="{{route('business.update',['type' => 'descn'])}}" method="post">
                                    {{csrf_field()}}
                                    <input type="text" name="descn" placeholder="New Business Description "  maxlength="150" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:80%; height:80px; padding-left:3px;">
                                    <br>
                                    <br>
                                    <button type="submit" name="sub_desc" class="btn btn-sm btn-primary">Submit</button>
                                </form>
                                </p>
                                <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseDescription()" title="close"></i>
                            </div>
                        </div>
                        <div class="jp_job_res">
                            <h2>Social Networks</h2>
                            <p> </p>
                            <ul>
                                <li><img src="images/content/46-facebook-512.png" width="30" height="30">&nbsp {{$list->social != null ? $list->social->facebook : ""}} &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openFacebook()"></i></li>
                                <li class="hidden" id="toggleFacebook">

                                    <form action="{{route('business.social',['type' => 'facebook'])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="text" name="facebook" placeholder="Facebook" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_fb" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseFacebook()" title="close"></i>
                                    </form>

                                </li>
                                <li> <img src="images/content/social-media_instagram_flat-circle-white-on-black_512x512.png" width="30" height="30">&nbsp;&nbsp; {{$list->social != null ? $list->social->instagram : ""}} &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openInstagram()"></i></li>
                                <li class="hidden" id="toggleInstagram">

                                    <form action="{{route('business.social',['type' => 'instagram'])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="text" name="instagram" placeholder="Instagram" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_ig" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseInstagram()" title="close"></i>

                                    </form>

                                </li>
                                <li><img src="images/content/twitter-2.png" width="30" height="30">&nbsp;&nbsp;  {{$list->social != null ? $list->social->twitter : ""}}&nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openTwitter()"></i></li>
                                <li class="hidden" id="toggleTwitter">

                                    <form action="{{route('business.social',['type' => 'twitter'])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="text" name="twitter" placeholder="Twitter" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_twitter" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseTwitter()" title="close"></i>

                                    </form>

                                </li>
                                <li><img src="images/content/linkedin_circle_black-512.png" width="30" height="30">&nbsp;&nbsp;  {{$list->social != null ? $list->social->linkedln : ""}} &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openLinkedin()"></i></li>
                                <li class="hidden" id="toggleLinkedin">

                                    <form action="{{route('business.social',['type' => 'linkedln'])}}" method="post">
                                        {{csrf_field()}}
                                        <input type="text" name="linkedln" placeholder="Linkedin" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_linkedin" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseLinkedin()" title="close"></i>
                                    </form>

                                </li>
                            </ul>


                        </div>
                        <!--   <div class="jp_job_res jp_job_qua">
                               <h2>Minimum qualifications</h2>
                               <ul>
                                   <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; BA/BS degree in a technical field or equivalent practical experience.</li>
                                   <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; 2 years of relevant work experience in software development.</li>
                                   <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Programming experience in C, C++ or Java.</li>
                                   <li><i class="fa fa-caret-right"></i>&nbsp;&nbsp; Experience with AJAX, HTML and CSS.</li>
                               </ul>
                           </div> -->
                        <!-- <div class="jp_job_apply">
                             <h2>How To Apply</h2>
                             <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis quis ac
                                 lectus.</p>
                         </div> -->
                        <!--  <div class="jp_job_map">
                              <h2>Loacation</h2>
                              <div id="map" style="width:100%; float:left; height:300px;"></div>
                          </div> -->
                    </div>
                    <div class="jp_listing_left_bottom_sidebar_wrapper">
                        <div class="jp_listing_left_bottom_sidebar_social_wrapper">
                            <h3 style="margin-bottom:20px;"> Service Request History </h3>

                            <table class="table table-hover table-responsive table-bordered" style="margin-left:-25px;">
                                <thead>
                                <th> S/N </th>
                                <th> Full Name </th>
                                <th>  Email </th>
                                <th> Phone </th>
                                <th> Subject </th>
                                <th> Message </th>
                                <th> Date  </th>
                                </thead>
                                <tbody>
                                @php($i = 1)
                                @foreach($list->service as $as)
                                    <tr>
                                        <td>
                                            {{$i++}}
                                        </td>
                                        <td> {{$as->fullname}} </td>
                                        <td> {{$as->email}} </td>
                                        <td> {{$as->phone}}</td>
                                        <td> {{$as->subject}} </td>
                                        <td> {{$as->message}} </td>
                                        <td> {{$as->created_at}} </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#img_up').hide();
        var rating = {{$list->formular}};
        if(rating < 1)
        {
            var element5 = document.getElementById("myDIV5");
            element5.classList.remove("star5");

            var element4 = document.getElementById("myDIV4");
            element4.classList.remove("star4");

            var element3 = document.getElementById("myDIV3");
            element3.classList.remove("star3");

            var element2 = document.getElementById("myDIV2");
            element2.classList.remove("star2");

            var element1 = document.getElementById("myDIV1");
            element1.classList.remove("star1");

        }

        if(rating >= 1 && rating < 2 )
        {
            console.log(rating);
            var element5 = document.getElementById("myDIV5");
            element5.classList.remove("star5");

            var element4 = document.getElementById("myDIV4");
            element4.classList.remove("star4");

            var element3 = document.getElementById("myDIV3");
            element3.classList.remove("star3");

            var element2 = document.getElementById("myDIV2");
            element2.classList.remove("star2");
        }

        if(rating >= 2 && rating < 3 )
        {
            var element5 = document.getElementById("myDIV5");
            element5.classList.remove("star5");

            var element4 = document.getElementById("myDIV4");
            element4.classList.remove("star4");

            var element3 = document.getElementById("myDIV3");
            element3.classList.remove("star3");
        }

        if(rating >= 3 && rating < 4 )
        {
            var element5 = document.getElementById("myDIV5");
            element5.classList.remove("star5");

            var element4 = document.getElementById("myDIV4");
            element4.classList.remove("star4");

        }

        if(rating >= 4 && rating < 5 )
        {

            var element5 = document.getElementById("myDIV5");
            element5.classList.remove("star5");
        }



    </script>

    <script>

        function openEmail() {
            var element = document.getElementById("toggleEmail");
            element.classList.remove("hidden");
        }

        function CloseEmail() {
            var element = document.getElementById("toggleEmail");
            element.classList.add("hidden");
        }


        function openLocation() {
            var element = document.getElementById("toggleLocation");
            element.classList.remove("hidden");
        }


        function CloseLocation() {
            var element = document.getElementById("toggleLocation");
            element.classList.add("hidden");
        }

        function openWorkHour() {
            var element = document.getElementById("toggleWorkHour");
            element.classList.remove("hidden");
        }


        function CloseWorkHour() {
            var element = document.getElementById("toggleWorkHour");
            element.classList.add("hidden");
        }

        function openWorkDay() {
            var element = document.getElementById("toggleWorkDay");
            element.classList.remove("hidden");
        }


        function CloseWorkDay() {
            var element = document.getElementById("toggleWorkDay");
            element.classList.add("hidden");
        }


        function openPhone() {
            var element = document.getElementById("togglePhone");
            element.classList.remove("hidden");
        }


        function ClosePhone() {
            var element = document.getElementById("togglePhone");
            element.classList.add("hidden");
        }


        function openWebsite() {
            var element = document.getElementById("toggleWebsite");
            element.classList.remove("hidden");
        }


        function CloseWebsite() {
            var element = document.getElementById("toggleWebsite");
            element.classList.add("hidden");
        }




        function openFacebook() {
            var element = document.getElementById("toggleFacebook");
            element.classList.remove("hidden");
        }


        function CloseFacebook() {
            var element = document.getElementById("toggleFacebook");
            element.classList.add("hidden");
        }



        function openInstagram() {
            var element = document.getElementById("toggleInstagram");
            element.classList.remove("hidden");
        }


        function CloseInstagram() {
            var element = document.getElementById("toggleInstagram");
            element.classList.add("hidden");
        }





        function openTwitter() {
            var element = document.getElementById("toggleTwitter");
            element.classList.remove("hidden");
        }


        function CloseTwitter() {
            var element = document.getElementById("toggleTwitter");
            element.classList.add("hidden");
        }




        function openLinkedin() {
            var element = document.getElementById("toggleLinkedin");
            element.classList.remove("hidden");
        }


        function CloseLinkedin() {
            var element = document.getElementById("toggleLinkedin");
            element.classList.add("hidden");
        }




        function openDescription() {
            var element = document.getElementById("toggleDescription");
            element.classList.remove("hidden");
        }


        function CloseDescription() {
            var element = document.getElementById("toggleDescription");
            element.classList.add("hidden");
        }



    </script>

    <script>


        function setup() {
            document.getElementById('btn_idd').addEventListener('click', openDialog);

        }
        function openDialog() {
            document.getElementById('img_up').click();
        }
        function submitForm() {
            document.getElementById('logo').submit();
        }
    </script>

@endsection