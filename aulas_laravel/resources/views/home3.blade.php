@for ($i = 0; $i < 10; $i++)
    <p>Valor: {{ $i }}</p>
@endfor

<ul>
@foreach ($nomes as $nome)
    <li>{{$nome}}</li>
@endforeach
</ul>
 
@forelse ($nomes as $nome)
    <p>{{ $nome }}</p>
@empty
    <p>No users</p>
@endforelse

@while ($valor > 50)
    <p>Valor: {{$valor}}</p>
@endwhile

@foreach ($nomes as $nome)
    
    @if ($loop->first)
        {{$nome}}
    @endif
 
    @if ($loop->last)
        {{$nome}}
    @endif
 
@endforeach



