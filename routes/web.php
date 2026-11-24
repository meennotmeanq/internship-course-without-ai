<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
  return view('index');
})->name('home');

Route::get('/register', [UserController::class, 'registerView'])->name('registerView');
Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');


Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/courses', [CourseController::class, 'store'])->name('course.store');