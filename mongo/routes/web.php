<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecetaController;

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
//IMPORTAR TU CONTROLADOR SI NO NO VA A FUNCIONAR

Route::get('/', function () {
    return view('welcome');
});
Route::resource('recetas',RecetaController::class);
