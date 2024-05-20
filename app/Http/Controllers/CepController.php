<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

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
        $client = new Client();
        $response = $client->request('GET', "https://viacep.com.br/ws/{$cep}/json/", [
            'verify' => false]);
        $data = json_decode($response->getBody(), true);

        return view('cep.index', ['data' => $data]);
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
