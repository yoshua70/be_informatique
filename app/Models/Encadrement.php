<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encadrement extends Model
{
    use HasFactory;

    public function enseignat()
    { 
        return $this->belongsTo(Enseignant::class); 
    }
    public function etudiant()
    { 
        return $this->belongsTo(Etudiant::class); 
    }
}
