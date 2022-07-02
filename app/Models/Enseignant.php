<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    public function cours() 
    { 
        return $this->hasMany(Cour::class); 
    }
    public function encadrements() 
    { 
        return $this->hasMany(Encadrement::class); 
    }
}
