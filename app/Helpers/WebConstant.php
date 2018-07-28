<?php
/**
 * Created by PhpStorm.
 * User: Fatosin Samuel O
 * Date: 6/10/2018
 * Time: 12:13 PM
 */

namespace App\Helpers;


use App\Models\Business;
use App\Repositories\RatingRepository;

class WebConstant
{
    public static $MODE = 'production';

    //Post Type
    public static $GET = 'GET';
    public static $POST = 'POST';


    //Defaults
    public static $DEFAULT_PASSWORD = "asdfghjklqwertyuiop";


    static function tempImage($name){
        return "https://ui-avatars.com/api/?name=$name&background=0D8ABC&color=fff&rounded=true";
    }

    static  function ratings(Business $list){
        $ratings = (new RatingRepository())->get($list->id);
        $list->attention = 0;
        $list->speed = 0;
        $list->blending = 0;
        $list->creativity =0;
        $list->customer = 0;
        $list->overall = 0;
        //Attention
        //dd($ratings);
        for($i = 0; $i < count($ratings); $i++){
            $list->attention += $ratings[$i]->attention;
            $list->speed += $ratings[$i]->speed;
            $list->blending += $ratings[$i]->blending;
            $list->creativity += $ratings[$i]->creativity;
            $list->customer += $ratings[$i]->customer;
        }

        $list->attention = $list->attention == 0 ? 0 : ($list->attention / (count($ratings) * 5)) * 100;
        $list->speed =  $list->speed == 0 ? 0 : ($list->attention / (count($ratings) * 5)) * 100;
        $list->blending =  $list->blending == 0 ? 0 : ($list->attention / (count($ratings) * 5)) * 100;
        $list->creativity =  $list->creativity == 0 ? 0 : ($list->attention / (count($ratings) * 5)) * 100;
        $list->customer =  $list->customer == 0 ? 0 : ($list->attention / (count($ratings) * 5)) * 100;
        $list->overall = (($list->attention + $list->speed + $list->blending + $list->creativity + $list->customer)/500) * 100;
        return $list;
    }

}