@extends('adminlte::page')

@section('title', 'Novo site')

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

    <form action="{{ route('gravar_servico') }}" method="post">
        {!! csrf_field() !!}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Novo serviço</h3>
            </div>

            <div class="box-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                            <input type="text" class="form-control" placeholder="Nome" name="nome">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-certificate"></i></span>
                            <input type="text" class="form-control" placeholder="Icone" name="icone">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file"></i></span>
                            <select class="form-control" required name="site_id">
                                <option selected disabled>Selecione</option>
                                @foreach($sites as $site)
                                    <option value="{{$site->id}}">{{$site->nome}}</option>
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
                            <textarea class="form-control" placeholder="Descrição" name="descricao" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-save"></i></span>
                            <button class="btn btn-default col-md-12">Gravar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
@stop

@section('js')

@stop