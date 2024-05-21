@extends('app')
@section('title', 'Detalhes de Produto')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        Detalhes do Produto {{ $product->nome }}
    </div>
    <div class="card-body">
        <p><strong>ID: </strong> {{ $product->id }} </p>
        <p><strong>Nome: </strong> {{ $product->nome }} </p>
        <p><strong>Obra: </strong> {{ $product->quantidade }} </p>
        <p><strong>Obra: </strong> {{ $product->preco }} </p>
        <br>
        <a class="btn btn-primary" href="{{ route('products.index') }}">
            <i class="bi bi-arrow-left-circle"></i> Voltar para a lista de produtos
        </a>
    </div>
</div>
@endsection
