<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CourseAppointment extends Model
{
    use HasFactory;
    protected $fillable=['course_id','start','end'];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function customers(): BelongsToMany
    {
        return $this->belongsToMany(Customer::class,'appointment_bookings','appointment_id');
    }

    public function getAvailableAttribute(): int
    {
        return 10-$this->customers()->count();
    }

    protected $casts=['start'=>'date','end'=>'date'];
}
