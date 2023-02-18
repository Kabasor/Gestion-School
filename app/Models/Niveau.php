<?php

namespace App\Models;

use App\Models\Prof;
use App\Models\Classe;
use Illuminate\Support\Str;
use App\Models\PaiementProfesseur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
        'slug'
    ];
    /**
     * user
     *
     * @return void
     */
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function($niveau) {
    //         $niveau->slug =  Str::slug($niveau->libelle);
    //     });
    //     static::deleting(function($niveau) {
    //         $niveau->slug =  Str::slug($niveau->libelle);
    //     });
    // }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function profs()
    {
        return $this->hasMany(Prof::class);
    }

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }
    public function paiementprofesseurs()
    {
        return $this->hasMany(PaiementProfesseur::class);
    }
    public function eleves(): HasMany
    {
        return $this->hasMany(Eleve::class);
    }

    public function paiementEleves(): HasMany
    {
        return $this->hasMany(PaiementEleve::class);
    }

    public function historiquePaiments(): HasMany
    {
        return $this->hasMany(HistoriquePaiementEleve::class, 'eleve_id');
    }
}
