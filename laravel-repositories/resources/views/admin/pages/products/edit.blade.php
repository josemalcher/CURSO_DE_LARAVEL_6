@extends('admin.layouts.app')

@section('title', "Editar Produto {$product->name}")

@section('content')
    <div class="container">
        <h1>Editar produto - {{$product->name}}</h1>
        <form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')

            @include('admin.pages.products._partial.form')

            <button class="btn btn-success" type="submit">Enviar</button>
        </form>
    </div>
@endsection
