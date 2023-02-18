<?php

namespace App\Models;

use App\Models\Prof;
use App\Models\Classe;
use App\Models\Matiere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Emploie extends Model
{
    use HasFactory;
    protected $fillable =[
       'jour','slug','heure_debut','heure_fin', 'durer','matiere_id','classe_id','prof_id',
    ];


    public function matiere()
    {
        return $this->belongsTo(Matiere::class,);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class,);
    }

    public function prof()
    {
        return $this->belongsTo(Prof::class,);
    }

}
