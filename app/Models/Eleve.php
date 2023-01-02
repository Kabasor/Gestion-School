<?php

namespace App\Models;

use App\Models\Famille;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eleve extends Model
{
    use HasFactory;
    protected $fillable = [
        'matricule','nom','prenom','dateNaissance','lieuNaissance',
        'genre','nationalite','pere','mere','tuteur','phone', 'adresse',
        'description','photo',

    ];



    // public function famille()
    // {
    //     return $this->belongsTo(Famille::class);
    // }
}
