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

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome do Dependente') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" maxlength = "20" class="form-control @error('nome') is-invalid @enderror" name="nome" value="{{ old('name') }}" required autocomplete="nome" autofocus>

                                @error('nome')
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
                                <input id="idade" type="tel" maxlength = "02" class="form-control" name="idade" required autocomplete="idade">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tipo_dep" class="col-md-4 col-form-label text-md-right">{{ __('Tipo de Dependente') }}</label>

                            <div class="col-md-6">
                            <select id="tipo_dep">
                                 <option value="">Selecione</option>
                                 <option value="conjuge">Conjuge</option>
                                 <option value="filho">Filho(a)</option>
                                 <option value="tutor">Tutor</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                            <select id="genero">
                                 <option value="">Selecione</option>
                                 <option value="masculino">Masculino</option>
                                 <option value="feminino">Feminino</option>
                                 
                            </select>
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
