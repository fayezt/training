<?php

namespace App\Models;

use App\Classes\Interfaces\IAvatar;
use App\Traits\Media\HasAvatar;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;

class Lecturer extends Model implements HasMedia,IAvatar
{
    use HasFactory,HasAvatar;

    protected $fillable=['name','specialization'];

    function getCollectionAvatar(): string
    {
        return 'lecturer';
    }
}
