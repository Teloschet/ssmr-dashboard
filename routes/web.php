<?php

use Illuminate\Support\Facades\Route;
use App\Htpp\Controllers\LoginController;

Route::redirect('/', '/login');

Route::group(['prefix' => ''], function() {
    Route::get('login', 'App\Http\Controllers\LoginController@index');
});