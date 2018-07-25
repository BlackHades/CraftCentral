<?php

namespace App\Http\Controllers;

use App\Helpers\CollectionToPaginate;
use App\Helpers\WebConstant;
use App\Models\Business;
use App\Models\BusinessRating;
use App\Models\ServiceRequest;
use App\Models\User;
use App\Repositories\BusinessRepository;
use App\Repositories\KeywordRepository;
use App\Repositories\RatingRepository;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class ListingController extends Controller
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
    function all(Request $request){
        if($request->method() == WebConstant::$POST){
            $this->validate($request,[
                'keyword' => 'required'
            ],[
                'keyword.required' => 'Enter a keyword to search'
            ]);
            //dd($request->all());
            $search = $this->search($request);

            //dd($search);
            return view('listings.all',[
                'title' => 'Listings',
                'search' => (new CollectionToPaginate($search))->paginate(4),
                'keyword' => $request->keyword
            ]);
            //return redirect()->action('ListingController@all',['search' => $search]);
        }

        return view('listings.all',[
            'title' => 'Listings',
            'keyword' => null,
            'search' => (new CollectionToPaginate(isset($request->search) ? $request->search : $this->sp->get()))->paginate(4)
        ]);
    }

    function view(Request $request, Business $listing){
        if(isset($listing)){
            $listing->formular = $this->formular($listing->id);
            if($request->method() == WebConstant::$POST){
                //dd($request->all(), $listing);
                $this->validate($request,[
                    'rating' => 'required'
                ]);
                $ratings = new BusinessRating();
                $ratings->user_id = $request->user;
                $ratings->b_id = $listing->id;
                $ratings->rating_id = $request->rating;
                if($ratings->save())
                  Session::flash('success','Thank You for rating this service.');
                else
                    Session::flash('error','Unable to rate service at this time.');

                return redirect()->back();
            }
            return view('listings.view',[
                'title' => "View Listing",
                'listing' => $listing,
                'ratings' => $this->rt->getDescending(),
                'related' => $this->search($request),
            ]);
        }
        return redirect()->back();

    }
    
    function service(Request $request, Business $listing, User $user){
        //dd($request->all(), $listing, $user);
        $this->validate($request,[
            'fullname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject' => 'required',
            'msg' => 'required'
        ],[
            'fullname.required' => 'Fullname field is required',
            'msg.required' => 'Message field is required'
        ]);

        $s = new ServiceRequest();
        $s->fullname = $request->fullname;
        $s->b_id = $listing->id;
        $s->email = $request->email;
        $s->phone = $request->phone;
        $s->user_id = $user->id;
        $s->message = $request->msg;
        $s->subject = $request->subject;
        if($s->save())
            Session::flash('success','Your request has been submitted');
        else
            Session::flash('error','Your request could not be submitted at this moment.');
        return redirect()->back();
    }

    //Helpers
    public function search($request){
        $key = $this->kr->getCategoryIdFromKeyword($request->keyword);
        //dd($key);
        $search = new Collection();
        foreach ($key as $k){
            if(empty($request->lga) && ($request->state == "None" || empty($request->state)))
                $search = $search->merge($this->sp->getByCategory($k));
            elseif(empty($request->lga) && $request->state != "None" && !empty($request->state))
                $search= $search->merge($this->sp->getByCategoryAndState($k, $request->state));
            elseif (!empty($request->lga) && !empty($request->state))
                $search = $search->merge($this->sp->getByCategoryAndState($k, $request->lga));
        }
        for($i=0;$i<count($search);$i++){
            $search[$i]->formular = $this->formular($search[$i]->id);
        }

        return $search;
    }

    function formular($id){
        return (0 * $this->rt->notGood($id) + 1 * $this->rt->good($id) + 2 * $this->rt->quiteGood($id) + 3 * $this->rt->veryGood($id) + 4 * $this->rt->excellent($id)) / 10;
    }
}
