<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard - ERP Clínicas Acadêmicas</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    <main>
        <h1>Dashboard</h1>

        <p>Bem-vindo, {{ auth()->user()->name }}.</p>

        <p>E-mail: {{ auth()->user()->email }}</p>

        <form method="POST" action="/logout">
            @csrf

            <button type="submit">
                Sair
            </button>
        </form>
    </main>
</body>
</html>
