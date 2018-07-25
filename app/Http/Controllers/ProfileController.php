<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Repositories\BusinessRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\RatingRepository;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    private $users;
    private $sp;
    private $rt;
    public function __construct(BusinessRepository $repository, RatingRepository $ratingRepository)
    {
        $this->sp = $repository;
        $this->rt = $ratingRepository;
    }

    function index(){
        $list = auth()->guard('business')->user();
        $list->formular = $this->formular($list->id);
        return view('profiles.index',[
            'title' => 'Profile',
            'list' => auth()->guard('business')->user()
        ]);
    }


    function update(Request $request, Business $list){
        return [$request->all(), $list];
    }

    function formular($id){
        return (0 * $this->rt->notGood($id) + 1 * $this->rt->good($id) + 2 * $this->rt->quiteGood($id) + 3 * $this->rt->veryGood($id) + 4 * $this->rt->excellent($id)) / 10;
    }
}
