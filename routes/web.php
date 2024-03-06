<?php

use App\Http\Controllers\PostConstroller;
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
    return view('post_list');
});
Route::get('/', [PostConstroller::class, 'post_list'])->name('post_list');
Route::resource('/', PostConstroller::class);