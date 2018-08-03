@if(!Auth::guest())
    <script>window.location = "/painel";</script>
@endif
@extends('templates.principal')

@section('class', 'logar')
@section('conteudo')

    <div class="container">
        @if (isset($errors) && count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if($erro = Session::get('erro'))
                <div class="alert alert-danger">
                   <p>Dados inválidos. Por favor tente novamente</p>
                </div>
        @endif
        <div class="row">
            <form class="col-sm-12" method="post" action="/login">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu email">
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Digite sua senha">
                </div>
                <div class="form-group">
                    <input class="btn btn-block btn-primary btn-lg" type="submit" value="Logar">
                </div>
            </form>
        </div>
    </div>

@endsection