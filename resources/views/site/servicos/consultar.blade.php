@extends('adminlte::page')

@section('title', 'Alterar serviço')

@section('css')

@stop

@section('content')
    <div class="container-fluid">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form id="formAlterar" action="{{ route('alterar_servico') }}" method="post">
            {!! csrf_field() !!}

            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Alterar serviço</h3>
                </div>

                <div class="box-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                <input type="number" class="form-control" placeholder="ID" name="id" value="{{$servico->id}}" readonly>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$servico->nome}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                                <input type="text" class="form-control" placeholder="Icone" name="icone" value="{{$servico->icone}}">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                <select class="form-control" required name="site_id">
                                    @foreach($sites as $site)
                                        <option
                                                @if($site->id === $servico->site_id)
                                                selected
                                                @endif
                                                value="{{$site->id}}">{{$site->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <textarea class="form-control" placeholder="Descrição" name="descricao" rows="5">{{$servico->descricao}}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="btn-group btn-group-justified col-md-12">
                <div class="btn-group">
                    <a href="javascript:history.back()" onclick="return confirm('Deseja descartar as alterações?');" type="button" class="btn btn-default">Voltar</a>
                </div>

                <div class="btn-group">
                    <button type="submit" class="btn btn-default" onclick="return confirm('Deseja gravar as alterações?');" form="formAlterar">Gravar</button>
                </div>

                <div class="btn-group">
                    <form id="formExcluir" method="post" action="{{route('excluir_servico')}}">
                        <input value="{{$servico->id}}" name="id" hidden>
                        {!! csrf_field() !!}
                        <button type="submit" onclick="return confirm('Deseja excluir o serviço?');" class="btn btn-default" form="formExcluir">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')

@stop