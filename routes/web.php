<?php

use Illuminate\Support\Facades\Route;

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

// 重要！
// 重要！
// 重要！
// 將除了 api prefix 的 request
// 都導向 welcome.blade.php
// 實作 SPA 於後端的重要設定
Route::get('/{path}', function () {
    return view('welcome');
})->where('path', '^((?!api).)*$');
