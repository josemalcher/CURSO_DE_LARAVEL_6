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

Route::get('/contato', function (){
    return 'Contato!!';
});

Route::get('/empresa', function (){
    return view('site.contact');
});

Route::post('/register', function (){
    return '';
});

Route::any('/any', function (){ // permite todos os tipos de verbos (post/get/put)
    return 'ANY';
});

Route::match(['get', 'post'], '/match', function (){
    return "MATCH";
});
