<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    use HasFactory;

    protected $fillable = ['numero', 'descricao'];

    public function ocorrencias()
    {
        return $this->belongsToMany('App\Models\Ocorrencia', 'Armas_ocor_mun');
                   
                                    
    }
    public function municaos()
    {
        return $this->belongsToMany('App\Models\Municao', 'Armas_ocor_mun');
                       
    }

   
}
