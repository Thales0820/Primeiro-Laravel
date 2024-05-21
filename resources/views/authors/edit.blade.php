@extends('app')
@section('title', 'Edição de Autores')
@section('content')
<h1 class="text-center">Edição de Autoress</h1>
<br>
<form action="{{ route('authors.update', $author) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome" value="{{ $author->nome }}">
    </div>
    <div class="mb-3">
        <label for="obra" class="form-label">Obra</label>
        <input type="text" class="form-control" id="obra" name="obra" placeholder="Digite a Obra" value="{{ $author->obra }}">
    </div>
    <a class="btn btn-success" href="{{ route('authors.index') }}">
        <i class="bi bi-arrow-left-circle"></i>Voltar
    </a>
    <button class="btn btn-primary" type="submit">
        <i class="bi bi-send"></i> Enviar
    </button>
</form>
@endsection
