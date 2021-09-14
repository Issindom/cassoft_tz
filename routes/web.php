<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('start');
});


Route::post('/registration/new_user', 'MainController@registration_check');


Route::get('/registration/new_user', function () {
    return view('new_user');
});