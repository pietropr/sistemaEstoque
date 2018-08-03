@section('class', 'produto-novo')
@extends('templates.principal')
@section('conteudo')

    <div class="container" style="margin-top: 100px;">
        <div class="row">
            @if($erro = Session::get('success'))
                <div class="alert alert-success">
                    {{$erro}}
                </div>
            @endif
        </div>
        <div class="row">
            <h2>Listagem de produtos</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Cód</th>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Descrição</th>
                        <th>Categoria</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->nome}}</td>
                            <td>{{$p->preco}}</td>
                            <td>{{$p->descricao}}</td>
                            <td>{{$p->categoria->nome}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="/painel/produtos/ver/{{$p->id}}">Veja mais</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection