<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Criar conta - ERP Clínicas Acadêmicas</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    <main>
        <h1>Criar conta</h1>

        <p>ERP Clínicas Acadêmicas</p>

        <form method="POST" action="/register">
            @csrf

            <div>
                <label for="name">Nome</label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    required
                >

                @error('name')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email">E-mail</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                >

                @error('email')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password">Senha</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    required
                >

                @error('password')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirme a senha</label>

                <input
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    required
                >
            </div>

            <button type="submit">
                Criar conta
            </button>
        </form>

        <p>
            Já possui uma conta?
            <a href="/login">Entrar</a>
        </p>
    </main>
</body>
</html>
