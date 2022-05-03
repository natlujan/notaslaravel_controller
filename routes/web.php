<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Notas;
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

Route::get('notas', 'NotasController@index') -> name('notas.index');

Route::get('agregar', 'NotasController@agregar')->name('notas.agregar');

Route::post('crear', 'NotasController@crear')->name('notas.crear');

Route::get('notas/{id}/editar', 'NotasController@editar')->name('notas.editar');

Route::put('notas/{notas}/editar', 'NotasController@update')->name('notas.update');

Route::delete('notas/{id}', 'NotasController@destroy')->name('notas.destroy');