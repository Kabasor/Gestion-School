<?php

namespace App\Models;

use App\Models\Niveau;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Classe extends Model
{
    use HasFactory;
    protected $fillable = [
        'niveau_id',
        'libelle',
        'description',


    ];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($classe) {

            $classe->niveau()->associate(request()->niveau);
        });
    }

    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }

}
