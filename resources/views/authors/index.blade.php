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
                <th></th>
                <th></th>
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
                    <td>
                        <a class="btn btn-success" href="{{ route('authors.edit', $author) }}">
                            <i class="bi bi-pencil-square"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('authors.destroy', $author) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"
                            onclick="return confirm('Tem certeza?')" href="">
                                <i class="bi bi-trash-fill"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="btn btn-secondary" href="{{ route('authors.create') }}">
        <i class="bi bi-plus-circle-fill"></i> Novo Autor
    </a>
    <a href="{{ route('home.index') }}" class="btn btn-info">
        <i class="bi bi-arrow-left-circle"></i> Voltar ao Home
    </a>
@endsection
