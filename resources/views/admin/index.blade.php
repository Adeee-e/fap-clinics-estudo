<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Administração - ERP Clínicas Acadêmicas</title>

    @vite(['resources/css/app.css'])
</head>

<body>
    <main>
        <h1>Área Administrativa</h1>

        <p>Usuário: {{ auth()->user()->name }}</p>

        <p>Você está autenticado como superusuário.</p>

        <a href="/dashboard">Voltar ao dashboard</a>
    </main>
</body>
</html>
