@section('class', 'produtos')
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
                        <th>Quantidade</th>
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
                            <td>{{$p->quantidade}}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="/painel/produtos/ver/{{$p->id}}">Veja mais</a>
                                <a data-toggle="modal" data-target="#modal" class="btn btn-sm btn-danger" data-id="{{$p->id}}" href="#">Excluir</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Excluir produto</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja excluir o item?</p>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-danger">Excluir</a>
                </div>
            </div>
        </div>
    </div>

@endsection