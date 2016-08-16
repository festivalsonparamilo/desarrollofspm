<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formularioPrueba', function () {return view('formularioPrueba/cuerpo');});
Route::get('/formularioPrueba/condiciones', function () {return view('formularioPrueba/condic');});

//Registro de participantes
Route::get('/registro', 'RegistroController@Select');
Route::get('/registro/{participante}', 'RegistroController@intro')->where('participante', '[a-z]+');
Route::get('/registro/{participante}/cond', 'RegistroController@condition')->where('participante', '[a-z]+');
Route::get('/registro/{participante}/cond/ac', 'RegistroController@forms')->where('participante', '[a-z]+');
Route::get('/registro/{participante}/cond/noAc', 'RegistroController@noAcuerdo')->where('participante', '[a-z]+');
Route::post('/registro/{participante}/form', 'RegistroController@store')->where('participante', '[a-z]+');


