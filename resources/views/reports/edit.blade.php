<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Report</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 700px; margin: 40px auto; padding: 20px; }
        label { display: block; margin-top: 15px; font-weight: 600; }
        input, textarea { width: 100%; padding: 10px; margin-top: 5px; border: 1px solid #d1d5db; border-radius: 6px; }
        button { margin-top: 25px; padding: 10px 20px; background: #2563eb; color: white; border: none; border-radius: 6px; cursor: pointer; }
        .error { color: #dc2626; font-size: 14px; margin-top: 4px; }
        a { display: inline-block; margin-top: 20px; color: #6b7280; }
    </style>
</head>
<body>
    <h1>Editar Report</h1>

    <form action="{{ route('reports.update', $report) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title', $report->title) }}" required>
            @error('title') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="description">Descrição (opcional)</label>
            <textarea name="description" id="description" rows="3">{{ old('description', $report->description) }}</textarea>
            @error('description') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="embed_url">URL de Embed (Google Data Studio)</label>
            <input type="url" name="embed_url" id="embed_url" value="{{ old('embed_url', $report->embed_url) }}" required>
            @error('embed_url') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" {{ $report->is_active ? 'checked' : '' }}>
                Report ativo
            </label>
        </div>

        <button type="submit">Atualizar Report</button>
    </form>

    <a href="{{ route('reports.index') }}">← Voltar à lista</a>
</body>
</html>
