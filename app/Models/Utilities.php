<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilities extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function type(): HasMany
    {
        return $this->hasMany(Type::class);
    }
}
