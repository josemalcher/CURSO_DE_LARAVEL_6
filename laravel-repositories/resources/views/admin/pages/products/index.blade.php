@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')

<h1>Listas de Produtos...</h1>

    @if($controle == '123')
        é igual a 123
    @elseif($controle === 123)
        é igual q 123
    @else
        não é igual!
    @endif


    @unless($controle == 123)
        contrário do if
    @else
        pode ter else
    @endunless

    @isset($controle)
        verifica se a variável existe
    @endisset

    @empty($controle)
        verifica se está vazio
    @endempty

    @auth
        entra quando está autenticado
    @else
        não está logada
    @endauth

    @guest
        usuários não autenticados
    @endguest


    @switch($controle)
        @case(1)
            Igual a 1
            @break
        @case(2)
            Igual a 2
            @break
        @default
            Mensagem padrão
    @endswitch

<hr>

    @if(isset($arrayteste))
        @foreach($arrayteste as $item)
        <p class="@if($loop->first) last @endif">{{$item}}</p>
        @endforeach
    @endif
<hr>
    @forelse($arrayteste as $item)
        <p class="@if($loop->last) last @endif">{{$item}}</p>
    @empty
        <p>Não existe itens Cadastrados</p>
    @endforelse

    @include('admin.includes.alert', ['content'=> 'Content de dados'])

<hr>

    @component('admin.components.card')

        @slot('title')
            Título dentro de slot
        @endslot
        Um Card de Exemplo
    @endcomponent
@endsection

@push('styles')
    <style>
        .last {background: #CCC;}
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#CCC';
    </script>
@endpush
