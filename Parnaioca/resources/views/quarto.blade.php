<html>
    <head>
        <title>Coti Informática</title>
    </head>
    <body>
        <h1>Quarto {{ $id }}</h1>

        <h2>{{ $quarto['nome'] }}</h2>
        <p>{{ $quarto['tipo'] }}</p>

        <p>R$ {{ $quarto['valorDiaria'] }}</p>

        <p>{{ $quarto['disponivel'] ? 'Disponível' : 'Indisponível' }}</p>
    </body>
</html>
<!-- template engine -->
