<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {

        $produtos = ['Produto 01', 'Produto 02', 'produto 3'];

        return $produtos;// retorna "automágicamente" um JSON
    }

    public function show($id)
    {
        return "Exibindo produto de id: {$id}";
    }

    public function create()
    {
        return "Criando form de cadastro";
    }

    public function edit($id)
    {
        return "Exibindo FORM editando o produto de id: {$id}";
    }

    public function store()
    {
        return "Cadastrabdi novo produto ";
    }

    public function update($id)
    {
        return "Editando FORM editando o produto de id: {$id}";
    }

    public function destroy($id)
    {
        return "Deletando produ com id: {$id}";
    }


}
