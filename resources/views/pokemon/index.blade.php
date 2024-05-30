@extends('app')
@section('title', 'Batalha Pokémon')
@section('content')
    <h1 class="text-center">Batalha de Pokémon</h1>
    <br>
    <form action="{{ route('pokemon.batalha') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pokemon1" class="form-label">Pokémon 1</label>
            <input type="text" class="form-control" id="pokemon1" name="pokemon1" placeholder="Nome do Pokémon 1">
        </div>
        <div class="mb-3">
            <label for="pokemon2" class="form-label">Pokémon 2</label>
            <input type="text" class="form-control" id="pokemon2" name="pokemon2" placeholder="Nome do Pokémon 2">
        </div>
        <button class="btn btn-danger" type="submit">Lutar <i class="bi bi-exclamation-lg"></i></button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection
