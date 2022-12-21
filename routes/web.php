<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
// Route::view('/','welcome');

Route:: get('/',[HomeController::class,'index']);
Route:: get('/about',[HomeController::class,'about']);