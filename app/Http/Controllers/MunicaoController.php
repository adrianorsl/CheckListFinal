<?php

namespace App\Http\Controllers;
use App\Models\Armas_ocor_mun;
use App\Models\Municao;
use App\Models\Ocorrencia;
use Illuminate\Http\Request;

class MunicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('municao.create');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("municao.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $oco = Ocorrencia::latest()->first();
        $t = $oco->id;
        $municaos = Municao::create($request->all());
        $x = $municaos->id;
        $armaOcoMun = new Armas_ocor_mun;
        $armaOcoMun->arma_id = $request->armas_id;
        $armaOcoMun->ocorrencia_id = $t;
        $armaOcoMun->municoes_id = $x;
        $armaOcoMun->save();
        //$armaOcoMun = Armas_ocor_mun::create($request->all());
        return redirect()->route('municao.index');
    }

    public function destroy($municoes_id)
    {
        //
        Armas_ocor_mun::where('municoes_id', $municoes_id)->delete();
        return redirect()->route('municao.create');

    }
   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Municao  $municao
     * @return \Illuminate\Http\Response
     */
    
}
