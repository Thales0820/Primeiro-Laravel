<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ClientController extends Controller
{
    /**
     * Exibir uma listagem do recurso.
     */
    public function index()
    {
        $clients = Client::get();
        //dd($clients);
        //foreach($clients as $client) {
        //    dd($client->nome);
        //}
        return view(
            'clients.index', [
                'clients' => $clients
            ]
        );
    }

    /**
     * Mostrar o formulário para criação de um novo recurso.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Armazene um recurso recém-criado no armazenamento.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Client::create($dados);

        return redirect('/clients');
    }

    /**
     * Exibir o recurso especificado.
     */
    public function show(string $id)
    {
        $client = Client::find($id);
        return view(
            'clients.show', [
                'client' => $client
            ]
        );
    }

    /**
     * Mostrar o formulário para edição do recurso especificado.
     */
    public function edit(string $id)
    {
        $client = Client::find ($id);
            return view(
                'clients.edit', [
                    'client' => $client
                ]
            );
        // dd($client);
    }

    /**
     * Atualize o recurso especificado no armazenamento.
     */
    public function update(Request $request, string $id)
    {
        $client = Client::find($id);
        $client-> update (
            [
                'nome' => $request->nome,
                'endereco' => $request->endereco,
                'observacao' => $request->observacao
            ]
        );
        return Redirect('/clients');
    }

    /**
     * Remova o recurso especificado do armazenamento.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);
        $client->delete();
        return Redirect('/clients');
    }
}
