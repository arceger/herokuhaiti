<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Associado;
use App\Models\Grupo;

class CadastrarAssociado extends Controller
{
    public function  create(){

        return view ('cadastrar');
     
    }

    public function store (Request $request) {

        Associado::create([
        'nome' => $request->nome,
        'est_civel' => $request->est_civel,
        'endereco' => $request->endereco,
        'telefone' => $request->telefone,
        'email' => $request->email,
        'telefone_rec' => $request ->telefone_rec,
        'cidade' => $request ->cidade,
        'estado' => $request -> estado,
        'description' => $request -> description,
        ]);

        Grupo::create([
            'categoria' => $request -> categoria,
            'email' => $request -> email,
            'nome' => $request -> nome,
           ]);

        return view ('caddep',$request);
      
       
             
    }
/*
    public function show($id){

        $associado = Associado::findOrFail($id);
        return view('associados.show',['associado'=>$associado]) ;
    }


*/

}
