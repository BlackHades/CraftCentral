<?php
/**
 * Created by PhpStorm.
 * User: Doraemon
 * Date: 7/24/2018
 * Time: 8:04 PM
 */

namespace App\Repositories;


use App\Models\Keyword;

class KeywordRepository
{
    function getCategoryIdFromKeyword($keyword){
        return Keyword::where('name','LIKE',"%$keyword%")->pluck('category_id');
    }
}