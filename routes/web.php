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
    //return view('fuelQuoteHistory');
    // return view('profileManagement');
    // return view('fuelQuoteForm');
    return view('welcome');
});

Route::get('/profileManagement', function () {
    return view('profileManagement');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/fuelQuoteForm', function () {
    return view('fuelQuoteForm');
});
Route::get('/fuelQuoteHistory', function () {
    return view('fuelQuoteHistory');
});

Route::post('/profileManagementSubmit', function () {
    return view('profileManagement');
});




