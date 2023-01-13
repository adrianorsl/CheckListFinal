<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrocheck extends Model
{
    use HasFactory;

    protected $fillable = ['id','km','capo','paralamaDianteiro_esq','paralamaDianteiro_dir', 'paralamaTraseiro_esq',
    'paralamaTraseiro_dir','parachoqueDianteiro','portaDianteira_esq','portaDianteira_dir','portaTraseira_esq',
    'portaTraseira_dir','luzDianteira','luzTraseira','parachoqueTraseiro','capoTraseiro','giroflex','vidro','interno',
    'impressora','smartphone','motor'];

    public function ocorrencia()
    {
        return $this->belongsTo('App\Models\Ocorrencia');
    }
}
