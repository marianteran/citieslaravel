<?php

use App\Http\Controllers\CityController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* vista inicial home */
Route::get('/', CityController::class);


/* vista destinos  */
Route::get('/destinations', [CityController::class,'destinations']);


/* vista detalles al selecionar una ciudad */
Route::get('/details/{id}', [CityController::class,'details']);


/* vista de comentarios */
Route::get('/reviews', [CityController::class,'reviews']);


/* función para realizar busquedas  */
route::get('/search',[CityController::class,'search']);