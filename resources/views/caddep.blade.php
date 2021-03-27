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
                      <div class="card-header" align="center">{{ __('Agora seus Dependentes') }}</div>

                       <div-- class="card-body">
                       <form method="POST" action="{{ route('cadastrar_dep') }}">
                        @csrf

                        <!--div-- class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('RG') }}</label>

                            <div class="col-md-6">
                                <input id="id" type="text" class="form-control" maxlength = "04"  name="id" required autocomplete="id">
                            </div>
                        </!--div-->


                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Dependente') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('name') }}" required autocomplete="nome" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sobrenome" class="col-md-4 col-form-label text-md-right">{{ __('Sobre Nome Dependente') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="sobrenome" value="{{ old('sobrenome') }}" required autocomplete="sobrenome" autofocus>

                                @error('sobrenome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <!--label-- for="papel" class="col-md-4 col-form-label text-md-right">{{ __('Papel') }}</!--label-->

                            <div class="col-md-6">
                                <input id="email" type="hidden"  class="form-control" name="email" value = "{{$email}}">
                             

                            </div>
                        </div>

       

                        

                        <div class="form-group row">
                            <label for="idade" class="col-md-4 col-form-label text-md-right">{{ __('Idade') }}</label>

                            <div class="col-md-6">
                                <input id="idade" type="text" class="form-control" name="idade" required autocomplete="idade">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_dep" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Dependente') }}</label>

                            <div class="col-md-6">
                                <input id="tipo_dep" type="text" class="form-control" name="tipo_dep" required autocomplete="tipo_dep">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Sobre') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control" name="description" required autocomplete="description">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                                <input id="genero" type="text"  class="form-control" name="genero" >
                            </div>
                        </div>
                    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                <!--/div-->
            <!--/div-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
