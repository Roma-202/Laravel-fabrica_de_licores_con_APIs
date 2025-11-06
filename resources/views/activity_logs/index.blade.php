@extends('layouts.main', ['title' => __('Lista de Activity Logs')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/post.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Activity Logs</h2>
                        <p class="text-white mt-0 mb-5">Control de Activity Logs</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Activity Logs</h3>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <th>Fecha</th>
                                <th>Usuario</th>
                                <th>Acción</th>
                                <th>Modelo</th>
                                <th>Detalles</th>
                            </thead>
                            <tbody>
                                @forelse ($activities as $activity)
                                    <tr>
                                        <td>
                                            {{ $activity->created_at->format('d/m/Y H:i') }}
                                        </td>
                                        <td>
                                             @if($activity->causer)
                                                {{ $activity->causer->name }}
                                                <br>
                                                <small class="text-muted">{{ $activity->causer->email }}</small>
                                            @else
                                                <span class="text-muted">Sistema</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if($activity->description == 'created')
                                                <span class="badge bg-success text-white">Creado</span>
                                            @elseif($activity->description == 'updated')
                                                <span class="badge bg-warning text-white">Actualizado</span>
                                            @elseif($activity->description == 'deleted')
                                                <span class="badge bg-danger text-white">Eliminado</span>
                                            @else
                                                <span class="badge bg-info text-white">{{ $activity->description }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ class_basename($activity->subject_type) }}
                                            @if($activity->subject)
                                                #{{ $activity->subject->id }}
                                            @endif
                                        </td>
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
                                @empty
                                
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card-footer py-4">
                        {{ $activities->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
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