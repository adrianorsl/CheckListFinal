<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municao extends Model
{
    use HasFactory;

    protected $fillable = ['quantidade'];

    public function armas()
    {
        return $this->belongsToMany('App\Models\Arma','armas_ocor_mun');
               
                                    
    }
    public function ocorrencias()
    {
        return $this->belongsToMany('App\Models\Ocorrencia','armas_ocor_mun');
                         
    }
}
