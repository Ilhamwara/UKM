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

Route::get('/', function () {
    return view('welcome');
});
// Auth::routes();
// Route::get('/home', 'HomeController@index');

Route::get('admin', function () {
    return view('admin.home.index');
});

Route::get('admin/profile', function () {
    return view('admin.user.profile');
});

//UKM
Route::get('admin/ukm', function () {
    return view('admin.ukm.index');
});
Route::get('admin/ukm/detail', function () {
    return view('admin.ukm.detail');
});
Route::get('admin/ukm/tambah', function () {
    return view('admin.ukm.tambah');
});
Route::get('admin/ukm/edit', function () {
    return view('admin.ukm.edit');
});
Route::get('admin/ukm/hapus', function () {
    // return view('admin.ukm.edit');
});
//UKM

//MAHASISWA
Route::get('admin/mahasiswa', function () {
    return view('admin.mahasiswa.index');
});
Route::get('admin/mahasiswa/detail', function () {
    return view('admin.mahasiswa.detail');
});
Route::get('admin/mahasiswa/tambah', function () {
    return view('admin.mahasiswa.tambah');
});
Route::get('admin/mahasiswa/edit', function () {
    return view('admin.mahasiswa.edit');
});
Route::get('admin/mahasiswa/hapus', function () {
    // return view('admin.mahasiswa.edit');
});
//MAHASISWA

//KEGIATAN UKM
Route::get('admin/kegiatan-ukm', function () {
    return view('admin.kegiatan-ukm.index');
});
Route::get('admin/kegiatan-ukm/detail', function () {
    return view('admin.kegiatan-ukm.detail');
});
Route::get('admin/kegiatan-ukm/tambah', function () {
    return view('admin.kegiatan-ukm.tambah');
});
Route::get('admin/kegiatan-ukm/edit', function () {
    return view('admin.kegiatan-ukm.edit');
});
Route::get('admin/kegiatan-ukm/hapus', function () {
    // return view('admin.kegiatan-ukm.edit');
});
//KEGIATAN UKM