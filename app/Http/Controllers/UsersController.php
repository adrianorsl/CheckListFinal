<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UsersController 
{
    public function create(){
        if(Gate::denies(ability: 'adm')){
            abort(code: 403, message: 'Acesso negado');
        }
        return view('users.create');
    }

    public function store(Request $request){

        $data = $request->except(['_token']);
        $data['password'] = Hash::make($data['password']);

        $user = User::create($data);
       

        return redirect()->route('ocorrencia.index');
    }
}
