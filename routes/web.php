<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExamController;
// Option 1: Home route that loads a HomeController@index view
Route::get('/', [HomeController::class, 'index'])->name('home');

// Option 2: If you want to redirect '/' to the students index page instead, uncomment this and comment out the above route
// Route::redirect('/', '/students')->name('home');

// Resource routes
Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('services', ServiceController::class);
Route::resource('courses', CourseController::class);


Route::resource('exams', ExamController::class);

