@extends('app')
@section('title', 'Edição de Produtos')
@section('content')
<h1 class="text-center">Edição de Produtos</h1>
<br>
<form action="{{ route('products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome" value="{{ $product->nome }}">
    </div>
    <div class="mb-3">
        <label for="quantidade" class="form-label">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a Quantidade" value="{{ $product->quantidade }}">
    </div>
    <div class="mb-3">
        <label for="preco" class="form-label">Preço</label>
        <input type="text" class="form-control" id="preco" name="preco" placeholder="Digite o Preço" value="{{ $product->preco }}">
    </div>
    <a class="btn btn-success" href="{{ route('products.index') }}">
        <i class="bi bi-arrow-left-circle"></i>Voltar
    </a>
    <button class="btn btn-info" type="submit"><i class="bi bi-send"></i> Enviar</button>
    </form>
@endsection
