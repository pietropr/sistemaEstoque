@section('class', 'produto-novo')
@extends('templates.principal')
@section('conteudo')

    <div class="container">

        <form class="row" method="post" action="{{'/painel/produtos/store'}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <div class="form-group col-sm-6">
                    <label>Nome</label>
                    <input class="form-control" type="text" name="nome" id="nome">
                </div>
                <div class="form-group col-sm-6">
                    <label>Valor</label>
                    <input class="form-control" type="text" name="preco" id="preco">
                </div>
                <div class="form-group col-sm-12">
                    <label>Descricao</label>
                    <input class="form-control" type="text" name="descricao" id="descricao">
                </div>
                <div class="form-group col-sm-6">
                    <label>Enviar imagem do produto</label>

                    <div class="">
                        <input type="file" class="" name="foto[]" id="foto" multiple>
                    </div>
                </div>
                <div class="form-group col-sm-6">
                    <label>Categoria</label>
                   <select class="form-control" name="categoria_id">
                       @foreach($categorias as $c)
                           <option value="{{$c->id}}">{{$c->nome}}</option>
                       @endforeach
                   </select>
                </div>
                <div class="form-group col-sm-12">
                    <label>Informações</label>
                    <textarea name="informacoes" id="descricao"></textarea>
                </div>
                <div class="form-group col-sm-12">
                    <input type="submit" class="btn btn-block btn-lg btn-success" value="Cadastrar" name="envia">
                </div>
            </form>

    </div>

@endsection