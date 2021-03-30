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
                            <select id="tipo_dep" name="tipo_dep" class="form-control" >
                                 <option value="nao informado" selected >Selecione</option>
                                 <option value="conjuge">Conjuge</option>
                                 <option value="filho">Filho(a)</option>
                                 <option value="tutor">Tutor</option>
                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="genero" class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                            <div class="col-md-6">
                            <select id="genero" name="genero" class="form-control" >
                                 <option value="nao informado" selected >Selecione</option>
                                 <option value="masculino">Masculino</option>
                                 <option value="feminino">Feminino</option>
                                 
                            </select>
                            </div>
                        </div>
<!-- ADD ESCOLARIDADE/-->
                        <div class="form-group row">
                            <label for="escola_atual" class="col-md-4 col-form-label text-md-right">{{ __('Escola Atual') }}</label>

                            <div class="col-md-6">
                                <input id="escola_atual" type="text" maxlength = "50" class="form-control" name="escola_atual" required autocomplete="escola_atual">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="grau_inst" class="col-md-4 col-form-label text-md-right">{{ __('Grau Instrução') }}</label>

                            <div class="col-md-6">
                            <select id="grau_inst" name="grau_inst" class="form-control" >
                                 <option value="nao informado" selected >Selecione</option>
                                 <option value="Fundamental">Fundamental</option>
                                 <option value="Medio">Medio</option>
                                 <option value="Superior">Superior</option>
                                 <option value="Pos Graduado">Pos Graduado</option>
                                 
                            </select>
                            </div>
                            <input id="id" type="hidden"  class="form-control" name="id" value = "{{$id}}">
                    

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
