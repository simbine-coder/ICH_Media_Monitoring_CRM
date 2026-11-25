<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Media Monitoring</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 1000px; margin: 40px auto; padding: 20px; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; }
        .btn { padding: 8px 16px; border-radius: 6px; text-decoration: none; color: white; font-size: 14px; }
        .btn-primary { background: #2563eb; }
        .btn-danger { background: #dc2626; }
        .btn-secondary { background: #6b7280; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #e5e7eb; }
        th { background: #f9fafb; }
        .success { background: #dcfce7; color: #166534; padding: 12px; border-radius: 6px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Reports de Media Monitoring</h1>
        <div>
            <a href="{{ route('reports.create') }}" class="btn btn-primary">+ Novo Report</a>
            <a href="{{ route('dashboard') }}" class="btn btn-secondary">Voltar ao Dashboard</a>
        </div>
    </div>

    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
                <th>Estado</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse($reports as $report)
                <tr>
                    <td>{{ $report->title }}</td>
                    <td>{{ $report->description ?? '—' }}</td>
                    <td>{{ $report->is_active ? 'Ativo' : 'Inativo' }}</td>
                    <td>
                        <a href="{{ route('reports.show', $report) }}" class="btn btn-primary">Ver</a>
                        <a href="{{ route('reports.edit', $report) }}" class="btn btn-secondary">Editar</a>
                        <form action="{{ route('reports.destroy', $report) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Tens a certeza?')">Apagar</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Ainda não existem reports.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>
