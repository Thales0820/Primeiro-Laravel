@extends('app')
@section('title', 'Cadrasto de Clientes')
@section('content')
    <h1 class="text-center">Cadrasto de Autores</h1>
    <br>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome do Autor">
        </div>
        <div class="mb-3">
            <label for="obra" class="form-label">Obra</label>
            <input type="text" class="form-control" id="obra" name="obra" placeholder="Digite o Nome da Obra">
        </div>
        <a class="btn btn-primary" href="{{ route('authors.index') }}">
            <i class="bi bi-arrow-left-circle"></i> Voltar
        </a>
        <button class="btn btn-secondary" type="submit">
            <i class="bi bi-send"></i> Enviar
        </button>
    </form>
@endsection
