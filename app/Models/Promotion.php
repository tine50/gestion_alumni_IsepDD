<?php

namespace App\Models;

use App\Models\Etudiant;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Promotion extends Model
{
    use HasFactory;
    protected $fillable = ['nom_promotion', 'departement_d'];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }

    public function departements()
    {
        return $this->hasMany(Departement::class);
    }
}
