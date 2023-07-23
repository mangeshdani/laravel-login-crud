<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductAjaxController;


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

Route::get('/', [ProductAjaxController::class, 'index'])->name('home');

Auth::routes();
Route::resource('/product', ProductAjaxController::class);


