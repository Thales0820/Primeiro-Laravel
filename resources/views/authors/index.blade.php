@extends('app')
@section('title', 'Lista de Autores')
@section('content')
    <h1 class="text-center">Lista de Autores</h1>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Obra</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
                <tr>
                    <th>{{ $author->id }}</th>
                    <td>
                        <a href="{{ route('authors.show', $author) }}">{{ $author->nome }}</a>
                    </td>
                    <td>{{ $author->obra }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-secondary" href="{{ route('authors.create') }}">
        <i class="bi bi-plus-circle-fill"></i>Novo Autor
    </a>
@endsection
