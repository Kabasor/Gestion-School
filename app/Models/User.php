<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Sluggable;
    // FONCTION
    const FONDATIONTEUR = 'Fondateur';
    const DIRECTEUR_GENERALE= 'Directeur Générale';
    const COMPTABLE = 'Comptable';
    const DIRECTEUR_PRIMAIRE = 'Directeur du primaire';
    const SECRETAIRE = 'Secretaire';
    const CHARGER_DES_AFFAIRES = 'charger des affaire interne';
    const ASSISTANT = 'Assistant';
    const ENSEIGNANT = 'enseignant';
    const SURVEILLANT = 'surveillant';
    // ROLE
    const ADMIN = 'Administrateur';
    const USER = 'Utilisateur';
    const DEV = 'Développeur';

    //DIPLOME
    const DOCTORAT = 'Doctorat';
    const MASTER2 = 'Master 2';
    const MASTER1 = 'Master 1';
    const LICENCE = 'Licence';

    //SEXE
    // const HOMME = 'Masculin';
    // const FEMME = 'Feminin';
    const H = "H";
    const F = "F";
    // const PASSWORD_DEFAULT = 12345678';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'matricule',
        'nom',
        'prenom',
        'email',
        'telephone',
        'fonction',
        'role',
        'diplome',
        'date_naissance',
        'lieu_naissance',
        'biographie',
        'adresse',
        'sexe',
        'photo',
        'salaire',
        'active',
        // 'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];



    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'date_naissance' => 'datetime',

    ];


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


    /**
     * boot
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($user) {
            // $user->password = Hash::make(PASSWORD_DEFAULT);
            $user->active = true;
            $user->user()->associate(Auth::id());
        });
    }

    public function getFullnameAttribute(): string
    {
        return $this->prenom . ' ' . $this->nom;
    }


    /**
     * Scope a query to only include session users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeActive($query)
    {
        return $query->where('active', true);
    }

    /**
     * Scope a query to only include session users.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return void
     */
    public function scopeBloque($query)
    {
        return $query->where('active', false);
    }


    /**
     * users
     *
     * @return void
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }


    /**
     * user
     *
     * @return void
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * anneeScolaires
     *
     * @return void
     */
    public function anneeScolaires(): HasMany
    {
        return $this->hasMany(Anneescolaire::class);
    }
}
