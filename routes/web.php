<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// route client
Route::get('/', function () {
    return view('client.home.index');
});

Route::get('/home', function () {
    return view('client.home.index');
});

Route::get('/fields', function () {
    return view('client.fields.index');
});
