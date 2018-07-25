@extends('master')
@section('content')
    <div class="jp_contact_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>New Business Registration</h2>
                    </div>
                </div>

                <!--  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                         </div>  -->


                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_contact_right_box_wrapper">
                        <div class="jp_contact_form_add_heading_wrapper">
                            <h2>Already Have A Business Account ?</h2>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper">
                                <h3> <a href="{{route('business.login')}}">Click Here To Login</a></h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_box">
                        @include('partials._message')
                        <form action="{{route('business.register')}}" method="post">
                            {{csrf_field()}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" required name="name" placeholder="Business / Company Name *">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top:24px;">
                                <div class="jp_contact_inputs_wrapperjp_contact_inputs3_wrapper ">
                                    <select required name="category"  class="gen" style="width:70%; height:40px; border:1px solid #DBDBDB; font-size:14px; padding:10px;">
                                        <?php $cat = \App\Models\BusinessCategory::all()?>
                                        <option value="">Select Category ...</option>
                                            @foreach($cat as $c)
                                                <option value="{{$c->id}}">{{$c->name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-envelope"></i><input type="email" name="email" required placeholder="Business Email *">
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-envelope"></i><input type="text" maxlength="11" required name="phone" placeholder="Business Phone *">
                                </div>
                            </div>



                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-lock"></i><input type="password" required name="password" placeholder="Password *">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-lock"></i><input type="password" required name="conf_password" placeholder="Confirm Password *">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" required name="check"> By signing up, you agree with the terms and conditions.
                                    </label>
                                </div>
                                <div class="jp_contact_form_btn_wrapper">
                                    <ul>
                                        <li><button type="submit" name="Submit" class="btn btn-danger btn-lg"><i class="fa fa-plus-circle"></i>&nbsp; Register</button></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection