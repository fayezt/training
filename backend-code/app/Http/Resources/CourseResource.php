<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function __construct($resource,private $with_detials=false)
    {
        parent::__construct($resource);
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cover' => $this->getImage(),
            'category' => new CategoryResource($this->category),
            'lecturers' => LecturerResource::collection($this->lecturers),
            'price' => $this->price,
            'count_enroll' => $this->customers()->count(),
            'is_booking'=>$this->when(auth()->check(),function (){
                return $this->checkBooking(auth()->id());
            }),
            'created_at' => $this->created_at->format('Y-m-d'),
            $this->mergeWhen($this->with_detials, function () {
                return [
                    'description' => $this->description,
                    'appointments' => AppointmentResource::collection($this->appointments),
                ];
            }),
        ];
    }
}
