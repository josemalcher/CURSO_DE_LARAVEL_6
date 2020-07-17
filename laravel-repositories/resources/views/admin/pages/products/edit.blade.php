@extends('admin.layouts.app')

@section('title', "Editar Produto {$product->name}")

@section('content')
    <div class="container">
        <h1>Editar produto - {{$product->name}}</h1>
        <form action="{{route('products.update',$product->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" id="name" placeholder="Nome: "
                       value="{{$product->name}}">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="price" placeholder="Valor"
                       value="{{$product->price}}">
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="description" placeholder="Descrição"
                       value="{{$product->description}}">
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
