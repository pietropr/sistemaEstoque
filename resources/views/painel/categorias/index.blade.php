@section('class', 'produtos')
@extends('templates.principal')

@section('conteudo')

    <div class="container">
        <div class="row">
            <h3>Lista de categorias ativas</h3>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome</th>
                        <th>Cadastrado Por</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $c)
                        <tr>
                            <td>{{$c->id}}</td>
                            <td>{{$c->nome}}</td>
                            <td>{{$c->user->name}}</td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="/painel/categorias/ver/{{$c->id}}">Ver mais</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection