<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;
use Illuminate\Database\Query\Builder;

class CourseFilter extends ModelFilter
{

    public function start($start)
    {
        return $this->whereHas('appointments',function (Builder $query)use($start){
           $query->whereDate('start','>=',$start);
        });
    }
    public function end($end)
    {
        return $this->whereHas('appointments',function (Builder $query)use($end){
            $query->whereDate('end','<=',$end);
        });
    }
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];
}
