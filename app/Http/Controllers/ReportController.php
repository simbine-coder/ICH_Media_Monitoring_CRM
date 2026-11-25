<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    // Visitantes: apenas os títulos dos reports ativos (sem links nem embed)
    public function publicList()
    {
        $titles = Report::where('is_active', true)->latest()->pluck('title');

        return view('reports.public', compact('titles'));
    }

    // Admin: gestão de todos os reports (ativos e inativos)
    public function index()
    {
        $reports = Report::latest()->get();

        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'embed_url' => 'required|url:https',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        Report::create($validated);

        return redirect()->route('reports.index')
            ->with('success', 'Report criado com sucesso!');
    }

    // Reports inativos só o admin consegue abrir
    public function show(Request $request, Report $report)
    {
        if (! $report->is_active && ! $request->user()->can('manage-reports')) {
            abort(404);
        }

        return view('reports.show', compact('report'));
    }

    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'embed_url' => 'required|url:https',
        ]);

        $validated['is_active'] = $request->boolean('is_active');

        $report->update($validated);

        return redirect()->route('reports.index')
            ->with('success', 'Report atualizado com sucesso!');
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index')
            ->with('success', 'Report apagado com sucesso!');
    }
}
