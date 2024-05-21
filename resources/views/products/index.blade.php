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
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th>{{ $product->id }}</th>
                    <td>
                        <a href="{{ route('products.show', $product) }}">{{ $product->nome }}</a>
                    </td>
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->preco }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('products.edit', $product) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('products.destroy', $product   ) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Tem certeza?')">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-info" href="{{ route('products.create') }}">
        <i class="bi bi-plus-circle-fill"></i> Novo Produto
    </a>
    <a href="{{ route('home.index') }}" class="btn btn-info">
        <i class="bi bi-arrow-left-circle"></i> Voltar ao Home
    </a>
@endsection
