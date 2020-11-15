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

/* Website Routing */
Route::get('/', function () {
    return view('website.welcome');
});

Route::get('details', function () {
    return view('website.products_details');
});


/** Admin Panel Routing */
Route::get('admin', function () {
    return view('admin.welcome');
});