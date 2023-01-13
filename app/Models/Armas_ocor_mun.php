<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armas_ocor_mun extends Model
{
    use HasFactory;

    protected $fillable = ['arma_id', 'ocorrencia_id', 'municoes_id'];

}
