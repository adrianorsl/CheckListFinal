<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = ['id','placa','numero'];

    public function ocorrencia()
    {
        return $this->hasMany('App\Models\Ocorrencia');
    }

}
