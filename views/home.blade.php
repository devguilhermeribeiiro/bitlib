<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $message }}</h1>

    @if(isset($user))
        <p>Usuário logado: {{ $user['name'] }}</p>
    @else
        <p>Nenhum usuário logado.</p>
    @endif
</body>
</html>
