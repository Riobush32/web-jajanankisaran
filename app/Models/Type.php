<?php

namespace App\Models;

use App\Models\Utilities;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;

    public function utilities(): BelongsTo 
    {
        return $this->belongsTo(Utilities::class);
    }
}
