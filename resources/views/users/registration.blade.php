@extends('master')
@section('content')
    <div class="jp_contact_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>New User Registration</h2>
                    </div>
                </div>

                <!--  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                         </div>  -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_contact_right_box_wrapper">
                        <div class="jp_contact_form_add_heading_wrapper">
                            <h2>Already a user ?</h2>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper">
                                <h3> <a href="{{route('customer.login')}}">Click Here To Login</a></h3>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_box">
                        @include('partials._message')
                        <form action="{{route('customer.register')}}" method="post">
                            {{csrf_field()}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="First Name *" name="firstname" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="Last Name *" name="lastname" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-envelope"></i><input type="text" placeholder="Email *" name="email"  required>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-top:24px;">
                                <div class="jp_contact_inputs_wrapperjp_contact_inputs3_wrapper ">
                                    <select  class="gen" style="width:60%; height:40px; border:1px solid #DBDBDB; font-size:14px;" name="gender" required>
                                        <option value=""> Select Gender * </option>
                                        <option value="female"> Female </option>
                                        <option value="male"> Male </option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:24px;">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="Username *" name="username" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-lock"></i><input type="password" placeholder="Password *" name="password" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa fa-lock"></i><input type="password" placeholder="Confirm Password *" name="conf_password" required>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-bottom:24px;">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Address" name="address" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper ">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="Nearest B-stop" name="bstop"  required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom:24px;">
                                <div class="jp_contact_inputs_wrapper ">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="L.G.A" name="lga" required>

                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper ">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="City" name="city" required>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper ">
                                    <i class="fa fa-pencil-square-o"></i><input type="text" placeholder="State" name="state" required>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="agree" required> By signing up, you agree with the <a href="#">terms and conditions</a>.
                                    </label>
                                </div>
                                <div class="jp_contact_form_btn_wrapper">
                                    <ul>
                                        <li><button type="submit" name="Submit" class="btn btn-info btn-lg btn-block"><i class="fa fa-plus-circle"></i>&nbsp; Register</button></li>
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