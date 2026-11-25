<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Media Monitoring</title>
    <style>
        body {
            font-family: system-ui, -apple-system, sans-serif;
            max-width: 1100px;
            margin: 40px auto;
            padding: 20px;
            background: #f8fafc;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        h1 { margin: 0; }
        .btn {
            padding: 10px 18px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            font-size: 14px;
            border: none;
            cursor: pointer;
        }
        .btn-primary { background: #2563eb; }
        .btn-danger { background: #dc2626; }
        .btn-secondary { background: #64748b; }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }
        .card {
            background: white;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.06);
            transition: transform 0.2s;
        }
        .card:hover { transform: translateY(-4px); }
        .card h2 { margin-top: 0; font-size: 1.25rem; }
        .card p { color: #64748b; font-size: 0.95rem; }
        .empty {
            text-align: center;
            padding: 60px 20px;
            background: white;
            border-radius: 12px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <div class="header">
        <div>
            <h1>Olá, {{ Auth::user()->name }}</h1>
            <p style="margin: 4px 0 0; color: #64748b;">Bem-vindo ao sistema de Media Monitoring</p>
        </div>
        <div>
    @can('manage-reports')
        <a href="{{ route('reports.create') }}" class="btn btn-primary">+ Novo Report</a>
        <a href="{{ route('reports.index') }}" class="btn btn-secondary">Gerir Reports</a>
    @endcan
    <form method="POST" action="{{ route('logout') }}" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>
    </div>

    <h2 style="margin-bottom: 20px;">Reports Disponíveis</h2>

    @if($reports->isEmpty())
        <div class="empty">
            <p>Ainda não existem reports ativos.</p>
            @can('manage-reports')
                <a href="{{ route('reports.create') }}" class="btn btn-primary" style="margin-top: 15px; display: inline-block;">Criar o primeiro report</a>
            @endcan
        </div>
    @else
        <div class="cards">
            @foreach($reports as $report)
                <div class="card">
                    <h2>{{ $report->title }}</h2>
                    <p>{{ $report->description ?? 'Sem descrição' }}</p>
                    <a href="{{ route('reports.show', $report) }}" class="btn btn-primary" style="margin-top: 15px; display: inline-block;">
                        Ver Report
                    </a>
                </div>
            @endforeach
        </div>
    @endif
</body>
</html>
