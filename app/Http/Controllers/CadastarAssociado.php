<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastarAssociado extends Controller
{
    public function  create(){

        return view ('home');
    }

    public function store (Request $request) {

        Associado::create([

        'nome' => $request->nome,
        'sobrenome' => $request->sobrenome,
        'endereco' => $request->endereco,
        'telefone' => $request->telefone,
        'email' => $request->email,
        'telefone_rec' => $request ->telefone_rec,
        'cidade' => $request ->cidade,
        'estado' => $request -> estado,
        'description' => $request -> description,
        ]);

        return "Cadastrado com sucesso" ;

       // dd($request->all());
    }
}
