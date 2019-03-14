<?php

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

/*Route::get('/plataforma','PlataformaController@index');
Route::get('/plataforma/create','PlataformaController@create');
Route::post('/plataforma/create','PlataformaController@store');
Route::get('/plataforma/{id}','PlataformaController@show');
Route::get('/plataforma/edit','PlataformaController@edit');
Route::post('/plataforma/edit','PlataformaController@update');
Route::post('/plataforma/delete','PlataformaController@delete');*/

//te evita todo el codigo de arriba
Route::resource('/plataformas','PlataformaController');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('paginas.inicio');
});

Route::get('/juegos', 'JuegosController@index')->name('juegos.index');



Route::get('/informacion', 'PaginasController@informacion');
Route::get('/contacto', 'PaginasController@contacto');
Route::get('/equipo', 'PaginasController@equipo')->name('equipo');
Route::get('/bienvenida/{nombre}/{apellido?}', 'PaginasController@bienvenida');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
