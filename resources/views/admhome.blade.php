@extends('layouts.app')

@section('content')

<link href="css/style.css" rel="stylesheet" />

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--div class="card"-->
                <!--div class="card-header">{{ __('Dashboard') }}</!--div-->

                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                      <div class="card-header" align="center">{{ __('Gerenciamento de Usuarios') }}</div>

                       <div-- class="card-body">
                       @if (Route::has('login'))
                     <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth

                    <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <button type="button" style="background-color: #b4b7b7">
                            <a href="{{ url('/cadastrar') }}" class="next">&laquo; Cadastrar</a>
                            <a href="{{ url('/show') }}" class="next">Pesquisar &raquo;</a>
                                </button>
                            </div>
                            <!--div-- class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                <a href="{{ url('/cadastrar') }}">{{ __('Cadastrar') }}</a>
                                </button>
<a href="#" class="previous">&laquo; Previous</a>
<a href="{{ url('https://hidden-harbor-63058.herokuapp.com/') }}" class="next">Finalizar Cadastro &raquo;</a>

<a href="#" class="previous round">&#8249;</a>
<a href="#" class="next round">&#8250;</a>
                            </!--div-->

                        </div>

                      
                    @else
                       

                 @endauth
                </div>
            @endif    
                              <!--/div-->
                               <!--/div-->
               </div>
            </div>
        </div>
    </div>
</div>
@endsection
