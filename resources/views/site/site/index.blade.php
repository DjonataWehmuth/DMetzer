@extends('adminlte::page')

@section('title', 'Sites')

@section('content_header')
    <h1>Sites</h1>
@stop

@section('content')
    <table class="table table-striped table-bordered table-hover col-md-12">
        <thead>
            <tr>
                <th class="col-md-10">Nome</th>
                <th class="col-md-2">Situação</th>
            </tr>
        </thead>

        <tbody>
            @foreach($sites as $site)
                @if($site->ativo === 'S')
                    <tr class="success" onclick='window.location.href = "{{route('site', ['id'=>$site->id])}}";'>
                @else
                    <tr class="danger" onclick='window.location.href = "{{route('site', ['id'=>$site->id])}}";'>
                @endif
                    <td class="col-md-10">{{$site->nome}}</td>
                    <td class="col-md-2">
                        @if($site->ativo === 'S')
                            Ativo
                        @else
                            Editando
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" class="btn btn-default">Voltar</button>
        </div>
        <div class="btn-group" role="group">
            <a href="{{route('novo_site')}}" class="btn btn-default">Novo site</a>
        </div>
    </div>
@stop

@section('js')

@stop