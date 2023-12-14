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
    return view('paginainicial');
});
    
Route::get('/obras', function () {
    return view('obras');
});


Route::get('/sobrenos', function () {
    return view('sobrenos');
});

Route::get('/licitar', function () {
    return view('licitar');
});

Route::get('/contactos', function () {
    return view('contactos');
});


Route::get('/formsauction', function () {
    return view('formsauction');
});



Route::post('/auctio', [EventController::class, 'registerauction']);





