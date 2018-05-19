<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$site->nome}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
    </head>

    <body>
        @foreach($imagens as $imagem)
            <img src="{{ Storage::url("site/".$imagem->id.$imagem->arquivo)}}">
        @endforeach
    </body>
</html>