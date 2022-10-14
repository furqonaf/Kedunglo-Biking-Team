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

Route::get('/admin', function () {
    return view('index2');
});
// halaman user
Route::get('/user', function () {
    return view('beranda');
});
// halaman user
Route::get('/event', function () {
    return view('event/even');
});
// halaman user
Route::get('/detail-even', function () {
    return view('event/detail');
});