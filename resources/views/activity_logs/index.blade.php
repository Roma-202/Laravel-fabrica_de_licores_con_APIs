@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Registro de Actividades</h1>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Usuario</th>
                        <th>Acción</th>
                        <th>Modelo</th>
                        <th>Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activities as $activity)
                    <tr>
                        <td>{{ $activity->created_at->format('d/m/Y H:i') }}</td>
                        
                        <!-- Usuario que hizo la acción -->
                        <td>
                            @if($activity->causer)
                                {{ $activity->causer->name }}
                                <br>
                                <small class="text-muted">{{ $activity->causer->email }}</small>
                            @else
                                <span class="text-muted">Sistema</span>
                            @endif
                        </td>
                        
                        <!-- Tipo de acción -->
                        <td>
                            @if($activity->description == 'created')
                                <span class="badge bg-success">Creado</span>
                            @elseif($activity->description == 'updated')
                                <span class="badge bg-warning">Actualizado</span>
                            @elseif($activity->description == 'deleted')
                                <span class="badge bg-danger">Eliminado</span>
                            @else
                                <span class="badge bg-info">{{ $activity->description }}</span>
                            @endif
                        </td>
                        
                        <!-- Modelo afectado -->
                        <td>
                            {{ class_basename($activity->subject_type) }}
                            @if($activity->subject)
                                #{{ $activity->subject->id }}
                            @endif
                        </td>
                        
                        <!-- Botón para ver detalles -->
                        <td>
                            <button class="btn btn-sm btn-primary" 
                                    onclick="showDetails({{ $activity->id }})">
                                Ver cambios
                            </button>
                        </td>
                    </tr>
                    
                    <!-- Fila oculta con detalles -->
                    <tr id="details-{{ $activity->id }}" style="display: none;">
                        <td colspan="5">
                            <div class="alert alert-info">
                                <h6>Cambios realizados:</h6>
                                <pre>{{ json_encode($activity->properties, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) }}</pre>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            {{ $activities->links() }}
        </div>
    </div>
</div>

<script>
function showDetails(id) {
    var detailsRow = document.getElementById('details-' + id);
    if (detailsRow.style.display === 'none') {
        detailsRow.style.display = 'table-row';
    } else {
        detailsRow.style.display = 'none';
    }
}
</script>
@endsection