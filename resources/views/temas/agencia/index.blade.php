<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Contabilidade para empresas">
    <meta name="keywords" content="{{$site->meta}}">
    <meta name="author" content="Codigo Source">

    <title>{{$site->nome}}</title>

    <!-- Bootstrap core CSS -->
    <link href="Temas/Agencia/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">


    <!-- Custom fonts for this template -->
    <link href="Temas/Agencia/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="Temas/Agencia/css/agency.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">{{$site->sigla}}</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contato">Contato</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('login')}}">Login</a>
                </li>
            </ul>
        </div>
    </div>
    @if (session('status'))
        <div class="alert alert-info">
            {{ session('status') }}
        </div>
    @endif
</nav>

<!-- Header -->
<header class="masthead" id="inicio" style="background-image: url({{$site->imagem}})">
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">{{$site->descricao}}</div>
            <div class="intro-heading text-uppercase">{{$site->nome}}</div>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#sobre">Venha nos conhecer</a>
        </div>
    </div>
</header>

<!-- Services -->
<section id="servicos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nossos serviços</h2>
            </div>
        </div>

        <div class="row text-center">
            @foreach($servicos as $servico)
                <div class="col-md-4">
                <span class="fa-stack fa-4x">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-{{$servico->icone}} fa-stack-1x fa-inverse"></i>
                </span>
                    <h4 class="service-heading">{{$servico->nome}}</h4>
                    <p class="text-muted">{{$servico->descricao}}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- About -->
<section id="sobre">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Sobre</h2>
                <h3 class="section-subheading text-muted">Nossa história cresce junto com a sua.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
            <span>{{$site->sobre}}</span>
            </div>
        </div>
    </div>
</section>

<!-- Contato -->
<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Contate-nos</h2>
                <h3 class="section-subheading text-muted">Nós entramos em contato com você.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form id="formContato" name="formContato" method="POST" novalidate="novalidate" action="{{route('novo_contato')}}">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="nome" type="text" name="nome" placeholder="Seu nome" required form="formContato">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="email" type="email" name="email" placeholder="Seu e-mail" required form="formContato">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="telefone" form="formContato" type="tel" name="telefone" placeholder="Seu telefone" required>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="message" placeholder="Sua mensagem" form="formContato" required name="mensagem"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button id="submit" form="formContato" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensagem</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Localizacao -->
<section id="localizacao">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Nossa localização</h2>
            </div>
        </div>
        <div class="col-md-12 row">

            <div class="col-md-6">
                {!! $site->mapa !!}
            </div>

            <div class="col-md-6">
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Endereço</h3>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <span>{{$site->rua}}, {{$site->numero}}, {{$site->cep}}</span>
                        <br>
                        <span>Cidade: {{$site->cidade}}</span>
                        <br>
                        <span>Telefone: {{$site->telefone}}</span>
                        <br>
                        <span>E-mail: {{$site->email}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; {{$site->nome}} 2018</span>
            </div>
            <div class="col-md-4">
                <ul class="list-inline social-buttons">
                    @if($site->twitter <> '')
                        <li class="list-inline-item">
                            <a href="{{$site->twitter}}" target="_blank" >
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        @endif

                        @if($site->facebook <> '')
                        <li class="list-inline-item">
                            <a href="{{$site->facebook}}" target="_blank" >
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>

                        @endif

                        @if($site->linkedin <> '')
                        <li class="list-inline-item">
                            <a href="{{$site->linkedin}}" target="_blank" >
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        @endif
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="Temas/Agencia/vendor/jquery/jquery.min.js"></script>
<script src="Temas/Agencia/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="Temas/Agencia/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="Temas/Agencia/js/agency.min.js"></script>

</body>

</html>
