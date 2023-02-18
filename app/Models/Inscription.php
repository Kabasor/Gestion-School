<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Inscription extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = ['libelle','slug',  'eleve_id', 'annee_scolarite_id', 'remise',  'montant',
                       
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['user', 'anneeScolarite'];

    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($inscription) {
            $inscription->anneeScolarite()->associate(get_last_session_id());
            $inscription->user()->associate(Auth::id());
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
     * anneeScolarite
     *
     * @return void
     */
    public function anneeScolarite()
    {
        return $this->belongsTo(Anneescolaire::class)->withDefault();
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


    /**
     * Scope a query to only include session users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeStatus($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Scope a query to only include session users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeAnneeScolariteId($query)
    {
        return $query->where('annee_scolarite_id', get_last_session_id());
    }
}
