<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependentes;
use App\Models\Escolaridade;
use App\Models\Medical;
use App\Models\Size_vest;

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
        
        Medical::create([
        'email' => $request->email,
        'vacinas_st' => $request -> vacinas_st,
        'vacinas_brief' => $request -> vacinas_brief,
        'alergias' => $request -> alergias,
        ]);

        Size_vest::create([
         'altura' => $request -> altura,
         'cintura' => $request -> cintura,
         'busto' => $request -> busto,
         'calcado' => $request -> calcado,
        ]);
       

        return view ('home2');

       
    }
}
