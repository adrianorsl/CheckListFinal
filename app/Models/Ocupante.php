<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocupante extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'escala', 'ocorrencia_id'];

    public function ocorrencia()
    {
        return $this->belongsTo('App\Models\Ocorrencia');
    }
}
