<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Media Monitoring</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 700px; margin: 40px auto; padding: 20px; }
        li { padding: 10px 0; border-bottom: 1px solid #e5e7eb; }
        ul { list-style: none; padding: 0; }
        .actions a { display: inline-block; margin-right: 12px; color: #2563eb; }
        p { color: #64748b; }
    </style>
</head>
<body>
    <h1>Reports de Media Monitoring</h1>
    <p>Para abrir um report, inicia sessão.</p>

    <ul>
        @forelse($titles as $title)
            <li>{{ $title }}</li>
        @empty
            <li>Ainda não existem reports.</li>
        @endforelse
    </ul>

    <div class="actions">
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Registar</a>
        <a href="{{ url('/') }}">← Início</a>
    </div>
</body>
</html>
