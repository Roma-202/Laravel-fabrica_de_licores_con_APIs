@extends('layouts.main', ['title' => __('Detalles del Producto')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/licores-vista.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Bebidas</h2>
                    <p class="text-white mt-0 mb-5">Vista detallada del producto bebidas{{ $product->name }}</p>

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">

        <div class="col-xl-12 order-xl-1">
            <div class="card bg-secondary ">
                <table class="table align-items-center table-dark">
                    <tbody>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">ID</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->id }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Nombre</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->nombre }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Tipo</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->tipo }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Graduacion alcoholica</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->graduacion_alcoholica }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Capacidad en ml</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->capacidad_ml }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Precio Unitario</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->precio_unitario }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Stock disponible</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->stock_disponible }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Fecha de produccion</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->fecha_produccion }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Lote</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->lote }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Estado</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->estado }}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                <div class="media align-items-center">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">Descripcion</span>
                                    </div>
                                </div>
                            </th>
                            <td>
                                {{ $product->descripcion }}
                            </td>
                        </tr>
                        

                    </tbody>
                    
                </table>
                <table class="table align-items-center table-dark">
                    <tbody>
                        <td>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('products.index') }}" class="btn btn-m btn-success mr-3">Volver</a>
                                <a href="#" class="btn btn-m btn-primary mr-3">Editar</a>
                            </div>
                        </td>
                    </tbody>
                </table>
            </div>
            
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
