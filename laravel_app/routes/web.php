<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalloController;

// Route::get('/', function () {
//     // return view('welcome');
//     echo "Welcome to the Home Page";
// });

Route::get('/', [HalloController::class, 'index']);