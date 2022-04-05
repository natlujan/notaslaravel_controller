<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Notas;

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
    return view('welcome');
});

Route::get('notas','NotasController@index')->name('listar');

Route::get('agregar','NotasController@agregar')->name('nuevanota');

Route::post('crear','NotasController@crear') -> name('notas.store');

Route::get('notas/{id}/editar','NotasController@editar')->name('notas.edit');

Route::get('notas/{id}','NotasController@id');
