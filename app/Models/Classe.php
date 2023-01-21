<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'niveau_id',
        'libelle',
        'description',
        'user_id',


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
    //             'source' => 'departement'
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
