<?php

namespace App\Http\Controllers;

use App\Models\Ocorrencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class OcorrenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request('find') != null)
            {
                $busca = request('find');
                $ocorrencia = Ocorrencia::where('datainicio','like',"$busca%")->paginate(5);
            
            }
            else
                $ocorrencia = Ocorrencia::orderBy('id','desc')->paginate(4);
        return view("ocorrencia.index",['ocorrencia'=>$ocorrencia]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("ocorrencia.create");
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
        $ocorrencia = Ocorrencia::create($request->all());
        
        return redirect()->route('carrocheck.create', ['id'=>$ocorrencia->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
    public function show(Ocorrencia $id)
    {
        //
        if(Gate::denies(ability: 'adm')){
            abort(code: 403, message: 'Acesso negado');
        }
        $ocorrencia = Ocorrencia::find($id);
        return view('ocorrencia.show', ['ocorrencia'=>$ocorrencia]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ocorrencia  $ocorrencia
     * @return \Illuminate\Http\Response
     */
   
     public function destroy($id)
    {    
        Ocorrencia::destroy($id);
        return view('ocorrenia.index');
    }
}
