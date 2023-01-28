<?php

namespace App\Models;

use App\Models\Famille;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Eleve extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    protected $fillable = [ 'matricule', 'nom', 'prenom', 'slug', 'date_naissance', 'lieu_naissance',
        'telephone', 'nationalite', 'adresse', 'sexe', 'photo', 'pere', 'mere', 'tuteur', 'telephone_tuteur',
        'adresse_tuteur', 'email_tuteur', 'annee_scolarite_id', 'user_id', 'photo', 'status',

    ];
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_naissance' => 'datetime',

    ];

    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($eleve) {
            // $eleve->password = Hash::make(PASSWORD_DEFAULT);
            // $eleve->active = true;
            $eleve->user()->associate(Auth::id());
            $eleve->classe()->associate(request()->classe);
            $eleve->anneeScolarite()->associate(get_last_session_id());
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
                'source' => 'fullname'
            ]
        ];
    }
    public function getFullNameAttribute(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }
    /**
     * Interact with the etudiant's etudiant.
     *
     * @param  string  $value
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function dateNaissance(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value),
            // set: fn ($value) => Str::replace('/', '-', Carbon::parse($value)),
        );
    }
    public function user()
    {
        return $this->belongsTo(User::class);
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


    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function inscription(): HasOne
    {
        return $this->hasOne(Inscription::class, 'eleve_id');
    }

    public function paiements(): HasMany
    {
        return $this->hasMany(PaiementEleve::class, 'eleve_id');
    }

    public function reinscriptions(): HasMany
    {
        return $this->hasMany(Reinscription::class, 'eleve_id');
    }

    /**
     * Get the etudiant's most recent order.
     */
    public function latestPaiements()
    {
        return $this->hasOne(PaiementEleve::class, 'eleve_id')->latestOfMany();
    }

    public function historiquePaiments(): HasMany
    {
        return $this->hasMany(HistoriquePaiementEleve::class, 'eleve_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
