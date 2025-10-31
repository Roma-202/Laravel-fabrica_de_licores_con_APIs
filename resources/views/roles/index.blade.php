@extends('layouts.main', ['title' => __('Lista de Roles')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/roles.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Roles</h2>
                        <p class="text-white mt-0 mb-5">Roles Registrados</p>
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
                                <h3 class="mb-0">Roles</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('roles.create') }}" class="btn btn-sm btn-primary">Añadir rol</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Guard</th>
                                <th>Fecha de creacion</th>
                                <th>Persmisos</th>
                                <th class="text-right">Acciones</th>
                            </thead>
                            <tbody>
                                @forelse ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->guard_name }}</td>
                                        <td>{{ $role->created_at }}</td>
                                        <td>
                                            @forelse ($role->permissions as $permission)
                                                <span class="badge badge-info">{{ $permission->name }}</span>
                                            @empty
                                                <span class="badge badge-danger">No permission added</span>
                                            @endforelse
                                        </td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('roles.show', $role->id) }}" class="btn btn-info btn-sm"><i class="ni ni-single-02 text-white"></i></a>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen text-white"></i></a>
                                            
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que quieres eliminar este permiso?')">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @empty
                                .   No hay permisos registrados
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card-footer py-4">
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

@endsection