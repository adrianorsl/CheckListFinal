<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{
    use HasFactory;

    protected $fillable = ['motorista','dataInicio', 'dataFim', 'veiculo_id'];

    public function carrocheck()
    {
        return $this->hasOne('App\Models\Carrocheck');
    }
    public function veiculo()
    {
        return $this->belongsTo('App\Models\Veiculo');
    }
    public function armas()
    {
        return $this->belongsToMany('App\Models\Arma','armas_ocor_mun');                            
    }
    public function municoes()
    {
        return $this->belongsToMany('App\Models\Municao','armas_ocor_mun');                            
    }
    public function ocupantes()
    {
        return $this->hasMany('App\Models\Ocupante');
    }
}
