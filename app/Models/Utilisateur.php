<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'pseudo',
        'prenom',
        'nom',
        'email',
        'mot_de_passe',
        'id_equipe',
        'role',
    ];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class, 'id_utilisateur');
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class, 'id_utilisateur');
    }
};
