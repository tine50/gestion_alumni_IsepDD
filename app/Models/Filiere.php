<?php

namespace App\Models;

use App\Models\Departement;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = ['nom_filiere', 'departement_id'];

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class, 'departement_id');
    }
}
