<?php

use Illuminate\Support\Facades\Route;

Route::get('profile','ProfileController');
Route::post('course/appointment/{appointment}','CourseController@bookingAppointment');
