<?php

namespace App\Http\Controllers;

use App\Models\Condicao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CondicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('condicao.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(Gate::denies(ability: 'adm')){
            abort(code: 403, message: 'Acesso negado');
        }
        return view("condicao.create");
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
        $condicao = Condicao::create($request->all());
        return redirect()->route('condicao.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Condicao  $condicao
     * @return \Illuminate\Http\Response
     */
    public function show(Condicao $condicao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Condicao  $condicao
     * @return \Illuminate\Http\Response
     */
    public function edit(Condicao $condicao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Condicao  $condicao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condicao $condicao)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Condicao  $condicao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condicao $condicao)
    {
        //
    }
}
