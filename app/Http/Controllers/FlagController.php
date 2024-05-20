<?php

namespace App\Http\Controllers;

use App\Models\Flag;
use Illuminate\Http\Request;

class FlagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $flags = Flag::get();

        return view(
            'flags.index', [
                'flags' => $flags
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('flags.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        Flag::create($dados);

        return redirect('/flags');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $flag = Flag::find($id);
        return view(
            'flags.show', [
                'flag' => $flag
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $flag = Flag::find ($id);
            return view(
                'flags.edit', [
                    'flag' => $flag
                ]
            );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $flag = Flag::find($id);
        $flag-> update (
            [
                'chave' => $request->chave,
                'valor' => $request->valor,
                'descricao' => $request->descricao
            ]
        );
        return Redirect('/flags');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
