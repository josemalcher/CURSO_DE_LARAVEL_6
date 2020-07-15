@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <div class="container">
        <h1>Cadastrar novo produto</h1>

        @include('admin.includes.alert')

        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nome: "
                       value="{{old('name')}}">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="price" placeholder="Valor"
                       value="{{old('price')}}">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="description" placeholder="Descrição"
                       value="{{old('description')}}">
            </div>
            <br>
            <br>
            <div class="form-group">
                <input class="form-control" type="file" name="image">
            </div>
            <br>
            <br>
            <button class="btn btn-success" type="submit">Enviar</button>
        </form>
    </div>
@endsection
