<?php

namespace App\Http\Controllers;

use App\Helpers\WebConstant;
use App\Models\Business;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BusinessController extends Controller
{
    //Auth
    function login(Request $request){
        if($request->method() == WebConstant::$POST){
            $this->validate($request,[
                'email' => 'required|exists:businesses,email',
                'password' => 'required'
            ]);
            if(Auth::guard('business')->attempt(['email' => $request->email,'password' => $request->password])){
                return redirect()->action('ProfileController@index');
            }else{
                Session::flash('error','Incorrect Username/Password');
                return redirect()->back();
            }
        }
        return view('businesses.login',['title' => 'User Login']);
    }

    function register(Request $request){
        if($request->method() == WebConstant::$POST){
            $this->validate($request,[
                'name' => 'required',
                'category' => 'required',
                'email' => 'required|unique:businesses,email',
                'phone' => 'required',
                'password' => 'required|min:8',
                'conf_password' => 'required|same:password',
            ],[
                'name.required' => 'Business/Company Name is required',
                'conf_password.same' => 'Passwords Mismatch'
            ]);
            $b  = new Business();
            $b->name = $request->name;
            $b->category_id = $request->category;
            $b->email = $request->email;
            $b->password = bcrypt($request->password);
            $b->phone = $request->phone;
            if($b->save()){
                Session::flash('success','Registration Completed');
                return redirect()->action('BusinessController@login');
            }
            else
                Session::flash('error','Unable to complete registration. Please try again later');

            return redirect()->back();
            //dd($request->all(), $user);
        }

        return view('businesses.registration',['title' => 'Business Registration']);
    }

    function logout(){
        Auth::guard('business')->logout();
        return redirect()->action('BusinessController@login');
    }
    function profile(Request $request){
        dd($request);
    }
}
