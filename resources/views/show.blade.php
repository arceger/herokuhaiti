@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3 align = "center"> Lista de Associados</he>
    <div class="row justify-content-center">
        <div class="col-md-8">

        <table border ="1">

                <tr>
                     <td>ID</td>
                     <td>Nome</td>
                     <td>E-mail</td>
                     <td>Telefone</td>
                     <td>Estado Civel</td>
                     <td>Endereço</td>
                </tr>
                @foreach($associados as $associado)
                
                <tr>
                       <td>{{$associado['id']}}</td>
                       <td>{{$associado['nome']}}</td>
                       <td>{{$associado['email']}}</td>
                       <td>{{$associado['telefone']}}</td>
                       <td>{{$associado['est_civel']}}</td>
                       <td>{{$associado['endereco']}}</td>
                </tr>
                @endforeach
        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
