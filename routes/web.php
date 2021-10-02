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

Route::get('/', function () {
    return view('home');
});

Route::get('/chinh-sach-bao-mat', function () {
    return view('chinhsachbaomat');
});
Route::get('/dieu-khoan-dich-vu', function () {
    return view('dieukhoandichvu');
});
Route::get('/chinh-sach-doi-tra', function () {
    return view('chinhsachdoitra');
});
Route::get('/giao-hang-va-thanh-toan', function () {
    return view('giaohangthanhtoan');
});
Route::get('thong-tin-chuyen-khoan', function () {
    return view('thongtinchuyenkhoan');
});