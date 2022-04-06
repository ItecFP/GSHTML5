<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tag/{name}', [TagController::class, "showTag"]);
Route::get('/tags', [TagController::class, "getTags"]);
Route::get('/categoria/{name}', [TagController::class, "getCategory"]);
Route::get('/categorias', [TagController::class, "getCategories"]);
Route::get('/search', [TagController::class, "search"]);
