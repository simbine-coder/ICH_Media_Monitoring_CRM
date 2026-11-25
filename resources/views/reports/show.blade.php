<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $report->title }}</title>
    <style>
        body { font-family: system-ui, sans-serif; margin: 0; padding: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        iframe { width: 100%; height: 85vh; border: none; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); }
        a { text-decoration: none; color: #2563eb; }
    </style>
</head>
<body>
    <div class="header">
        <div>
            <h1>{{ $report->title }}</h1>
            @if($report->description)
                <p>{{ $report->description }}</p>
            @endif
        </div>
        <a href="{{ auth()->user()->can('manage-reports') ? route('reports.index') : route('dashboard') }}">← Voltar</a>
    </div>

    <iframe
        src="{{ $report->embed_url }}"
        allowfullscreen
        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
    </iframe>
</body>
</html>


