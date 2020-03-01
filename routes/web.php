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

Route::get('/', function () {
    return view('welcome');
});

//Funcionarios que trabalham no Brasil
Route::get('FuncionarioController/listar_funcionarios_brasil','FuncionarioController@listar_funcionarios_brasil');

//https://medium.com/@arikardnoir/documentando-uma-api-rest-laravel-usando-swagger-2daa24b752e0


