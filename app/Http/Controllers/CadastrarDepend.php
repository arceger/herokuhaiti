<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependentes;

class CadastrarDepend extends Controller
{
    public function  create(){

        return view ('cadastrar');

       
    }

    public function store (Request $request) {


        


        Dependentes::create([
        'nome' => $request->nome,
        'sobrenome' => $request->sobrenome,
        'idade' => $request ->idade,
        'genero' => $request ->genero,
        'tipo_dep' => $request -> tipo_dep,
        ]);

        return "DEPENDENTE CADASTRADO COM SUCESSO";

       
    }
}
