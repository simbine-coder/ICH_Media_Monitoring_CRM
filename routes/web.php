<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return view('home');
});

// n autenticados- just titles
Route::get('/reports-publicos', [ReportController::class, 'publicList'])->name('reports.public');

// Auths... (admin + authenticado )
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');


    Route::middleware('can:manage-reports')->group(function () {
        Route::resource('reports', ReportController::class)->except(['show']);
    });

    // Admin e users: ver report
    Route::get('/reports/{report}', [ReportController::class, 'show'])->name('reports.show');
});
