<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $fillable = [
        'imagem',
        'nome',
        'descricao',
        'sigla',

        'mapa',
        'sobre',
        'meta',

        'facebook',
        'twitter',
        'linkedin',

        'email',
        'telefone',
        'rua',
        'cep',
        'numero',
        'cidade',
        ];

    protected $table = 'sites';
}
