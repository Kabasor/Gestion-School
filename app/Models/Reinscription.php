<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reinscription extends Model
{
    use HasFactory;

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
