@extends('layouts.app')

@section('content')
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
                                <button type="submit" class="btn btn-primary">
                               <a href="{{ url('https://hidden-harbor-63058.herokuapp.com/') }}" class="text-sm style= margin-top: 15px; margem-direita: 10px;">Finalizar Cadastro</a>
                                </button>
                            </div>
                            <!--div-- class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                <a href="{{ url('/cadastrar') }}">{{ __('Cadastrar') }}</a>
                                </button>
                            </!--div-->

                        </div>

                        <!--a href="{{ url('https://hidden-harbor-63058.herokuapp.com/') }}" class="text-sm style="margin-top: 15px; margem-direita: 10px;">Finalizar Cadastro</a>
                          

                         <div class="col-md-6 offset-md-4">
                                   <p>
                                   <button type="submit" class="btn btn-primary">
                                   <a> {{ __('Cadastrar') }}</a>

                                   <a href="{{url('transaction/{transactions}/edit ) }}" class="btn btn-primary" style="margin-top: 15px; margem-direita: 10px;" >Edit Record</a>

                                   href="{{ url('https://hidden-harbor-63058.herokuapp.com/') }}"
                                   </button>


                                   
                                 </div>

                        <a-- href="{{ url('/cadastrar') }}" class="text-sm text-gray-700 underline">Mais Dependente</a-->
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
