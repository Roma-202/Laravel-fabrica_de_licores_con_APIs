@extends('layouts.main', ['title' => __('Crear Producto')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/licores-editar-agregar.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Productos</h2>
                        <p class="text-white mt-0 mb-5">Creacion de un nuevo producto</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt--7">
        <div class="row">
            
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <h3 class="mb-0">{{ __('Producto') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('products.store') }}" autocomplete="off">
                            @csrf
                            {{-- @method('post') --}}

                            <h6 class="heading-small text-muted mb-4">{{ __('Ingrese Datos:') }}</h6>


                            <div class="row">
                                <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }} col-md-6">
                                    <label class="form-control-label" for="nombre">{{ __('Nombre del licor') }}</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control form-control-alternative" placeholder="{{ __('Ingrese el nombre del licor') }}" autofocus>
                                </div>

                                <div class="form-group{{ $errors->has('tipo') ? ' has-danger' : '' }} col-md-6">
                                    <label class="form-control-label" for="tipo">{{ __('Tipo') }}</label>
                                    
                                    <br>
                                    <select name="tipo" id="tipo" class="form-control form-control-alternative">
                                        <option value="Ron">Ron</option>
                                        <option value="Vodka">Vodka</option>
                                        <option value="Whisky">Whisky</option>
                                        <option value="Ginebra">Ginebra</option>
                                        <option value="Tequila">Tequila</option>
                                    </select>
                                </div>

                                <div class="form-group{{ $errors->has('graduacion_alcoholica') ? ' has-danger' : '' }} col-md-6">
                                    <label class="form-control-label" for="graduacion_alcoholica">{{ __('Graduacion Alcoholica') }}</label>
                                    <input type="number" name="graduacion_alcoholica" id="graduacion_alcoholica" class="form-control form-control-alternative" placeholder="{{ __('Graduacion alcoholica') }}" step="0.01" maxlength="4">
                                </div>

                                <div class="form-group{{ $errors->has('capacidad_ml') ? ' has-danger' : '' }} col-md-6">
                                    <label class="form-control-label" for="capacidad_ml">{{ __('Capacidad en militros') }}</label>
                                    <input type="number" name="capacidad_ml" id="capacidad_ml" class="form-control form-control-alternative" placeholder="{{ __('Ingrese la capacidad') }}" >
                                </div>

                                <div class="form-group{{ $errors->has('precio_unitario') ? ' has-danger' : '' }} col-md-4">
                                    <label class="form-control-label" for="precio_unitario">{{ __('Precio unitario') }}</label>
                                    <input type="number" name="precio_unitario" id="precio_unitario" class="form-control form-control-alternative" placeholder="{{ __('Precio unitario') }}" maxlength="10" step="0.01" >
                                </div>

                                <div class="form-group{{ $errors->has('stock_disponible') ? ' has-danger' : '' }} col-md-4">
                                    <label class="form-control-label" for="stock_disponible">{{ __('Stock') }}</label>
                                    <input type="number" name="stock_disponible" id="stock_disponible" class="form-control form-control-alternative" placeholder="{{ __('Ingrese el stock disponible') }}" >
                                </div>

                                <div class="form-group{{ $errors->has('fecha_produccion') ? ' has-danger' : '' }} col-md-4">
                                    <label class="form-control-label" for="fecha_produccion">{{ __('Fecha de produccion') }}</label>
                                    <input type="date" name="fecha_produccion" id="fecha_produccion" class="datepicker form-control form-control-alternative">
                                </div>

                                <div class="form-group{{ $errors->has('lote') ? ' has-danger' : '' }} col-md-6">
                                    <label class="form-control-label" for="lote">{{ __('Lote') }}</label>
                                    <input type="number" name="lote" id="lote" class="form-control form-control-alternative" placeholder="{{ __('Ingrese el numero de lote') }}" >
                                </div>

                                <div class="form-group{{ $errors->has('estado') ? ' has-danger' : '' }} col-md-6">
                                    <label class="form-control-label" for="estado">{{ __('Estado') }}</label>
                                    
                                    <br>
                                    <select name="estado" id="estado" class="form-control form-control-alternative">
                                        <option value="Activo">Activo</option>
                                        <option value="Descontinuado">Descontinuado</option>
                                        <option value="Agotado">Agotado</option>
                                    </select>
                                </div>

                                <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }} col-md-12">
                                    <label class="form-control-label" for="descripcion">{{ __('Nombre del') }}</label>
                                    <br>
                                    <textarea class="form-control form-control-alternative" name="descripcion" id="descripcion" cols="30" rows="5" placeholder="{{ __('Opcionalmente escriba notas de sabor, proceso de elaboración, etc') }}"></textarea>
                                    
                                </div>

                                <div class="text-center col-md-12">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>
        
        @include('layouts.footers.auth')
    </div>
@endsection
