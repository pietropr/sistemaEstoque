@section('class', 'categoria-novo')
@extends('templates.principal')
@section('conteudo')

    @if($successo = Session::get('success'))
        <div class="alert alert-success">
            {{$successo}}
        </div>
    @endif
    <div class="container">
        <form class="row col-sm-8 offset-2" method="post" action="/painel/categorias/salvar" enctype="multipart/form-data">
            <h2>Cadastro de categoria</h2>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group col-sm-12">
                <label>Nome da categoria</label>
                <input required="required" class="form-control" type="text" name="nome" id="nome">
            </div>
            <div class="form-group col-sm-12">
                <input type="submit" class="btn btn-block btn-lg btn-success" value="Cadastrar" name="envia">
            </div>
        </form>

    </div>

@endsection