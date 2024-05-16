<?php

use App\Http\Controllers\ListProductController;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('welcome');
});

// P7
Route::get("product", [ListProductController::class, "index"]);

// P8
Route::get("listproduk", [ProdukController::class, "showProduk"]);
