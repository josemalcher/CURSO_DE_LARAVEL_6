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

Route::get('/categoria/{flag}', function ($param1){
    return "Produtos da Categoria: {$param1}" ;
});

Route::get('/categoria/{flag}/posts', function ($flag){
    return "Produtos da Postagem: {$flag}" ;
});

Route::get('/produtos/{idProdutos?}', function ($idProdutos = ''){ // ? - $param = 'algo'
    return "Produto(s) {$idProdutos}";
});

//Route::get('/redirect1', function (){
//    //return "Redirect 1";
//    return redirect('/redirect2');
//});
Route::redirect('/redirect1', '/redirect2');

Route::get('/redirect2', function (){
    return "Redirect 2";
});

Route::view('/view', 'welcome', ['id'=> 'teste']);

Route::get('/redirect3', function (){
    return redirect()->route('url.name');
});
Route::get('/nome-url', function (){
    return 'OK Redirect 3';
})->name('url.name');

Route::get('/login', function (){
   return 'LOGIN Page';
})->name('login');

/*

Route::middleware([])->group(function (){
   Route::prefix('painel')->group(function (){
       Route::namespace('Admin')->group( function (){
           Route::name('admin.')->group(function (){
               //           Route::get('/dashboard', function (){
//               return "DASHBOARD";
//           });
//           Route::get('/financeiro', function (){
//               return "FINANCEIRO";
//           });
//           Route::get('/produtos', function (){
//               return "PRODUTOS ADMIN";
//           });
               Route::get('/'           , 'testeControlleler@index')     ->name('home');
               Route::get('/dashboard'  , 'testeControlleler@index')     ->name('dashboard');
               Route::get('/financeiro ', 'testeControlleler@financeiro')->name('financeiro');
               Route::get('/produtos'   , 'testeControlleler@produtos')  ->name('produtos');
           });
       });
   }) ;
});
*/
/*
Route::group([
    'middleware'=> [],
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function (){
    Route::get('/'           , 'testeControlleler@index')     ->name('home');
    Route::get('/dashboard'  , 'testeControlleler@index')     ->name('dashboard');
    Route::get('/financeiro ', 'testeControlleler@financeiro')->name('financeiro');
    Route::get('/produtos'   , 'testeControlleler@produtos')  ->name('produtos');
});*/
