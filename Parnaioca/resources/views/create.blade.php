<html>
    <head>
        <title>Coti Informática</title>
    </head>
    <body>
        <h1>Criação do Quarto</h1>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="/quartos">
            <div style="padding: 4px 8px; margin-top: 8px; margin-bottom: 8px;">
                <label for="">Nome</label>
                <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
            </div>

            <div style="padding: 4px 8px; margin-top: 8px; margin-bottom: 8px;">
                <label for="">Tipo</label>
                <input type="text" name="tipo" id="tipo" value="{{ old('tipo') }}">
            </div>

            <div style="padding: 4px 8px; margin-top: 8px; margin-bottom: 8px;">
                <label for="">Valor da Diaria</label>
                <input type="number" name="valorDiaria" id="valorDiaria" value="{{ old('valorDiaria') }}">
            </div>

            <div style="padding: 4px 8px; margin-top: 8px; margin-bottom: 8px;">
                <label for="">Disponivel</label>
                <input type="text" name="disponivel" id="disponivel" value="{{ old('disponivel') }}">
            </div>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
