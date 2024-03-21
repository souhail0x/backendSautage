<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;

class CommandeController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'id_commande' => 'required|unique:commandes|string|max:255',
            'num_command' => 'required|string|max:255',
            'date' => 'required|date',
            'panneau' => 'required|string|max:255',
            'tranche' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'mode_tir' => 'required|string|max:255',
            'foration' => 'required|string|max:255',
            'nombre_trous' => 'required|integer',
            'nombre_ranges' => 'required|integer',
            'trous_ranges' => 'required|integer',
            'maill_banquette' => 'required|string|max:255',
            'espacement' => 'required|string|max:255',
            'decappage' => 'required|string|max:255',
            'profondeur' => 'required|numeric',
            'zone_tir' => 'required|string|max:255',
            'mode_charge' => 'required|string|max:255',
            'dosage_prevu' => 'required|string|max:255',
            'shema_tir' => 'required|string|max:255',
        ]);

        // Create a new Commande instance and save it
        $commande = Commande::create($validatedData);

        // Return a response indicating success
        return response()->json(['message' => 'Commande created successfully', 'data' => $commande], 201);
    }
}
