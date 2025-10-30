@extends('layouts.main', ['title' => __('Detalles del Post')])

@section('content')

    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/theme/permisos-ver.jpg') }}); background-size: cover; background-position: center top;">
        <!-- Mask -->
        <span class="mask bg-gradient-default opacity-8"></span>
        <!-- Header container -->
        <div class="container-fluid d-flex align-items-center">
            <div class="row">
                <div class="col-md-12 {{ $class ?? '' }}">
                    <h2 class="display-2 text-white">Posts</h2>
                        <p class="text-white mt-0 mb-5">Vista detallada del post {{ $post->name }}</p>

                </div>
            </div>
        </div>
    </div>
                    
                    
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
                <div class="card card-profile shadow">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 order-lg-2">
                            <div class="card-profile-image">
                                <img src="{{ asset('/img/default-avatar.png') }}" class="rounded-circle">
                            </div>
                        </div>
                    </div>

                    <div class="card-body text-center" style="padding-top: 10rem;">
                        <div class="mb-3">
                            <h3 class="mb-2">{{ $post->name }}</h3>
                            <div class="text-muted mb-1">{{ $post->guard_name }}</div>
                            <small class="text-muted">{{ $post->created_at->format('d/m/Y') }}</small>
                        </div>
                        
                        <hr class="my-4" />

                        <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla corporis veniam ipsam dolorum nesciunt repudiandae ratione nostrum ipsum id consectetur</p>

                        <div class="d-flex justify-content-center">
                            {{-- <button type="button" class="btn btn-primary">Editar</button> --}}
                            <a href="{{ route('posts.index') }}" class="btn btn-m btn-success mr-3">Volver</a>
                            <a href="#" class="btn btn-m btn-primary mr-3">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection