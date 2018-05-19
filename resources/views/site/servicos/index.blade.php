@extends('adminlte::page')

@section('title', 'Serviços')

@section('content_header')
    <h1>Serviços</h1>
@stop

@section('content')
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Nome</th>
        </tr>
        </thead>

        <tbody>
        @foreach($servicos as $servico)
            <tr class="info" onclick='window.location.href = "{{route('servico', ['id'=>$servico->id])}}";'>
                <td>{{$servico->nome}}</td>
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
            <a href="{{route('novo_servico')}}" class="btn btn-default">Novo serviço</a>
        </div>
    </div>
@stop

@section('js')

@stop