<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PokemonController extends Controller
{
    public function index()
    {
        return view('pokemon.index');
    }

    public function batalha(Request $request)
    {
        $request->validate([
            'pokemon1' => 'required|string',
            'pokemon2' => 'required|string',
        ]);

        $pokemon1 = $request->input('pokemon1');
        $pokemon2 = $request->input('pokemon2');

        $response1 = Http::withOptions(['verify' => false])->get("https://pokeapi.co/api/v2/pokemon/{$pokemon1}");
        $response2 = Http::withOptions(['verify' => false])->get("https://pokeapi.co/api/v2/pokemon/{$pokemon2}");

        if ($response1->failed() || $response2->failed()) {
            return back()->withErrors(['msg' => 'Pokemon Invalido']);
        }

        $stats1 = $response1->json()['stats'];
        $stats2 = $response2->json()['stats'];

        $attack1 = $stats1[1]['base_stat'];
        $attack2 = $stats2[1]['base_stat'];

        $winner = $attack1 > $attack2 ? $pokemon1 : ($attack1 < $attack2 ? $pokemon2 : 'Draw');

        return view('pokemon.resultado', [
            'pokemon1' => $pokemon1,
            'pokemon2' => $pokemon2,
            'attack1' => $attack1,
            'attack2' => $attack2,
            'winner' => $winner,
        ]);
    }
}
