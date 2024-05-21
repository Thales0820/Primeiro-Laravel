@extends('app')
@section('title', 'Edição de Flag')
@section('content')
<h1 class="text-center">Edição de Flage</h1>
<br>
<form action="{{ route('flags.update', $flag) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="chave" class="form-label">Chave</label>
        <input type="text" class="form-control" id="chave" name="chave" placeholder="Digite a Chave" value="{{ $flag->chave }}">
    </div>
    <div class="mb-3">
        <label for="valor" class="form-label">Valor</label>
        <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o Valor" value="{{ $flag->valor }}">
    </div>
    <div class="mb-3">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" placeholder="Digite a Descrição">{{ $flag->descricao }}</textarea>
    </div>
    <a class="btn btn-success" href="{{ route('flags.index') }}">
        <i class="bi bi-arrow-left-circle"></i> Voltar
    </a>
    <button class="btn btn-primary" type="submit">
        <i class="bi bi-send"></i> Enviar
    </button>
</form>
@endsection
