<html>
    <head>
        <title>Coti Informática</title>
    </head>
    <body>
        <h1>Quartos</h1>

        @foreach ($quartos as $quarto)
            <h2>{{ $quarto['nome'] }}</h2>
            <p>{{ $quarto['tipo'] }}</p>

            <p>R$ {{ $quarto['valorDiaria'] }}</p>

            <!-- <p>{{ $quarto['disponivel'] }}</p> -->

            <!-- @if ($quarto['disponivel'])
                <p>Disponível</p>
            @else
                <p>Indisponível</p>
            @endif -->

            <p>{{ $quarto['disponivel'] ? 'Disponível' : 'Indisponível' }}</p>
        @endforeach

        <!-- <pre>
            {{ var_dump($quartos) }}
        </pre> -->
    </body>
</html>
<!-- template engine -->
