<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mesa extends Model
{
    use HasFactory;

    protected $fillable = ['mesa'];

    public function item(): BelongsToMany
    {
        return $this->belongsToMany(Item::class, 'mesa_item');
    }
}
