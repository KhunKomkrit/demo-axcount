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
    return view('/pages/product/index');
});

Route::get('/signin', function () {
    return view('/pages/login/index');
});

Route::prefix('admin')->group(function () {
    Route::post('/dashbroad', function () {
        return view('/backend/pages/dashbroad/index');
    });

    Route::get('/editor', function () {
        return view('/backend/pages/product/editor');
    });
});


