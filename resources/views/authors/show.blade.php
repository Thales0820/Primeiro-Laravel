@extends('app')
@section('title', 'Detalhes de Autor')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        Detalhes do Autor {{ $author->nome }}
    </div>
    <div class="card-body">
        <p><strong>ID: </strong> {{ $author->id }} </p>
        <p><strong>Nome: </strong> {{ $author->nome }} </p>
        <p><strong>Obra: </strong> {{ $author->obra }} </p>
        <br>
        <a class="btn btn-primary" href="{{ route('authors.index') }}">
            <i class="bi bi-arrow-left-circle"></i> Voltar para a lista de autores
        </a>
    </div>
</div>
@endsection
