<?php

namespace App\Models;

use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable = ['nom_entreprise', 'secteur_activite'];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
