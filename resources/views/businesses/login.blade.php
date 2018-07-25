@extends('master')
@section('content')
    <div class="jp_contact_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>Business Login</h2>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">

                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    @include('partials._message')
                    <form action="{{route('business.login')}}" method="post">
                        {{csrf_field()}}
                        <div class="jp_contact_form_box">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="email" name="email" required placeholder="Business Email ">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs3_wrapper">
                                    <i class="fa fa-lock"></i><input type="password" name="password" required placeholder="Password ">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_form_btn_wrapper">
                                    <ul>
                                        <li><button type="submit" name="biz-login" class="btn btn-danger btn-lg"> <i class="fa fa-arrow-right"></i>&nbsp; Login</button></li>
                                        <!--  <hr>
                                           <li> <a href="#"> I forgot my password </a> </li> -->
                                    </ul>
                                </div>
                            </div>
                            <br>
                            <br>
                            <hr>
                            <p> <a href="#"> I forgot my password <i class="fa fa-arrow-alt-circle-right"></i></a> </p>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection