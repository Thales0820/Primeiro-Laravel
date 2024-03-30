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
                <th>Ações</th>
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
                    <td></td>
                    </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('clients.create') }}">
        <i class="bi bi-plus-circle-fill"></i>Novo Cliente
    </a>
@endsection
