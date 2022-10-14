<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 18 | Blades</title>
</head>
<body>
    <h1>Home</h1>
    {{$nome . ' ' . $apelido}}
    <p> {{$nome}} {{$apelido}} {{$idade}}</p>
    
    <ul>
    @foreach ($telefones as $telefones)
        <li>{{$telefones}}</li>
    @endforeach
    </ul>
</body>
</html>