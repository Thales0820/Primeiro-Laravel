@extends('app')
@section('title', 'Resultado da Batalha')
@section('content')
    <h1 class="text-center">Resultado da Batalha</h1>
    <br>
    <div class="text-center">
        <p><strong>{{ ucfirst($pokemon1) }}</strong> Ataque: {{ $attack1 }}</p>
        <p><strong>{{ ucfirst($pokemon2) }}</strong> Ataque: {{ $attack2 }}</p>
        <h2>{{ $winner === 'Draw' ? 'It\'s a Draw!' : ucfirst($winner) . ' Venceu!' }}</h2>
        <br>
        <a class="btn btn-success" href="{{ route('pokemon.index') }}">Voltar a Batalha</a>
    </div>
@endsection
