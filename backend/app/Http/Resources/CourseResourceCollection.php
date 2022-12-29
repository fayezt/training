<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CourseResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function __construct($resource,private $with_detials=false)
    {
        parent::__construct($resource);
    }
    public static $wrap=false;
    public function toArray($request)
    {
        return $this->collection->transform(function ($course){
           return new CourseResource($course,$this->with_detials);
        });
    }
}
