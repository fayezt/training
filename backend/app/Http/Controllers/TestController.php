<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        dd(Course::find(4)->customers());
    }
}
