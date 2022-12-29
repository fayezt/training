<?php

namespace App\Models;

use App\Classes\Interfaces\IImage;
use App\ModelFilters\CourseFilter;
use App\Traits\Media\HasImage;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Spatie\MediaLibrary\HasMedia;

class Course extends Model implements HasMedia,IImage
{
    use HasFactory,HasImage,Filterable;

    protected $fillable=['name','description','lecturers','price'];


    public function appointments(): HasMany
    {
        return $this->hasMany(CourseAppointment::class);
    }
    public function lecturers(): BelongsToMany
    {
        return $this->belongsToMany(Lecturer::class,'course_lecturers');
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function customers():Collection{
        $appointment_ids=$this->appointments()->pluck('id')->toArray();
        $customer_ids=AppointmentBooking::whereIn('appointment_id',$appointment_ids)->pluck('customer_id');
        return Customer::whereIn('id',$customer_ids)->get();
    }
    public function related(){
        return $this->where('category_id',$this->category_id)->where('id','!=',$this->id)->get();
    }
    public function checkBooking($customer_id): bool
    {
        return !!$this->customers()->firstWhere('id',$customer_id);
    }
    function getCollectionImage(): string
    {
        return 'cover';
    }
    public function modelFilter()
    {
        return $this->provideFilter(CourseFilter::class);
    }
}
