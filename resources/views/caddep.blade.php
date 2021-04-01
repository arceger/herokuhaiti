@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          

                  <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                      <div class="card">
                          <div class="card-header" align="center">{{ __('Agora seus Dependentes') }}</div>

                       <div class="card-body">
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

                        <div class="card-header" align="center">{{ __('Dados Escolares') }}</div>
                             
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
                            </div> 

                            <div class="card-header" align="center">{{ __('Saude') }}</div>
                           
                            <div class="form-group row">
                                <label for="vacinas_st" class="col-md-4 col-form-label text-md-right">{{ __('Estatus Vacinação') }}</label>

                              <div class="col-md-6">
                              <select id="vacinas_st" name="vacinas_st" class="form-control" >
                                 <option value="nao informado" selected >Selecione</option>
                                 <option value="completo">Completo</option>
                                 <option value="pendente">Pendente</option> 
                               </select>
                              </div>
                            </div>
                    

                            <div class="form-group row">
                               <label for="alergias" class="col-md-4 col-form-label text-md-right">{{ __('Algum tipo Alergia ?') }}</label>

                               <div class="col-md-6">
                               <select id="alergias" name="alergias" class="form-control" >
                                 <option value="nao sabe" selected >Selecione</option>
                                 <option value="sim">Sim</option>
                                 <option value="nao">Nao</option> 
                               </select>
                               </div>
                             </div>

                            <div class="form-group row">
                              <label for="vacinas_brief" class="col-md-4 col-form-label text-md-right">{{ __('Obs. Vacinas/Alergia') }}</label>

                              <div class="col-md-6">
                                <input id="vacinas_brief" type="text" maxlength = "100" class="form-control" name="vacinas_brief" required autocomplete="vacinas_brief">
                              </div>
                            </div>


                               <div class="card-header" align="center">{{ __('Vestuario Medidas') }}</div>

                              <div class="form-group row">
                                 <label for="altura" class="col-md-4 col-form-label text-md-right">{{ __('Altura') }}</label>

                                 <div class="col-md-6">
                                  <input id="altura" type="tel" maxlength = "04" class="form-control" name="altura" required autocomplete="altura">
                                  </div>
                               </div>

                               <div class="form-group row">
                                 <label for="cintura" class="col-md-4 col-form-label text-md-right">{{ __('Cintura') }}</label>

                                 <div class="col-md-6">
                                    <input id="cintura" type="tel" maxlength = "02" class="form-control" name="cintura" required autocomplete="cintura">
                                  </div>
                               </div>

                               <div class="form-group row">
                                 <label for="busto" class="col-md-4 col-form-label text-md-right">{{ __('Manequin') }}</label>

                                   <div class="col-md-6">
                                     <input id="busto" type="tel" maxlength = "02" class="form-control" name="busto" required autocomplete="busto">
                                    </div>
                                </div>

                               <div class="form-group row">
                                  <label for="calcado" class="col-md-4 col-form-label text-md-right">{{ __('Calçado') }}</label>

                                  <div class="col-md-6">
                                    <input id="calcado" type="tel" maxlength = "02" class="form-control" name="calcado" required autocomplete="calcado">
                                   </div>
                                </div>


                               <div class="form-group row mb-0">
                                 <div class="col-md-6 offset-md-4">
                                   <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                   </button>
                                 </div>
                               </div>
                               <div class="form-group row mb-0">
                                 <div class="col-md-6 offset-md-4">
                                   <button type="url" class="btn btn-primary">
                                   <a href="{{ url('https://hidden-harbor-63058.herokuapp.com/') }}">Voltar</a>
                                   </button>
                                 </div>
                               </div>

                      </form>
         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
