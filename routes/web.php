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

Route::get('/home', function () {
    return view('1_PaginaInicial');
});

Route::get('/obras', function () {
    return view('2_Obras');
});

Route::get('/licitar', function () {
    return view('3_Licitar');
});

Route::get('/sobre', function () {
    return view('4_SobreNos');
});

Route::get('/teste', function () {
    return view('teste');
});
