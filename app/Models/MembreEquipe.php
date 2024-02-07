<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MembreEquipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_utilisateur',
        'id_equipe',
    ];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }
}
