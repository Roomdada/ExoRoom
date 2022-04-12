<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Etudiant extends Model
{
    use HasFactory;

    public function niveau():BelongsTo
    {
        return $this->belongsTo(Niveau::class);
    }

    public function commune():BelongsTo
    {
        return $this->belongsTo(Commune::class);
    }
}
