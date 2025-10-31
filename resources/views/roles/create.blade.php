@extends('layouts.main', ['title' => __('Crear Rol')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/roles-editar-agregar.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Roles</h2>
                    <p class="text-white mt-0 mb-5">Creacion de un nuevo Rol</p>
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
                            <h3 class="mb-0">{{ __('Roles') }}</h3>
                        </div>
                    </div>

                    {{-- Body --}}
                    <div class="card-body">
                        <form method="post" action="{{ route('roles.store') }}" autocomplete="off">
                            @csrf
                            {{-- @method('post') --}}

                            <h6 class="heading-small text-muted mb-4">{{ __('Ingrese Datos:') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Nombre del Rol') }}</label>
                                    <input type="text" name="name" id="name"
                                        class="form-control form-control-alternative"
                                        placeholder="{{ __('Ingrese el nombre del rol') }}" autofocus>
                                </div>
                                <div class="form-group{{ $errors->has('rol') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Permisos') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <div class="tab-content">
                                                <div class="tab-pane active">
                                                    <table class="table">
                                                        <tbody>
                                                            @foreach ($permissions as $id => $permission)
                                                                <tr>
                                                                    <td>
                                                                        <div class="form-check">
                                                                            <div
                                                                                class="custom-control custom-checkbox mb-3">
                                                                                <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $id }}">
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>{{ $permission }}</td>
                                                                </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>



                    </div>
                    {{-- End Body --}}

                </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
@endsection
