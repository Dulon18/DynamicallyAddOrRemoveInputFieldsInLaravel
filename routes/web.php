<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProductController::class,'addMoreProduct']);
Route::post("/storeProduct",[ProductController::class,'storeProduct'])->name('storemoreProduct');
