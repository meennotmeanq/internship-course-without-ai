<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

// Route::get('/', [CourseController::class, 'index'])->name('index');

Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/courses', [CourseController::class, 'store'])->name('course.store');