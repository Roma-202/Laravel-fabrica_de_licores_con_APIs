{{-- <div class="header py-7 py-lg-6 position-relative overflow-hidden">
    <div class="container position-relative" style="z-index: 2;">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('Bienvenido! a Party Fuel Factory') }}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Imagen en movimiento continuo -->
    <div class="moving-background">
        <img src="{{ asset('img/theme/lico_banner_op1.jpg') }}" alt="Background" class="moving-image">
        <img src="{{ asset('img/theme/lico_banner_op1.jpg') }}" alt="Background" class="moving-image">
    </div>
    
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>

<style>
    .moving-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        z-index: 1;
        opacity: 0.3; /* Ajusta la opacidad para que no tape el contenido */
    }
    
    .moving-image {
        height: 100%;
        width: auto;
        min-width: 100%;
        object-fit: cover;
        animation: moveLeft 20s linear infinite;
    }
    
    .moving-image:nth-child(2) {
        animation-delay: -10s; /* Para crear el efecto de bucle continuo */
    }
    
    @keyframes moveLeft {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-100%);
        }
    }
</style> --}}


<div class="header bg-gradient-primary py-7 py-lg-6">
    <div class="container">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white">{{ __('Bienvenido! a Party Fuel Factory') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>  