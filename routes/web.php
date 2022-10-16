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

// halaman beranda user
Route::get('/user', function () {
    return view('beranda');
});
// halaman even user
Route::get('user-event', function () {
    return view('event/even');
});
// halaman detail even user
Route::get('/user-detail-even', function () {
    return view('event/detail-even');
});
// halaman detail profil user
Route::get('/user-profil', function () {
    return view('Profil/user-detail-profil');
});
// halaman sunting profil user
Route::get('/sunting-user-profil', function () {
    return view('Profil/sunting-user-profil');
});
// halaman user leaderboard 
Route::get('/user-leaderboard', function () {
    return view('user-leaderboard/user-leaderboard');
});
// halaman user layanan komplain
Route::get('/user-layanankomplain', function () {
    return view('user-leaderboard/user-layanankomplain');
});
// halaman user capaian leaderboard 
Route::get('/capaianleaderboard-user', function () {
    return view('user-capaian/capaianleaderboard-user');
});
// halaman user capaian leaderboard 
Route::get('/capaianeven-user', function () {
    return view('user-capaian/capaianeven-user');
});