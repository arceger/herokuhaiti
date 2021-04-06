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
                    <h3> lista Associados</he>
    <div class="row justify-content-center">
        <div class="col-md-8">

<table border ="1">

<tr>
<td>Nome</td>
<td>E-mail</td>
<td>Idade</td>
</tr>
@foreach($dependentes as $dependente)

<tr>
<td>{{$dependente['nome']}}</td>
<td>{{$dependente['email']}}</td>
<td>{{$dependente['idade']}}</td>
</tr>
@endforeach
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
