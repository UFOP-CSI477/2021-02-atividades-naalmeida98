<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'category_id', 'value_av', 'value_ap', 'description'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    //adicionando um novo atributo
    protected function qtdCart(): Attribute
    {
        return new Attribute(
            get: fn () => '1',
        );
    }

    protected function porcentage(): Attribute
    {
        return new Attribute(
            get: fn () => '1.1',
        );
    }

    protected $appends = ['qtd_cart','porcentage'];
}
