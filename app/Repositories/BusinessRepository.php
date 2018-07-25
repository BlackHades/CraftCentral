<?php
/**
 * Created by PhpStorm.
 * User: Doraemon
 * Date: 7/24/2018
 * Time: 3:39 PM
 */

namespace App\Repositories;


use App\Models\Business;

class BusinessRepository
{
    private $sp;
    public function __construct(Business $spData)
    {
        $this->sp = $spData;
    }

    function get(){
        return Business::orderByDesc('id')->get();
    }

    function getByCategory($id){
        return Business::where('category_id',$id)->get();
    }

    function getByCategoryAndState($id, $state){
        return Business::where(['category_id' => $id,'state' => $state])->orderByDesc('id')->get();
    }
    function getByCategoryAndLga($id, $lga){
        return Business::where(['category_id' => $id,'lga' => $lga])->orderByDesc('id')->get();
    }
}