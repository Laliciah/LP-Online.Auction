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

Route::get('/Homepage', function () {
    return view('homepage');
});

Route::get('/Obras', function () {
    return view('obras');
});

Route::get('/Us', function () {
    return view('aboutus');
});

Route::get('/Contactos', function () {
    return view('contactos');
});

Route::get('/Licitar', function () {
    return view('licitar');
});
  

