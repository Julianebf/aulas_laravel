<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$titulo}}</title>
</head>
<body>
    <p>{{$texto}}</p>
    <p>{{rand(1,100)}}</p>
    <a href="{{route('minha_route')}}">Link</a>

    @php
        $nome = "Juliane";
        echo "O meu nome é $nome";
    @endphp
</body>
</html>