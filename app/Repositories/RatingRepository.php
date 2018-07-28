<?php
/**
 * Created by PhpStorm.
 * User: Doraemon
 * Date: 7/24/2018
 * Time: 6:56 PM
 */

namespace App\Repositories;


use App\Models\BusinessRating;
use App\Models\Rating;

class RatingRepository
{
    function getDescending(){
        return Rating::orderByDesc('id')->get();
    }

    function get($b_id){
        return BusinessRating::where(['b_id' => $b_id])->get();
    }

    function excellent($b_id){
        return count(BusinessRating::where(['b_id' => $b_id,'rating_id' => 5])->get());
    }

    function veryGood($b_id){
        return count(BusinessRating::where(['b_id' => $b_id,'rating_id' => 4])->get());
    }

    function quiteGood($b_id){
        return count(BusinessRating::where(['b_id' => $b_id,'rating_id' => 3])->get());
    }

    function good($b_id){
        return count(BusinessRating::where(['b_id' => $b_id,'rating_id' => 2])->get());
    }

    function notGood($b_id){
        return count(BusinessRating::where(['b_id' => $b_id,'rating_id' => 1])->get());
    }
}