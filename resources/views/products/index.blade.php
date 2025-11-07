@extends('layouts.main', ['title' => __('Lista de Productos')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/licores.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Productos</h2>
                        <p class="text-white mt-0 mb-5">Productos Registrados</p>
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
                                <h3 class="mb-0">Productos</h3>
                            </div>
                            <div class="col-4 text-right">
                                @can('product_create')
                                    <a href="{{ route('products.create') }}" class="btn btn-sm btn-primary">Añadir Producto</a>
                                @endcan
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Tipo</th>
                                <th>Graducion alcolica</th>
                                <th>Capacidad</th>
                                <th>Precio Uni</th>
                                <th>Stock</th>
                                <th>Fecha Produccion</th>
                                <th>Lote</th>
                                <th>Estado</th>
                                <th>Descripcion</th>
                                <th class="text-right">Acciones</th>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->nombre }}</td>
                                        <td>{{ $product->tipo }}</td>
                                        <td>{{ $product->graduacion_alcoholica }}</td>
                                        <td>{{ $product->capacidad_ml }}</td>
                                        <td>{{ $product->precio_unitario }}</td>
                                        <td>{{ $product->stock_disponible }}</td>
                                        <td>{{ $product->fecha_produccion }}</td>
                                        <td>{{ $product->lote }}</td>
                                        <td>{{ $product->estado }}</td>
                                        <td>
                                             @if($product->descripcion)
                                                <div style="max-width: 250px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" 
                                                    title="{{ $product->descripcion }}">
                                                    {{ Str::limit($product->descripcion, 50) }}
                                                </div>
                                            @else
                                                <span class="text-muted"><em>Sin descripción</em></span>
                                            @endif
                                        </td>
                                        <td class="td-actions text-right">
                                            @can('product_show')
                                                <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm"><i class="fas fa-wine-glass text-white"></i></a>
                                            @endcan
                                            @can('product_edit')
                                                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-pen text-white"></i></a>
                                            @endcan
                                            @can('product_destroy')
                                                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro que quieres eliminar este producto?')">
                                                @csrf
                                                @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                .   No hay productos registrados
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="card-footer py-4">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>

@endsection