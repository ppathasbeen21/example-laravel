<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/','index');
Route::view('/about','about');
Route::view('/contact','contact');

Route::resource('jobs', JobController::class);
