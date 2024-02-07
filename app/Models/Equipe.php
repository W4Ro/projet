<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';

    protected $fillable = [
        'nom',
        'id_capitaine',
    ];

    public function capitaine()
    {
        return $this->belongsTo(Utilisateur::class, 'id_capitaine');
    }

    public function membres()
    {
        return $this->hasMany(MembreEquipe::class, 'id_equipe');
    }
};
