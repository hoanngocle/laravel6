<?php

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

use App\Http\Controllers\GirlController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
////    return view('welcome');
//    $now = time();
//
//
//    dd($now, app('now2'), app('now'));
//});

Route::get('/girl', [GirlController::class, 'index'])->name('home');
