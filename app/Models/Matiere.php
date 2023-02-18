<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Prof;
use App\Models\Classe;
use App\Models\Emploie;
use Illuminate\Support\Str;
use App\Models\PaiementProfesseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = ['nom_matiere', 'coefficient', 'slug' ,'classe_id', 'user_id'];


    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function paiementprofesseurs()
    {
        return $this->hasMany(PaiementProfesseur::class);
    }

    public function notes(): HasMany
    {
        return $this->hasMany(Note::class);
    }

    public function prof()
    {
        return $this->belongsTo(Prof::class)->withDefault();
    }
    public function emploie()
    {
        return $this->hasMany(Emploie::class,);
    }
    public function classe()
    {
        return $this->belongsTo(Classe::class,);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($matiere) {
            $matiere->slug =  Str::slug($matiere->nom_matiere);
        });
        static::deleting(function($matiere) {
            $matiere->slug =  Str::slug($matiere->nom_matiere);
        });
    }
}


