<?php

namespace App\Http\Controllers;

use App\Helpers\WebConstant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    function login(Request $request){
        if($request->method() == WebConstant::$POST){
            dd($request->all());
        }

        return view('accounts.login',['title' => 'Login']);
    }

    function register(Request $request){
        if($request->method() == WebConstant::$POST){
            dd($request->all());
        }

        if($request->type == "business"){

        }
        return view('accounts.login',['title' => 'Registration', 'type' => $request->type]);
    }
}
