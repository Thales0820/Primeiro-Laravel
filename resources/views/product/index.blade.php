@extends('app')
@section('title', 'Lista de Produtos')
@section('content')
    <h1 class="text-center">Lista de Produtos</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->preco }}</td>
                    <td>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-warning">
                            Detalhes
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-info" href="{{ route('products.create') }}">
        <i class="bi bi-plus-circle-fill"></i>Novo Produto
    </a>
@endsection
