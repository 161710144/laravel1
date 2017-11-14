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

//basic route

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return '<center><h1><marquee>Bangku Pojok</marquee></h1>'
            .'Friend are Brother</center>';
});

//paramter route

Route::get('user/{nama}', function ($ui) {
    return 'Nama Saya Adalah <b>'.$ui.'<b>';
});


Route::get('/kantin/{nasi}/{air}/{kayu}', function ($a,$b,$c) {
    return '<center><h1>Kantin Abah</h1>'
    .'Saya makan : <b>'.$a. '</b>'.'<br>'
    .'dengan minuman : <b>'.$b. '</b>'.'<br>'
    .'sama .ngemil : <b>'.$c. '</b></center>';

});

//optional parameter route

Route::get('user/{nama?}', function ($ui = "Sunade Hasirama") {
    return $ui;
});