@extends('app')
@section('title', 'Lista de Clientes')
@section('content')
    <h1 class="text-center">Lista de Clientes</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Observação</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clients as $client)
                <tr>
                    <th>{{ $client->id }}</th>
                    <td>
                        <a href="{{ route('clients.show', $client) }}">{{ $client->nome }}</a>
                    </td>
                    <td>{{ $client->endereco }}</td>
                    <td>{{ $client->observacao }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('clients.edit', $client) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('clients.destroy', $client   ) }}" method="post">
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
    <a class="btn btn-primary" href="{{ route('clients.create') }}">
        <i class="bi bi-plus-circle-fill"></i> Novo Cliente
    </a>
    <a href="{{ route('home.index') }}" class="btn btn-info">
        <i class="bi bi-arrow-left-circle"></i> Voltar ao Home
    </a>
@endsection
