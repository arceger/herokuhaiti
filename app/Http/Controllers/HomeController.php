<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {

        
        return view('home');
    }

    public function adm()
    {
       if(auth()->user()->email = 'arceger@hotmail.com'){

        return view('admhome');
       }
        
        
    }
/*
{{Auth::user()->name}} 
    public function index3()
    {
        return view('cadastrar');
    }


  

  

   */


}
