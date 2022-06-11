<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['descricao','datalimite','tipo','equipamento_id','user_id'];

    public function equipamento() {
        return $this->belongsTo(Equipamento::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    //adicionando um novo atributo
    protected function equipamentoNome(): Attribute
    {
        return new Attribute(
            get: fn () => '',
        );
    }

    protected function userNome(): Attribute
    {
        return new Attribute(
            get: fn () => '',
        );
    }

    protected $appends = ['equipamento_nome','user_nome'];
}
