<?php

// Modèle Inscription

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'id_utilisateur',
        'id_tournoi',
        'date_inscription',
        'statut',
    ];

    // Relation avec l'utilisateur inscrit
    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    // Relation avec le tournoi inscrit
    public function tournoi()
    {
        return $this->belongsTo(Tournoi::class, 'id_tournoi');
    }
}
