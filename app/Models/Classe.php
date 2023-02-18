<?php

namespace App\Models;

use App\Models\Niveau;
use App\Models\Emploie;
use App\Models\Matiere;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'niveau_id',
        'libelle',
        'description',
        'user_id',
        'slug'

    ];

    // /**
    //  * Return the sluggable configuration array for this model.
    //  *
    //  * @return array
    //  */
    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => 'libelle'
    //         ]
    //     ];
    // }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($classe) {
            $classe->niveau()->associate(request()->niveau);
        });

    }

    public function emploie()
    {
        return $this->belongsTo(Emploie::class,);
    }

    public function fraisScolarite()
    {
        return $this->hasOne(FraisScolarite::class);
    }

    public function matieres(): HasMany
    {
        return $this->hasMany(Matiere::class,);
    }

    public function niveau(): BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }

    public function eleves(): HasMany
    {
        return $this->hasMany(Eleve::class, 'classe_id');
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
