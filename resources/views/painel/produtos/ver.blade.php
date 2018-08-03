@section('class', 'produto-ver')
@extends('templates.principal')
@section('conteudo')

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            <h1 class="text-uppercase bold font-weight-bold">{{$produto->nome}}</h1>
        </div>
        <div class="fotos">
            <div class="row flex-lg-wrap owl-carousel" style="width: 20%">
                @foreach($fotos as $foto)
                    <article class="item">
                        <img class="img-thumbnail" width="250" src="/storage/produtos/produto-{{$produto->id}}/{{$foto->caminho}}">
                    </article>

                @endforeach
            </div>

        </div>
        <hr>
        <p><strong>Código: </strong>{{$produto->id}}</p>
        <p><strong>Nome: </strong>{{$produto->nome}}</p>
        <p><strong>Preço: </strong>R$ {{number_format($produto->preco, 2, ',', '.')}}</p>
        <p><strong>Descricao: </strong>{{$produto->descricao}}</p>
        <p><strong>Categoria: </strong>{{$produto->categoria->nome}}</p>

        <h3>INFORMAÇÕES COMPLETAS</h3>
        <hr>
        <div class="informacoes" style="border: 1px solid;padding: 30px;margin-bottom: 50px;">
            {!! $produto->informacoes !!}
        </div>
        <h3>FOTOS DO PRODUTO</h3>
        <hr>

    </div>

@endsection