<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependentes;
use App\Models\Escolaridade;

class CadastrarDepend extends Controller
{
    public function  create(){

        return view ('caddep');

       
    }

    public function store (Request $request) {


        


        Dependentes::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'idade' => $request ->idade,
        'genero' => $request ->genero,
        'tipo_dep' => $request -> tipo_dep,
        ]);

        Escolaridade::create([
            'email' => $request->email,
            'grau_inst' => $request -> grau_inst,
            'escola_atual'=> $request ->escola_atual,
        ]);

        return "DEPENDENTE CADASTRADO COM SUCESSO";

       
    }
}
