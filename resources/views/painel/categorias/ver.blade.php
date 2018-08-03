@section('class', 'ver-categoria')
@extends('templates.principal')
@section('conteudo')

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <h1 class="text-uppercase bold font-weight-bold">{{$categoria->nome}}</h1>
        </div>
        <hr>
        <p><strong>Código: </strong>{{$categoria->id}}</p>


    </div>

@endsection