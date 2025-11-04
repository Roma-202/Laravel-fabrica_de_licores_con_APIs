<?php

namespace App\Http\Controllers;

use Spatie\Activitylog\Models\Activity;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todos los logs con paginación
        $activities = Activity::with('causer', 'subject') // Carga las relaciones
            ->latest() // Más recientes primero
            ->paginate(20); // 20 por página

        return view('activity_logs.index', compact('activities'));
    }
}