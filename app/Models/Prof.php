<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Prof extends Model
{

    use HasFactory;
    protected $fillable = [
        'matricule','nom','prenom','email','diplome',
        'phone','adresse','genre','nationalite','dateNaissance','lieuNaissance',
         'description','image',
    ];


    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected static function boot()
    {
        parent::boot();
        static::creating(function($prof) {
            $prof->slug =  Str::slug($prof->nom.'-'.$prof->matricule);
        });
        static::deleting(function($prof) {
            $prof->slug =  Str::slug($prof->nom);
        });
    }

}
