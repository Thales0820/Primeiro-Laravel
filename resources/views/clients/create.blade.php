@extends('app')
@section('title', 'Cadrasto de Clientes')
@section('content')
    <h1 class="text-center">Cadrasto de Clientes</h1>
    <br>
    <form action="{{ route('clients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome">
        </div>
        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Digite o Endereço">
        </div>
        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" id="observacao" name="observacao" placeholder="Digite a Observação"></textarea>
        </div>
        <a class="btn btn-success" href="{{ route('clients.index') }}">
            <i class="bi bi-arrow-left-circle"></i> Voltar
        </a>
        <button class="btn btn-primary" type="submit"><i class="bi bi-send"></i> Enviar</button>
    </form>
@endsection
