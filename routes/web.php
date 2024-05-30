<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CepController;
use App\Http\Controllers\FlagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/service/{id}', [SiteController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients/', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

Route::get('/flags', [FlagController::class, 'index'])->name('flags.index');
Route::get('/flags/create', [FlagController::class, 'create'])->name('flags.create');
Route::get('flags/{id}', [FlagController::class, 'show'])->name('flags.show');
Route::post('/flags/', [FlagController::class, 'store'])->name('flags.store');
Route::get('/flags/{id}/edit', [FlagController::class, 'edit'])->name('flags.edit');
Route::put('/flags/{id}', [FlagController::class, 'update'])->name('flags.update');

Route::get('/authors', [AuthorController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorController::class, 'create'])->name('authors.create');
Route::post('/authors/', [AuthorController::class, 'store'])->name('authors.store');
Route::get('/authors/{id}', [AuthorController::class, 'show'])->name('authors.show');
Route::get('/authors/{id}/edit', [AuthorController::class, 'edit'])->name('authors.edit');
Route::put('/authors/{id}', [AuthorController::class, 'update'])->name('authors.update');
Route::delete('/authors/{id}', [AuthorController::class, 'destroy'])->name('authors.destroy');

Route::get('/cep', [CepController::class, 'index'])->name('cep.index');
Route::post('/cep', [CepController::class, 'show'])->name('cep.show');

Route::get('/pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
Route::post('/pokemon', [PokemonController::class, 'batalha'])->name('pokemon.batalha');
