@extends('app')
@section('title', 'Detalhes de Cliente')
@section('content')
<br>
<div class="card">
    <div class="card-header">
        Detalhes do Cliente {{ $client->nome }}
    </div>
    <div class="card-body">
        <p><strong>ID: </strong> {{ $client->id }} </p>
        <p><strong>Nome: </strong> {{ $client->nome }} </p>
        <p><strong>Endereço: </strong> {{ $client->endereco }} </p>
        <p><strong>Observação: </strong> {{ $client->observacao }} </p>
        <br>
        <a class="btn btn-success" href="{{ route('clients.index') }}">
            <i class="bi bi-arrow-left-circle"></i> Voltar para a lista de clientes
        <a>
    </div>
</div>
@endsection
