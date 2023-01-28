<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reinscription extends Model
{
    use HasFactory;

        protected $fillable = ['libelle','slug',  'eleve_id', 'annee_scolarite_id', 'remise',  'montant',
        'montant_inscription', 'montant_payer',  'reste'
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

    /**
     * eleve
     *
     * @return void
     */
    public function eleve()
    {
        return $this->belongsTo(Eleve::class, 'eleve_id')->withDefault();
    }


}
