<?php

namespace App\Models;

use App\Models\Prof;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaiementProfesseur extends Model
{
    use HasFactory;
    protected $fillable =[
        'prix_par_heure',
        'taux_horaire',
        'nombre_dheure',
        'mois',
        'montant',
        'status',
        'slug',
        'matiere_id',
        'prof_id',
        'niveau_id',
    ];

    public function niveau(): BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }

    public function prof(): BelongsTo
    {
        return $this->belongsTo(Prof::class);
    }
    public function matiere(): BelongsTo
    {
        return $this->belongsTo(Matiere::class);
    }
}
