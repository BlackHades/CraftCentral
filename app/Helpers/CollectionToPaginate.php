<?php
/**
 * Created by PhpStorm.
 * User: Fatosin Samuel O
 * Date: 6/9/2018
 * Time: 10:42 PM
 */

namespace App\Helpers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection as BaseCollection;
class CollectionToPaginate extends BaseCollection
{
    public function paginate($perPage = null, $total = null, $page = null, $pageName = 'page')
    {
        $perPage = isset($perPage) ? $perPage : 50;
        $page = $page ?: LengthAwarePaginator::resolveCurrentPage($pageName);

        return new LengthAwarePaginator(
            $this->forPage($page, $perPage),
            $total ?: $this->count(),
            $perPage,
            $page,
            [
                'path' => LengthAwarePaginator::resolveCurrentPath(),
                'pageName' => $pageName,
            ]
        );
    }
}