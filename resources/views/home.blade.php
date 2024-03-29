@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--div class="card"-->
                <!--div class="card-header">{{ __('Dashboard') }}</!--div-->

                <div id="WAButton"> 
	   <a href="https://wa.me/554788075729?text=Ola%20Gerson%20Estou%20entrando%20em%20contato%20pelo%20site" style="text-decoration: none;" target="_blank">
       <img src="img/whats.png" width="50" height="50"/>

		Estou com Duvida!!
       </a>
     </div>



                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card">
                      <div class="card-header" align="center"> Continue Seu Cadastro Sr: {{Auth::user()->name}} </div>

                   

                       <div-- class="card-body">
                       <form method="POST" action="{{ route('cadastrar_usr') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Completo') }}</label>

                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" value = "{{ Auth::user()->name }}"  readonly required autocomplete="nome" autofocus>

                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="est_civel" class="col-md-4 col-form-label text-md-right">{{ __('Estado Civil') }}</label>

                            <div class="col-md-6">
                            <select id="est_civel" name="est_civel" class="form-control" >
                                 <option value="nao informado" selected >Selecione</option>
                                 <option value="casado">Casado</option>
                                 <option value="solteiro">Solteiro</option>
                                
                            </select>
                                @error('est_civil')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>

                            <div class="col-md-6">
                                <input id="telefone" type="tel" placeholder= "ex 47123456789" pattern="\[0-9]{11}" maxlength="11" class="form-control" name="telefone" required autocomplete="telefone">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telefone_rec" class="col-md-4 col-form-label text-md-right">{{ __('Telefone Recado') }}</label>

                            <div class="col-md-6">
                                <input id="telefone_rec" type="tel" placeholder= "ex 47123456789" pattern="\[0-9]{11}" maxlength="11"  class="form-control @error('telefone_rec') is-invalid @enderror" name="telefone_rec" value="{{ old('telefone_rec') }}" required autocomplete="telefone_rec" autofocus>

                                @error('telefone_rec')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" value = "{{ Auth::user()->email }}"  readonly class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">
                                
                                
                                
                            
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="endereco" class="col-md-4 col-form-label text-md-right">{{ __('Endereço') }}</label>

                            <div class="col-md-6">
                                <input id="endereco" type="text" maxlength="150" class="form-control @error('endereco') is-invalid @enderror" name="endereco" required autocomplete="endereco">

                                @error('endereco')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row">
                            <label for="cidade" maxlength="25" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control" name="cidade" required autocomplete="cidade">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <input id="estado" type="text" maxlength="02"  class="form-control" name="estado" required autocomplete="estado">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Sobre') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" maxlength="500" class="form-control" name="description" required autocomplete="description">
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--label-- for="papel" class="col-md-4 col-form-label text-md-right">{{ __('Papel') }}</!--label-->

                            <div class="col-md-6">
                                <input id="categoria" type="hidden" value = "usuario" class="form-control" name="categoria" >
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
