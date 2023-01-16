<?php

namespace App\Http\Controllers;

use App\Models\Carrocheck;
use App\Models\Municao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CarrocheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Gate::denies(ability: 'adm')){
            abort(code: 403, message: 'Acesso negado');
        }
        if (request('find') != null)
            {
                $busca = request('find');
                $carrocheck = Carrocheck::where('id','like',"$busca%")->paginate(1);
            
            }
            else
                $carrocheck = Carrocheck::orderBy('id','desc')->paginate(1);
        return view("carrocheck.index",['carrocheck'=>$carrocheck]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("carrocheck.create");
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
        
        $carrocheck = Carrocheck::create($request->all());
        return redirect()->route('ocupante.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Carrocheck  $carrocheck
     * @return \Illuminate\Http\Response
     */
    public function show($ocorrencia_id)
    {
        //
        if(Gate::denies(ability: 'adm')){
            abort(code: 403, message: 'Acesso negado');
        }
        $carrocheck = Carrocheck::find($ocorrencia_id);
        return view('carrocheck.show', ['carrocheck'=>$carrocheck]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Carrocheck  $carrocheck
     * @return \Illuminate\Http\Response
     */
   
}
