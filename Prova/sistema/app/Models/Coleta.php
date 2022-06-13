<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coleta extends Model
{
    use HasFactory;

    protected $fillable = ['item_id', 'entidade_id', 'quantidade', 'data'];

    public function item() {
        return $this->hasMany(Item::class);
    }

    public function entidade() {
        return $this->hasMany(Entidade::class);
    }
}
