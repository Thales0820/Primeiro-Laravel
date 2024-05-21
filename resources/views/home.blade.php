@extends('app')
@section('title', 'Home Page')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@section('content')
<br>
<h2 class="text-center">Aqui Estão as Opções do Nosso Site:</h2>
<br>
<div class="grid">
    <div class="coluna">
        <img src="{{ asset('images/Clientes.png') }}" alt="Clientes">
        <p><strong>Clientes</strong></p>
        <a href="{{ route('clients.index') }}">
            <i class="bi bi-search"></i> Ir Para a Tela
        </a>
    </div>
    <div class="coluna">
        <img src="{{ asset('images/Autores.jpg') }}" alt="Autores">
        <p><strong>Autores</strong></p>
        <a href="{{ route('authors.index') }}">
            <i class="bi bi-search"></i> Ir Para a Tela
        </a>
    </div>
    <div class="coluna">
        <img src="{{ asset('images/Produtos.jpg') }}" alt="Produtos">
        <p><strong>Produtos</strong></p>
        <a href="{{ route('products.index') }}">
            <i class="bi bi-search"></i> Ir Para a Tela
        </a>
    </div>
    <div class="coluna">
        <img src="{{ asset('images/Cep.png') }}" alt="Cep">
        <p><strong>Cep</strong></p>
        <a href="{{ route('cep.index') }}">
            <i class="bi bi-search"></i> Ir Para a Tela
        </a>
    </div>
    <div class="coluna">
        <img src="{{ asset('images/Flags.avif') }}" alt="Flags">
        <p><strong>Flags</strong></p>
        <a href="{{ route('flags.index') }}">
            <i class="bi bi-search"></i> Ir Para a Tela
        </a>
    </div>
</div>
@endsection
