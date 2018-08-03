@extends('templates.principal')


@section('conteudo')

    @if ($alert = Session::get('alerta'))
        <div class="alert text-center alert-success">
            {{ $alert }}
        </div>
    @endif
@endsection