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





**************************
PARTE DE CARVALHO

    
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

use App\Http\Controllers\AuctionController;

Route::post('/auctionlist', [AuctionController::class, 'auctiondados']);
    

Route::get('/', function () {
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

Route::get('/formsauction', function () {
    return view('6_FormsAuction');
});




Route::get('/CaravelasDetails', function () {
    return view('CaravelasDetails');
});

Route::get('/JeanMichelSemTitulo', function () {
    return view('Semtitulo1details');
});

Route::get('/DamaDouradaDetails', function () {
    return view('DamaDouradaDetails');
});

Route::get('/JeanMichelSemTitulo2', function () {
    return view('Semtitulo2details');
});

Route::get('/MarieDetails', function () {
    return view('MarieDetails');
});

Route::get('/SalvadorDali', function () {
    return view('SalvadorDaliDetails');
});

















    
