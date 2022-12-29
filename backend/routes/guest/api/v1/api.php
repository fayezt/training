<?php

use Illuminate\Support\Facades\Route;

Route::get('course/{course}/dates','CourseController@datesCourse')->name('api.course.dates');
//Route::get('course/available','CourseController@availableCourse')->name('api.course.available');
Route::get('course','CourseController@index')->name('api.course.index');
Route::get('course/{course}','CourseController@show')->name('api.course.show`');
Route::get('course/{course}/related','CourseController@related')->name('api.course.related`');
Route::get('category','CategoryController@index')->name('api.category.index');
