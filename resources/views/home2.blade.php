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
                      <div class="card-header" align="center">{{ __('Finalizar o cadastro ou tem mais Dependentes?') }}</div>

                       <div-- class="card-body">
                       @if (Route::has('login'))
                     <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Finalizar Cadastro</a>
                    @else
                        <a href="{{ route('caddep') }}" class="text-sm text-gray-700 underline">Mais Dependente</a>

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
