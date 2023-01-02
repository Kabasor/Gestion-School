<?php

namespace App\Models;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Famille extends Model
{
    use HasFactory;
    protected $fillable = [
        'pere',
        'mere',
        'responsable',
        'numero',
        'adresse',
    ];


    public function eleves()
    {
        return $this->hasmany(Eleve::class);
    }
}
