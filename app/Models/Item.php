<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'preco'];

    public function mesa(){
        return $this->belongsToMany(Mesa::class, 'mesa_item');
    }
}
