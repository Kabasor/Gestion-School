<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reinscription extends Model
{
    use HasFactory;

<<<<<<< HEAD
=======
        protected $fillable = ['libelle','slug',  'eleve_id', 'annee_scolarite_id', 'remise',  'montant',
        'montant_inscription', 'montant_payer',  'reste'
        ];
>>>>>>> 92ce2d17a3cb766d287ae3fa1d63a6e54de354da
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
