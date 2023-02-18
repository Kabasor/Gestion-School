<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anneescolaire extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [ 'anneescolaire',  'session_annee_fin', 'date_debut',  'date_fin', 'user_id', 'description',


    ];

    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($annee) {
            $year = Carbon::now()->format('y');
            $annee->session_annee_fin = ++$year;
            // $annne->user()->associate(Auth::id());
        });

        static::creating(function($annee) {
            $annee->slug =  Str::slug($annee->anneescolaire);
        });
        static::deleting(function($annee) {
            $annee->slug =  Str::slug($annee->anneescolaire);
        });
    }

    // protected static function boot()
    // {
    //     parent::boot();
    //     static::creating(function($matiere) {
    //         $matiere->slug =  Str::slug($matiere->nom_matiere);
    //     });
    //     static::deleting(function($matiere) {
    //         $matiere->slug =  Str::slug($matiere->nom_matiere);
    //     });
    // }


    /**
     * user
     *
     * @return void
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
