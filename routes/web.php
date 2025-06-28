<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ServiceController;
Route::get('/', function () {
    return redirect('/student');
});




Route::get('/', fn() => redirect('/students'));

Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('services', ServiceController::class);
Route::resource('courses', CourseController::class);