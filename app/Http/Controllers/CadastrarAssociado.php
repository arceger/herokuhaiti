<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Associados;

class CadastrarAssociado extends Controller
{
    public function  create(){

        return view ('cadastrar');

       
    }

    public function store (Request $request) {


        


        Associados::create([
        'id' => $request -> id,
        'nome' => $request->nome,
        'sobrenome' => $request->sobrenome,
        'endereco' => $request->endereco,
        'telefone' => $request->telefone,
        'email' => $request->email,
        'telefone_rec' => $request ->telefone_rec,
        'cidade' => $request ->cidade,
        'estado' => $request -> estado,
        'description' => $request -> description,
        'papel' => $request -> papel,
        ]);

        return "Cadastrado com sucesso" ;

       
    }
}
