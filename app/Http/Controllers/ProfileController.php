<?php

namespace App\Http\Controllers;

use App\Helpers\WebConstant;
use App\Models\Business;
use App\Models\SocialHandle;
use App\Repositories\BusinessRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\RatingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    private $users;
    private $sp;
    private $rt;
    private $auth;
    public function __construct(BusinessRepository $repository, RatingRepository $ratingRepository)
    {
        $this->sp = $repository;
        $this->rt = $ratingRepository;
        $this->auth = Auth::guard('business')->user();
    }

    private function getUser(){
        return auth()->guard('business')->user();
    }

    function index(){
        $list = $this->getUser();
        $list = WebConstant::ratings($list);

        return view('profiles.index',[
            'title' => 'Profile',
            'list' => $list
        ]);
    }

    function update(Request $request){
        try{
            //dd($request->all(), $request->type);
            $b = auth()->guard('business')->user();
            if($request->type == "logo"){
                if($request->hasFile('img')){
                    $file = $request->file('img');
                    $filename ="logo-" .time(). '.' .$file->getClientOriginalExtension();
                    $dir = "uploads/" . $filename;
                    Image::make($file)->resize(100,100)->save($dir);
                    $b->logo = $dir;
                }
            }else
                $b[$request->type] = $request[$request->type];

            if($b->save())
                Session::flash('success',"$request->type updated successfully");
            else
                Session::flash('error',"$request->type update failed");
        }catch (\Exception $ex){
            dd($ex);
            Log::error("A fatal error occurred", ['ex' => $ex]);
            Session::flash('error',"$request->type could not be updated");
        }
        return redirect()->back();
    }

    function socials(Request $request){
        try{
            $sh = $this->sp->getSocials($this->getUser()->id);
            if(!isset($sh)){
                $sh = new SocialHandle();
                $sh->b_id = $this->getUser()->id;
            }
            $sh[$request->type] = $request[$request->type];
            if($sh->save())
                Session::flash('success',"$request->type updated successfully");
            else
                Session::flash('error',"$request->type could not be updated");
        }catch (\Exception $ex){
            Log::error("A fatal error occurred", ['ex' => $ex]);
            Session::flash('error',"$request->type could not be updated");
        }
        return redirect()->back();
    }

    function formular($id){
        return (0 * $this->rt->notGood($id) + 1 * $this->rt->good($id) + 2 * $this->rt->quiteGood($id) + 3 * $this->rt->veryGood($id) + 4 * $this->rt->excellent($id)) / 10;
    }


    function attention(){

    }
}
