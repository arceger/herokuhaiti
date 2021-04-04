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

            'escola_atual' => $request->escola_atual,
            'comments' => $request->comments,
            'grau_inst' => $request->grau_inst,
        ]);
        
        Medical::create([
        'email' => $request->email,
        'vacinas_st' => $request -> vacinas_st,
        'vacinas_brief' => $request -> vacinas_brief,
        'tipo_sang' => $request -> tipo_sang,
        'alergias' => $request -> alergias,
        ]);

        Size_vest::create([
         'altura' => $request -> altura,
         'cintura' => $request -> cintura,
         'busto' => $request -> busto,
         'peso' => $request -> peso,
         'calcado' => $request -> calcado,
        ]);
       

        return view ('caddep',$request);

       
    }
}
