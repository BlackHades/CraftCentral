@extends('master')
@section('content')
    <div class="jp_contact_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>Leave A Message</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_box">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper">
                                <i class="fa fa-user"></i><input type="text" placeholder="Name *">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                <i class="fa fa-envelope"></i><input type="text" placeholder="Email *">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                <i class="fa fa-text-height"></i><textarea rows="6" placeholder="Type Your Message *"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_contact_form_btn_wrapper">
                                <ul>
                                    <li><a href="#"><i class="fa fa-plus-circle"></i>&nbsp; SEND</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_contact_right_box_wrapper">
                        <div class="jp_contact_form_add_heading_wrapper">
                            <h2>Contact Info</h2>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper">
                                <h3>N0 7 Adeoye Sunday Close, Greenland Estate (Ogombo) Ajah Lagos</h3>
                            </div>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper2">
                                <h3> 2348116359529</h3>
                            </div>
                        </div>
                        <!--<div class="jp_form_add_wrapper gc_map_add_wrapper2">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-fax"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper3">
                                <h3> Your Phone 2</h3>
                            </div>
                        </div> -->
                        <div class="jp_form_add_wrapper gc_map_add_wrapper3">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper4">
                                <h3> <a href="#">info@craftcentral.com</a></h3>
                            </div>
                        </div>
                        <div class="jp_contact_form_social_icon">
                             @include('partials._social')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection