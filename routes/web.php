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

Route::middleware('auth')->group(function(){

    Route::get('/', function () {
        return view('principal');
    });
    Route::get('/principal', function () {
        return view('principal');
    });

    Route::get('/movimientos', 'BalanceController@show');
    Route::get('/pago', 'ServicesController@get');
    Route::post('/pago', 'ServicesController@post');

    Route::get('/inversiones', 'InvestmentController@show');

    //dirije a pagina inversiones_compra_venta
    Route::post('/inversiones', 'InvestmentController@post');
    Route::put('/inversiones/{id}', 'InvestmentController@post_acciones');

    Route::get('/datos_recibidos', function () {
            return view('datos_recibidos');
        })->name('datos_recibidos');

});//fin de middleware
 
Auth::routes();


