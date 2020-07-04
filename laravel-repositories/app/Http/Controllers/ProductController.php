<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $produtos = ['Produto 01', 'Produto 02', 'produto 3'];

        return $produtos;// retorna "automágicamente" um JSON
    }

    public function show($id){
        return "Exibindo produto de id: {$id}";
    }

}
