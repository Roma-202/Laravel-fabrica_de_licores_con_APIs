@extends('layouts.main', ['title' => __('Editar usuario')])

@section('content')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/usuarios-editar-agregar.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Usuarios</h2>
                        <p class="text-white mt-0 mb-5">Editar la informacion del usuario</p>
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
                            <h3 class="mb-0">{{ __('Editar datos') }}</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('users.update', $user->id) }}" autocomplete="off">
                            @csrf
                            @method('PUT')

                            {{-- Puedes comentar o descomentar este bloque según necesites --}}
                            {{-- @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif --}}


                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="name" 
                                        class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                        value="{{old('name', $user->name) }}" autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('username') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="username">{{ __('Nombre de usuario') }}</label>
                                    <input type="text" name="username" id="username"
                                        class="form-control form-control-alternative{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                        value="{{ old('username', $user->username) }}"  autofocus>

                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="email">{{ __('Email') }}</label>
                                    <input type="email" name="email" id="email"
                                        class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        value="{{ old('email',$user->email) }}" >

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="password">{{ __('Contrasena') }}</label>
                                    <input type="password" name="password" id="password"
                                        class="form-control form-control-alternative{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                        placeholder="Ingresa solo si es necesario">

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="text-center">
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