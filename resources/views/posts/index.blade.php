@extends('layouts.main', ['title' => __('Lista de usuarios')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/usuarios.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Posts</h2>
                        <p class="text-white mt-0 mb-5">Posts Registrados</p>
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
                                <h3 class="mb-0">Posts</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary">Añadir Post</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Guard</th>
                                <th>Created_at</th>
                                <th class="text-right">Acciones</th>
                            </thead>
                            <tbody>
                                @forelse ($posts as $post)
                                    <tr>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->name }}</td>
                                        <td>{{ $post->guard_name }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td class="td-actions text-right">
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm"><i class="ni ni-single-02 text-white"></i></a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen text-white"></i></a>
                                            
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que quieres eliminar este post?')">
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
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

@endsection