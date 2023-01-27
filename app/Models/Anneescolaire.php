<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

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

        self::creating(function ($annne) {
            $year = Carbon::now()->format('y');
            $annne->session_annee_fin = ++$year;
            // $annne->user()->associate(Auth::id());
        });
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
}
