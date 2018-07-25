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
                                </div>
                                <div class="jp_job_listing_single_post_right_cont">
                                    <div class="jp_job_listing_single_post_right_cont_wrapper">
                                        <h4>{{$list->name}}</h4>
                                        <p>{{$list->category->name}}</p>
                                    </div>
                                </div>
                                <div class="jp_job_post_right_overview_btn_wrapper">
                                    <div class="jp_job_post_right_overview_btn">
                                        <p>
                                            Rating: &nbsp;
                                            <span class="fa fa-star star1" id="myDIV1"></span>
                                            <span class="fa fa-star star2" id="myDIV2"></span>
                                            <span class="fa fa-star star3" id="myDIV3"></span>
                                            <span class="fa fa-star star4" id="myDIV4"></span>
                                            <span class="fa fa-star star5" id="myDIV5"></span>
                                        </p>

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
                                                <li>WEBSITE &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openWebsite()"></i></li>

                                                <li class="hidden" id="toggleWebsite">

                                                    <form action="{{route('business.update',['type' => 'website'])}}" method="post">
                                                        <input type="url" name="website" placeholder="New Website Url" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:80%; padding-left:3px;">
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
                                                <li>{{$list->work_hours}}</li>
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
                                                <li>{{$list->work_days}}</li>
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
                                    <input type="text" name="descn" placeholder="New Business Description "  maxlength="150" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:80%; height:80px; padding-left:3px;">
                                    <br>
                                    <br>
                                    <button type="submit" name="sub_desc" class="btn btn-sm btn-primary">Submit</button>
                                </form>
                                </p>
                                <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseDescription()" title="close"></i>
                            </div>


                            <ul>

                                <li><i class="fa fa-globe"></i>&nbsp;&nbsp; <a href="">http://www.google.com</a></li>
                                <!-- <li><i class="fa fa-file-pdf-o"></i>&nbsp;&nbsp; <a href="#">Download Info</a></li> -->

                            </ul>
                        </div>
                        <div class="jp_job_res">
                            <h2>Social Networks</h2>
                            <p> </p>
                            <ul>
                                <li><img src="images/content/46-facebook-512.png" width="30" height="30">&nbsp Facebook &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openFacebook()"></i></li>
                                <li class="hidden" id="toggleFacebook">

                                    <form action="{{route('business.update',['type' => 'facebook'])}}" method="post">
                                        <input type="text" name="update_facebook" placeholder="Facebook" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_fb" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseFacebook()" title="close"></i>
                                    </form>

                                </li>
                                <li> <img src="images/content/social-media_instagram_flat-circle-white-on-black_512x512.png" width="30" height="30">&nbsp;&nbsp; Instagram &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openInstagram()"></i></li>
                                <li class="hidden" id="toggleInstagram">

                                    <form action="{{route('business.update',['type' => 'instagram'])}}" method="post">
                                        <input type="text" name="update_ig" placeholder="Instagram" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_ig" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseInstagram()" title="close"></i>

                                    </form>

                                </li>
                                <li><img src="images/content/twitter-2.png" width="30" height="30">&nbsp;&nbsp;  Twitter&nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openTwitter()"></i></li>
                                <li class="hidden" id="toggleTwitter">

                                    <form action="{{route('business.update',['type' => 'twitter'])}}" method="post">
                                        <input type="text" name="twitter" placeholder="Twitter" style="border-radius:4px; border:1px solid #BBB; font-size:12px; width:70%; padding-left:3px;">
                                        <br>
                                        <br>
                                        <button type="submit" name="sub_twitter" class="btn btn-sm btn-primary">Submit</button>

                                        <i class="fa fa-close text-danger close" id="closeEmail" onClick="CloseTwitter()" title="close"></i>

                                    </form>

                                </li>
                                <li><img src="images/content/linkedin_circle_black-512.png" width="30" height="30">&nbsp;&nbsp;  LINKEDLN &nbsp;<i class="fa fa-edit icolor" title="Edit" onClick="openLinkedin()"></i></li>
                                <li class="hidden" id="toggleLinkedin">

                                    <form action="{{route('business.update',['type' => 'email'])}}" method="post">
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

@endsection