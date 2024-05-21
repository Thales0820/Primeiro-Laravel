@extends('app')
@section('title', 'Lista de flages')
@section('content')
    <h1 class="text-center">Lista de Flages</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Chave</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($flags as $flag)
                <tr>
                    <th>{{ $flag->id }}</th>
                    <td><a href="{{route('flags.show', $flag)}}">{{ $flag->chave }}</a></td>
                    <td>{{ $flag->valor }}</td>
                    <td>{{ $flag->descricao }}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('flags.edit', $flag) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-primary" href="{{ route('flags.create') }}">
        <i class=bi bi-plus-circle-fill></i> Novo flage
    </a>
    <a href="{{ route('home.index') }}" class="btn btn-info">
        <i class="bi bi-arrow-left-circle"></i> Voltar ao Home
    </a>
@endsection
