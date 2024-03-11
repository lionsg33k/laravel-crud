<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//* get
Route::get("/", [ProductController::class, "index"])->name("product.index");
Route::get("/product/show/{product}", [ProductController::class, "show"])->name("product.show");

//! post
Route::post("/product/create", [ProductController::class, "store"])->name("product.store");

//& put
Route::put("/product/update/{product}" , [ProductController::class , "update"])->name("product.update");

