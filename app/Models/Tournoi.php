<?php

// Modèle Tournoi

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model
{
    protected $fillable = [
        'titre',
        'description',
        'date_debut',
        'date_fin',
        'jeu_associé',
        'nombre_participants_max',
        'type', // ajouté pour spécifier le type de tournoi (solo ou équipe)
        'nombre_max_joueurs_par_equipe', // ajouté pour spécifier le nombre maximum de joueurs par équipe
    ];

    // Relation avec les inscriptions
    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
