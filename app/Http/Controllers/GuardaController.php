<?php

namespace App\Http\Controllers;

use App\Models\Guarda;
use Illuminate\Http\Request;

class GuardaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return redirect()->route('guarda.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("guarda.create");
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
        $guarda = Guarda::create($request->all());
        return redirect()->route('guarda.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guarda  $guarda
     * @return \Illuminate\Http\Response
     */
    public function show(Guarda $guarda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guarda  $guarda
     * @return \Illuminate\Http\Response
     */
    public function edit(Guarda $guarda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guarda  $guarda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Guarda $guarda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guarda  $guarda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guarda $guarda)
    {
        //
    }
}
