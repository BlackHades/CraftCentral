<?php

namespace App\Http\Controllers;

use App\Helpers\CollectionToPaginate;
use App\Helpers\WebConstant;
use App\Repositories\BusinessRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\RatingRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class DefaultController extends Controller
{

    private $sp;
    private $kr;
    private $rt;
    public function __construct(BusinessRepository $spDataRepository, KeywordRepository $keywordRepository, RatingRepository $ratingRepository)
    {
        $this->sp = $spDataRepository;
        $this->kr = $keywordRepository;
        $this->rt = $ratingRepository;
    }

    function home(Request $request){
        if($request->method() == WebConstant::$POST){
            $this->validate($request,[
                'keyword' => 'required'
            ],[
                'keyword.required' => 'Enter a keyword to search'
            ]);
            //dd($request->all());
            $key = $this->kr->getCategoryIdFromKeyword($request->keyword);
            //dd($key);
            $search = new Collection();
            foreach ($key as $k){
                if(empty($request->lga) && $request->state == "None")
                    $search = $search->merge($this->sp->getByCategory($k));
                elseif(empty($request->lga) && $request->state != "None" && !empty($request->state))
                    $search= $search->merge($this->sp->getByCategoryAndState($k, $request->state));
                elseif (!empty($request->lga) && !empty($request->state))
                    $search = $search->merge($this->sp->getByCategoryAndState($k, $request->lga));
            }
            for($i=0;$i<count($search);$i++){
                $search[$i]->formular = (0 * $this->rt->notGood($search[$i]->id) + 1 * $this->rt->good($search[$i]->id) + 2 * $this->rt->quiteGood($search[$i]->id) + 3 * $this->rt->veryGood($search[$i]->id) + 4 * $this->rt->excellent($search[$i]->id)) / 10;
            }

            //dd($search);

            return view('defaults.home',[
                'title' => 'Home',
                'search' => $search
            ]);
            //dd($request->all());
        }

        if(auth()->guard('user')->check())
            return redirect()->action('ListingController@all');

        if(auth()->guard('business')->check())
            return redirect()->action('ProfileController@index');


        return view('defaults.home',[
            'title' => 'Home',
            'search' => (new CollectionToPaginate($this->sp->get()))->paginate(4)
        ]);
    }

    function works(){
        return view('defaults.how',[
           'title' => 'How it Works',
        ]);
    }

    function contact(Request $request){
        if($request->method() == WebConstant::$POST){
            dd($request->all());
        }
        return view('defaults.contact',[
            'title' => 'Contact Us'
        ]);
    }

    function about(){
        return view('defaults.about',[
            'title' => 'About'
        ]);
    }
}
