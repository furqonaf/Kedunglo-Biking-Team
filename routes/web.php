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

// Route Admin
Route::get('/', function () {
    return view('main');
});

// admin
    // dashboar
Route::get('/admin', function(){
    return view('admin/main');
});
    // Halaman Event
Route::get('/admin-event', function () {
    return view('admin/event/event');
});
Route::get('/admin-detail', function () {
    return view('admin/event/detail');
});
Route::get('/admin-tambah', function () {
    return view('admin/event/tambah');
});

// bio-admin
Route::get('/admin-profil', function(){
    return view('admin/profil/index');
});
Route::get('/admin-profil-edit', function(){
    return view('admin/profil/edit');
});

// foto
Route::get('/admin-foto', function(){
    return view('admin/dok/foto/index');
});

Route::get('/admin-video', function(){
    return view('admin/dok/video/index');
});


// biodata user
Route::get('/admin-bio-user', function(){
    return view('admin/bio-user/index');
});
Route::get('/admin-user-profil', function(){
    return view('admin/bio-user/profil');
});
Route::get('/admin-user-profil-edit', function(){
    return view('admin/bio-user/edit');
});

// Halaman Leaderboard
Route::get('/admin-leaderboard-juara', function(){
    return view('admin/leaderboard/admin-leaderboard-juara');
});
Route::get('/admin-leaderboard-rekap', function(){
    return view('admin/leaderboard/admin-leaderboard-rekap');
});
Route::get('/admin-leaderboard-point', function(){
    return view('admin/leaderboard/admin-leaderboard-point');
});
Route::get('/admin-leaderboard-warn', function(){
    return view('admin/leaderboard/admin-leaderboard-warn');
});

//Halaman Wilayah Kerja KBT
Route::get('/adminwilayah', function(){
    return view('admin/wilayah/adminwilayah');
});
Route::get('/adminadministrasi', function(){
    return view('admin/wilayah/adminadministrasi');
});















// halaman beranda user
Route::get('/user', function () {
    return view('user/beranda');
});
// halaman even user
Route::get('user-event', function () {
    return view('user/event/even');
});
// halaman detail even user
Route::get('/user-detail-even', function () {
    return view('user/event/detail-even');
});
// halaman detail profil user
Route::get('/user-profil', function () {
    return view('user/Profil/user-detail-profil');
});
// halaman sunting profil user
Route::get('/sunting-user-profil', function () {
    return view('user/Profil/sunting-user-profil');
});
// halaman user leaderboard 
Route::get('/user-leaderboard', function () {
    return view('user/user-leaderboard/user-leaderboard');
});
// halaman user layanan komplain
Route::get('/user-layanankomplain', function () {
    return view('user/user-leaderboard/user-layanankomplain');
});
// halaman user capaian leaderboard 
Route::get('/capaianleaderboard-user', function () {
    return view('user/user-capaian/capaianleaderboard-user');
});
// halaman user capaian leaderboard 
Route::get('/capaianeven-user', function () {
    return view('user/user-capaian/capaianeven-user');
});