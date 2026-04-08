<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'bootstrap_template']);
Route::get('/cat/create',[HomeController::class,'create'])->name('category.create');
