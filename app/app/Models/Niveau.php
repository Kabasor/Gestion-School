<?php

namespace App\Models;

use App\Models\Classe;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Niveau extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',

    ];
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function classes()
    {
        return $this->hasMany(Classe::class);
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
