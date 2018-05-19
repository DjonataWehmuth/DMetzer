<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = [
        'nome',
        'descricao',
        'site_id',
        'icone',
    ];

    public function Site() {
        return $this->belongsTo(\App\Site::class, 'site_id');
    }
}
