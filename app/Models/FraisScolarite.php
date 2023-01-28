<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FraisScolarite extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['user_id', 'niveau_id',  'classe_id', 'inscription',  'reinscription',
        'scolarite',  'premiere_tranche_scolarite_inscription', 'deuxieme_tranch_scolarite_inscription',
        'troisieme_tranch_scolarite_inscription', 'premiere_tranche_scolarite_reinscription',
        'deuxieme_tranch_scolarite_reinscription', 'troisieme_tranch_scolarite_reinscription',
        'total_inscription_scolarite', 'total_reinscription_scolarite'
    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($classe) {
            // $classe->niveau()->associate(request()->niveau);
            $classe->classe()->associate(request()->classe);
        });
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

}
