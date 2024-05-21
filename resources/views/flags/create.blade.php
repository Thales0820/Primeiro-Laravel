@extends('app')
@section('title', 'Cadrasto de Flags')
@section('content')
    <h1 class="text-center">Cadrasto de Flags</h1>
    <br>
    <form action="{{ route('flags.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="chave" class="form-label">Chave</label>
            <input type="text" class="form-control" id="chave" name="chave" placeholder="Digite a Chave">
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" class="form-control" id="valor" name="valor" placeholder="Digite o Valor">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite uma Descrição"></textarea>
        </div>
        <a class="btn btn-success" href="{{ route('flags.index') }}">
            <i class="bi bi-arrow-left-circle"></i> Voltar
        </a>
        <button class="btn btn-primary" type="submit">
            <i class="bi bi-send"></i> Enviar
        </button>
    </form>
@endsection
