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

//Inserir 
Route::get('funcionarios_inserir',function() {

});

//Atualizar
Route::get('funcionarios_atualizar',function() {

});
//Delete
Route::get('funcionarios_delete',function() {

});
//Listar
Route::get('funcionarios_listar',function() {

});
//Funcionarios que trabalham no Brasil
Route::get('funcionarios_brasil',function() {

});

//https://medium.com/@arikardnoir/documentando-uma-api-rest-laravel-usando-swagger-2daa24b752e0


