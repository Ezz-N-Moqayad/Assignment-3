<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();


// Teacher

Route::get('teacher/create', 'Teacher\TeacherController@create')->middleware('auth');
Route::post('teacher/store', 'Teacher\TeacherController@store')->middleware('auth');
Route::get('', 'Teacher\TeacherController@index')->middleware('auth');
Route::get('teacher/edit/{id}', 'Teacher\TeacherController@edit')->middleware('auth');
Route::put('teacher/update/{id}', 'Teacher\TeacherController@update')->middleware('auth');
Route::post('teacher/delete/{id}', 'Teacher\TeacherController@destroy')->middleware('auth');
Route::get('teacher/info', 'Teacher\TeacherController@indexInfo')->middleware('auth');


// Course

Route::get('course/create', 'Course\CourseController@create')->middleware('auth');
Route::post('course/store', 'Course\CourseController@store')->middleware('auth');
Route::get('course', 'Course\CourseController@index')->middleware('auth');
Route::get('course/edit/{id}', 'Course\CourseController@edit')->middleware('auth');
Route::put('course/update/{id}', 'Course\CourseController@update')->middleware('auth');
Route::post('course/delete/{id}', 'Course\CourseController@destroy')->middleware('auth');
Route::get('course/info', 'Course\CourseController@indexInfo')->middleware('auth');


// Student

Route::get('student/create', 'Student\StudentController@create')->middleware('auth');
Route::post('student/store', 'Student\StudentController@store')->middleware('auth');
Route::get('student', 'Student\StudentController@index')->middleware('auth');
Route::get('student/edit/{id}', 'Student\StudentController@edit')->middleware('auth');
Route::put('student/update/{id}', 'Student\StudentController@update')->middleware('auth');
Route::post('student/delete/{id}', 'Student\StudentController@destroy')->middleware('auth');