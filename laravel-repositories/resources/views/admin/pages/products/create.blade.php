@extends('admin.layouts.app')

@section('title', 'Cadastrar Novo Produto')

@section('content')
    <h1>Cadastrar novo produto</h1>

    @if($errors->any())

    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" id="name" placeholder="Nome: ">
        <input type="text" name="description" placeholder="Descrição">
        <br>
        <br>
        <input type="file" name="photo">
        <br>
        <br>
        <button type="submit">Enviar</button>
    </form>
@endsection
