<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Emploie;
use App\Models\Matiere;
use Illuminate\Support\Str;
use App\Models\PaiementProfesseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prof extends Model
{

    use HasFactory;
    protected $fillable = [
        'matricule','nom','prenom','email','diplome',
        'phone','adresse','salaire', 'genre','nationalite','dateNaissance','lieunaissance',
         'description','niveau_id','image',
    ];


    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function matieres(): HasMany
    {
        return $this->hasMany(Matiere::class);
    }
    public function paiementprofesseurs(): HasMany
    {
        return $this->hasMany(PaiementProfesseur::class);
    }
    public function emploies(): HasMany
    {
        return $this->hasMany(Emploie::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($prof) {
            $prof->slug =  Str::slug($prof->matricule.' - '.$prof->nom);
        });
        static::deleting(function($prof) {
            $prof->slug =  Str::slug($prof->nom);
        });
    }

}
