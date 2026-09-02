<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - ERP Clínicas Acadêmicas</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    <main>
        <h1>Login</h1>

        <p>ERP Clínicas Acadêmicas</p>

        <!-- se retorna da criacao de usuario com sucesso,
            exibe mensagem que o usuario foi criado com sucesso-->
        @if (session('success'))
            <p>{{ session('success') }}</p>
        @endif

        <form method="POST" action="/login">
            @csrf

            <div>
                <label for="email">E-mail</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div>
                <label for="password">Senha</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >
            </div>

            @error('email')
                <p>{{ $message }}</p>
            @enderror

            <button type="submit">
                Entrar
            </button>
        </form>

        <p>
            Não possui uma conta?
            <a href="/register">Criar conta</a>
        </p>

    </main>
</body>
</html>
