<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, 'show']);
Route::get('/categories', [MainController::class, 'categories']);
Route::get('/{category}', [MainController::class, 'category']);
Route::get('/{product}', [MainController::class, 'product']);
