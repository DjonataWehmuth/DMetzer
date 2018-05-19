@extends('adminlte::page')

@section('title', "Alterar site")

@section('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@stop

@section('content')
    <div class="container-fluid">

        @if (session('status'))
            <div class="alert alert-warning">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('alterar_site') }}" method="post" id="formAlterar">
            {!! csrf_field() !!}

            <div class="box box-default">
                <div class="box-header with-border">
                    <h3 class="box-title col-md-12">Site: {{$site->nome}}</h3>
                </div>

                <div class="box-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-minus"></i></span>
                                <input type="text" class="form-control" placeholder="ID" name="id" readonly value="{{$site->id}}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-minus"></i></span>
                                <input type="text" class="form-control" placeholder="Sigla" name="sigla" {{$readonly}}  value="{{$site->sigla}}">
                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" {{$readonly}} value="{{$site->nome}}">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                <input type="text" class="form-control" placeholder="Descrição" name="descricao" {{$readonly}} value="{{$site->descricao}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-file"></i></span>
                                <input type="text" class="form-control" placeholder="Imagem" id="imagem" name="imagem" {{$readonly}} value="{{$site->imagem}}">
                            </div>
                        </div>

                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                <input type="text" class="form-control" placeholder="Linkedin" name="linkedin" id="linkedin" {{$readonly}} value="{{$site->linkedin}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                <input type="text" class="form-control" placeholder="Twitter" name="twitter" id="twitter" {{$readonly}} value="{{$site->twitter}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                <input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook" {{$readonly}} value="{{$site->facebook}}">
                            </div>
                        </div>
                    </div>

                    <br>


                    <div class="row">
                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                                <input type="text" class="form-control" placeholder="Rua" name="rua" id="rua"{{$readonly}} value="{{$site->rua}}">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                                <input type="text" class="form-control" placeholder="Número" name="numero" id="numero"{{$readonly}} value="{{$site->numero}}">
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                                <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="cidade" {{$readonly}} value="{{$site->cidade}}">
                            </div>
                        </div>


                        <div class="col-md-2">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep"{{$readonly}} value="{{$site->cep}}">
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                <textarea class="form-control" placeholder="Mapa" style="resize: none" name="mapa" rows="5" {{$readonly}}>{{$site->mapa}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                                <textarea class="form-control" placeholder="Sobre" style="resize: none" name="sobre" rows="5" {{$readonly}}>{{$site->sobre}}</textarea>
                            </div>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                                <textarea class="form-control" placeholder="Index" style="resize: none" name="meta" rows="5"{{$readonly}}>{{$site->meta}}</textarea>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>

        <div class="row">
            <div class="btn-group btn-group-justified col-md-12">
                <div class="btn-group">
                    <a type="button" href="javascript:history.back()" onclick="return confirm('Deseja descartar as alterações?');" class="btn btn-default">Voltar</a>
                </div>

                @if($site->ativo === 'N')
                    <div class="btn-group">
                        <button type="submit" class="btn btn-default"  onclick="return confirm('Deseja gravar as alterações?');" form="formAlterar">Gravar</button>
                    </div>

                    <div class="btn-group">
                        <button type="reset" class="btn btn-default" onclick="return confirm('Desfazer as alterações?');" form="formAlterar">Limpar</button>
                    </div>

                    <div class="btn-group">
                        <form method="post" action="{{route('ativar_site')}}" id="formAtivar">
                            <input value="{{$site->id}}" name="id" hidden>
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-default" onclick="return confirm('Deseja ativar o site?');" form="formAtivar">Ativar</button>
                        </form>
                    </div>
                @endif

                @if($site->ativo === 'S')
                    <div class="btn-group">
                        <form method="post" action="{{route('editar_site')}}" id="formEditar">
                            <input value="{{$site->id}}" name="id" hidden>
                            {!! csrf_field() !!}
                            <button type="submit" onclick="return confirm('Deseja editar o site?');" class="btn btn-default" form="formEditar">Editar</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </div>
@stop

@section('js')

@stop