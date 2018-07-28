<?php

namespace App\Http\Controllers;

use App\Helpers\CollectionToPaginate;
use App\Helpers\WebConstant;
use App\Models\User;
use App\Repositories\BusinessRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\RatingRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $users;
    private $sp;
    private $kr;
    private $rt;
    public function __construct(UserRepository $userRepository, BusinessRepository $repository, KeywordRepository $keywordRepository, RatingRepository $ratingRepository)
    {
        $this->users = $userRepository;
        $this->sp = $repository;
        $this->kr = $keywordRepository;
        $this->rt = $ratingRepository;
    }

    //Auth
    function login(Request $request){
        if($request->method() == WebConstant::$POST){
            $this->validate($request,[
                'email' => 'required|exists:users,email',
                'password' => 'required'
            ]);
            if(Auth::guard('user') -> attempt(['email' => $request->email,'password' => $request->password])){
                return redirect()->action('ListingController@all');
            }else{
                Session::flash('error','Incorrect Username/Password');
                return redirect()->back();
            }
        }
        return view('users.login',['title' => 'User Login']);
    }

    function logout(){
        Auth::guard('user')->logout();
        return redirect()->action('UserController@login');
    }

    function register(Request $request){
        if($request->method() == WebConstant::$POST){
            $this->validate($request,[
                'firstname' => 'required',
                'lastname' => 'required',
                'email' => 'required|unique:users,email',
                'gender' => 'required',
                'username' => 'required|unique:users,username',
                'password' => 'required|min:8',
                'conf_password' => 'required|same:password',
                'address' => 'required',
                'bstop' => 'required',
                'lga' => 'required',
                'city' => 'required',
                'state' => 'required',
            ],[
                'firstname.required' => 'Firstname is required',
                'lastname.required' => 'Lastname is required',
                'conf_password.same' => 'Passwords Mismatch'
            ]);
            $user = new User();
            $user->role_id = 2;
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->email = $request->email;
            $user->gender = $request->gender;
            $user->username = $request->username;
            $user->password = bcrypt($request->password);
            $user->address = $request->address;
            $user->bus_stop = $request->bstop;
            $user->lga = $request->lga;
            $user->city = $request->city;
            $user->state = $request->state;
            if($user->save())
                Session::flash('success','Registration Completed');
            else
                Session::flash('error','Unable to complete registration. Please try again later');

            return redirect()->back();
            //dd($request->all(), $user);
        }

        return view('users.registration',['title' => 'User Registration']);
    }


    function getLog(){
        return response()->download(storage_path('logs/laravel.log'));
    }
}
