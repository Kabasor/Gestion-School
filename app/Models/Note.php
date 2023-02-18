<?php

namespace App\Models;

use App\Models\User;
use App\Models\Eleve;
use App\Models\Classe;
use App\Models\Matiere;
use App\Models\Anneescolaire;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['note_1','note_2','note_3','compos','trimestre','semestre','user_id',
            'moyenne_generale','eleve_id','matiere_id','classe_id','annee_scolarite_id'
];

public function user()
{
    return $this->belongsTo(User::class)->withDefault();
}
public function classe()
{
    return $this->belongsTo(Classe::class);
}

public function eleve()
{
    return $this->belongsTo(Eleve::class);
}
public function matiere()
{
    return $this->belongsTo(Matiere::class);
}

public function anneeScolarite(): BelongsTo
{
    return $this->belongsTo(Anneescolaire::class)->withDefault();
}




}
