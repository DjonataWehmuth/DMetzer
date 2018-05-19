@extends('adminlte::page')

@section('title', 'Novo site')

@section('css')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
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

    <form action="{{ route('gravar_site') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Novo site</h3>
            </div>

            <div class="box-body">

                <div class="row">
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-minus"></i></span>
                            <input type="text" class="form-control" placeholder="Sigla" name="sigla" value="{{old('sigla')}}">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                            <input type="text" class="form-control" placeholder="Nome" name="nome"  value="{{old('nome')}}">
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                            <input type="text" class="form-control" placeholder="Descrição" name="descricao"  value="{{old('descricao')}}">
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-file"></i></span>
                            <input type="text" class="form-control" placeholder="Imagem" name="imagem" id="imagem"  value="{{old('imagem')}}">
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                            <input type="text" class="form-control" placeholder="Linkedin" name="linkedin" id="linkedin"  value="{{old('linkedin')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                            <input type="text" class="form-control" placeholder="Twitter" name="twitter" id="twitter"  value="{{old('twitter')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                            <input type="text" class="form-control" placeholder="Facebook" name="facebook" id="facebook"  value="{{old('facebook')}}">
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-street-view"></i></span>
                            <input type="text" class="form-control" placeholder="Rua" name="rua" id="rua"  value="{{old('rua')}}">
                        </div>
                    </div>

                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ol"></i></span>
                            <input type="text" class="form-control" placeholder="Número" name="numero" id="numero"  value="{{old('numero')}}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                            <input type="text" class="form-control" placeholder="Cidade" name="cidade" id="cidade"  value="{{old('cidade')}}">
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                            <input type="text" class="form-control" placeholder="CEP" name="cep" id="cep"  value="{{old('cep')}}">
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="tel" class="form-control" placeholder="Telefone" name="telefone" id="telefone"  value="{{old('telefone')}}">
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-at"></i></span>
                            <input type="email" class="form-control" placeholder="E-mail" name="email" id="email"  value="{{old('email')}}">
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <textarea class="form-control" placeholder="Mapa" style="resize: none" name="mapa" rows="5"></textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-align-justify"></i></span>
                            <textarea class="form-control" placeholder="Sobre" style="resize: none" name="sobre" rows="5"></textarea>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-hashtag"></i></span>
                            <textarea class="form-control" placeholder="Index" style="resize: none" name="meta" rows="5"></textarea>
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
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

    <!-- Initialize Quill editor -->
    <script>
        var toolbarOptions = [
            ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
            ['blockquote', 'code-block'],

            [{ 'header': 1 }, { 'header': 2 }],               // custom button values
            [{ 'list': 'ordered'}, { 'list': 'bullet' }],
            [{ 'script': 'sub'}, { 'script': 'super' }],      // superscript/subscript
            [{ 'indent': '-1'}, { 'indent': '+1' }],          // outdent/indent
            [{ 'direction': 'rtl' }],                         // text direction

            [{ 'size': ['small', false, 'large', 'huge'] }],  // custom dropdown
            [{ 'header': [1, 2, 3, 4, 5, 6, false] }],

            [{ 'color': [] }, { 'background': [] }],          // dropdown with defaults from theme
            [{ 'font': [] }],
            [{ 'align': [] }],

            ['clean']                                         // remove formatting button
        ];

        var quill = new Quill('#editorSobre', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });

        var quill = new Quill('#editorHistoria', {
            modules: {
                toolbar: toolbarOptions
            },
            theme: 'snow'
        });
    </script>
@stop