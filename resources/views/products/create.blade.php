@extends('app')
@section('title', 'Cadrasto de Produtos')
@section('content')
<script src="{{ asset('js/masks.js') }}"></script>
<h1 class="text-center">Cadrasto de Produtos</h1>
<br>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome">
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a Quantidade">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o Preço">
    </div>
    <a class="btn btn-success" href="{{ route('products.index') }}">
        <i class="bi bi-arrow-left-circle"></i> Voltar
    </a>
    <button class="btn btn-info" type="submit"><i class="bi bi-send"></i> Enviar</button>
</form>
@endsection
