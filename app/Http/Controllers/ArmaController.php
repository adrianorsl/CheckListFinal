<?php

namespace App\Http\Controllers;

use App\Models\Arma;
use Illuminate\Http\Request;

class ArmaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('arma.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("armas.create");
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
        $arma = Arma::create($request->all());
        return redirect()->route('arma.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function show(Arma $arma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function edit(Arma $arma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Arma $arma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Arma  $arma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Arma $arma)
    {
        //
    }
}
