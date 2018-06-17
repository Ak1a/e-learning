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

Route::get('/', 'head\header@title');

Route::get('/teacher', function () {
    return 'lol teacher';
});

Route::get('/student', function () {
    return 'lol student';
});
