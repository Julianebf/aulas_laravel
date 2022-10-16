<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if($valor == 100)
        igual a 100.
    @elseif ($valor < 100)
        diferente de 100.
    @endif
        maior que 100.
    @endif

    @unless($valor != 100)
        teste  
    @endunless

    <?php 
        if(isset($valor)){
            echo 'sim, existe';
        }
    ?>

    @isset($valor)
        sim, existe
    @endisset
    
    @empty($nome)
        Está vazia
    @endempty

    @switch($valor)
        @case(100)
            Igual a 100
            @break
    
        @case(2)
            igual a 10
            @break 
    
        @default
            outro valor
    @endswitch


</body>
</html>