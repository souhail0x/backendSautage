<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

class comandesGestion extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'id_commande' => 'required|unique:commandes|max:255',
            'num_command' => 'required|max:255',
            'date' => 'required|date',
            'panneau' => 'required|max:255',
            'tranche' => 'required|max:255',
            'niveau' => 'required|max:255',
            'mode_tir' => 'required|max:255',
            'foration' => 'required|max:255',
            'nombre_trous' => 'required|integer',
            'nombre_ranges' => 'required|integer',
            'trous_ranges' => 'required|integer',
            'maill_banquette' => 'required|max:255',
            'espacement' => 'required|max:255',
            'decappage' => 'required|max:255',
            'profondeur' => 'required|numeric',
            'zone_tir' => 'required|max:255',
            'mode_charge' => 'required|max:255',
            'dosage_prevu' => 'required|max:255',
            'shema_tir' => 'required|max:255',
        ]);

        // Create a new Commande instance and save it
        $commande = Commande::create($validatedData);

        // Return a JSON response indicating success
        return response()->json(['message' => 'Commande created successfully', 'data' => $commande], 201);
    }
}
