<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cep.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $cep = $request->input('cep');
        $buscar = new Client();
        $response = $buscar->request('GET', "https://viacep.com.br/ws/{$cep}/json/", [
            'verify' => false]);
        $data = json_decode($response->getBody(), true);

        return view('cep.index', ['data' => $data]);

        // $cep = $request->cep;
        // //configuração de requisição
        // $response = Http::withOptions(['verify'=>false])->get("https://viacep.com.br/ws/" . $cep . "/json");
        // $responseJson = $response->json();

        // return view("cep.index", [
        //     "data" => $responseJson
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
