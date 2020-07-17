@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <div class="container">
        <h1>Cadastrar novo produto</h1>

        @include('admin.includes.alert')

        <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" class="form">

            @include('admin.pages.products._partial.form');

            <button class="btn btn-success" type="submit">Enviar</button>
        </form>
    </div>
@endsection
