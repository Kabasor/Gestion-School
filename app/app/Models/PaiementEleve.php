<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class PaiementEleve extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['libelle', 'slug',  'eleve_id',  'annee_scolarite_id', 'remise',
     'dernier_payement','montant_paye',
        'montant_total',  'pourcentage',  'user_id', 'classe_id', 'niveau_id'
    ];

    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($paiementEleve) {
            $paiementEleve->user()->associate(Auth::id());
            $paiementEleve->classe()->associate(request()->classe);
            // $paiementEleve->eleve()->associate(request()->eleve);
            $paiementEleve->anneeScolarite()->associate(get_last_session_id());

        });
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'libelle'
            ]
        ];
    }



    // public function niveau()
    // {
    //     return $this->belongsTo(Niveau::class);
    // }
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
    public function classe(): BelongsTo
    {
        return $this->belongsTo(Classe::class);
    }

    public function eleve(): BelongsTo
    {
        return $this->belongsTo(Eleve::class);
    }

    /**
     * anneeScolarite
     *
     * @return void
     */
    public function anneeScolarite(): BelongsTo
    {
        return $this->belongsTo(Anneescolaire::class)->withDefault();
    }


    public function historiquePaiements(): HasMany
    {
        return $this->hasMany(HistoriquePaiementEleve::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
