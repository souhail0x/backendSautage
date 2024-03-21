<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_commande',
        'num_command',
        'date',
        'panneau',
        'tranche',
        'niveau',
        'mode_tir',
        'foration',
        'nombre_trous',
        'nombre_ranges',
        'trous_ranges',
        'maill_banquette',
        'espacement',
        'decappage',
        'profondeur',
        'zone_tir',
        'mode_charge',
        'dosage_prevu',
        'shema_tir',
    ];
}
