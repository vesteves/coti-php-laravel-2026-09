<h1>Login</h1>

<form method="POST" action="/login">
    @csrf

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <input
        type="email"
        name="email"
        placeholder="Email"
    >

    <input
        type="password"
        name="password"
        placeholder="Senha"
    >

    <button type="submit">
        Entrar
    </button>
</form>
