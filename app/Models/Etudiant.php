<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    public function classes_etudiants() 
    { 
        return $this->hasMany(ClasseEtudiant::class); 
    }
    public function encadrements() 
{ 
    return $this->hasMany(Encadrement::class); 
}
}
