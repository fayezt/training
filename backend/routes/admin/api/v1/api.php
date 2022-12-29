<?php

use Illuminate\Support\Facades\Route;

Route::post('course/{course}/appointment','CourseController@setAppointment')->name('api.course.appointment.set');
Route::put('course/{course}/appointment/{appointment}','CourseController@updateAppointment')->name('api.course.appointment.update');
Route::apiResource('course','CourseController')->names('api.course');
