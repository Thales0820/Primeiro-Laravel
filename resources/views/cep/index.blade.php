@extends('app')
@section('title', 'Buscar Cep')
@section('content')
<br>
<form method="POST" action="{{ route('cep.show') }}">
    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="cep" class="col-form-label">CEP:</label>
        </div>
        <div class="col-auto">
            <input type="text" id="cep" name="cep" class="form-control" placeholder="_____-___">
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>

@if(isset($data))
    @if(isset($data['erro']))
    <br>
        <h1 class="text-center">CEP não encontrado.</h1>
    @else
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Cep</th>
                <th>Localidade</th>
                <th>Uf</th>
                <th>DDD</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $data['cep'] }}</th>
                <td>{{ $data['localidade'] }}</td>
                <td>{{ $data['uf'] }}</td>
                <td>{{ $data['ddd'] }}</td>
            </tr>
        </tbody>
    </table>
    @endif
@endif
@endsection
