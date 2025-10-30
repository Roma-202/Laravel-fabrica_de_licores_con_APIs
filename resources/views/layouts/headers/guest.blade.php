<div class="header py-7 py-lg-8 position-relative overflow-hidden">
    <!-- Imagen en movimiento continuo -->
    <div class="moving-background"></div>
    
    <div class="container position-relative header-content">
        <div class="header-body text-center mb-7">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                    <h1 class="text-white font-weight-bold">{{ __('Bienvenido! a Party Fuel Factory') }}</h1>
                </div>
            </div>
        </div>
    </div>
    
    <div class="separator separator-bottom separator-skew">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
            <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</div>

<style>
    /* Z-index hierarchy para evitar conflictos */
    .navbar-top {
        z-index: 1050 !important;
        position: relative;
    }

    .header {
        min-height: 500px;
        position: relative;
        background: linear-gradient(87deg, #172b4d 0, #1a174d 100%);
        padding-bottom: 8rem !important;
        z-index: 1;
    }

    .moving-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 200%;
        height: 100%;
        z-index: 1;
        opacity: 0.35;
        background-image: url('{{ asset('img/theme/lico_banner_op1.png') }}');
        background-size: 50% 100%;
        background-repeat: repeat-x;
        background-position: center;
        animation: moveLeft 40s linear infinite;
    }
    
    @keyframes moveLeft {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }

    .header-content {
        z-index: 10;
        position: relative;
        padding-top: 4rem;
    }

    .separator {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        width: 100%;
        overflow: hidden;
        pointer-events: none;
        z-index: 15;
        line-height: 0;
    }

    .separator-bottom {
        top: auto;
        bottom: 0;
        transform: translateY(1px);
    }

    .separator-skew > svg {
        position: relative;
        display: block;
        width: calc(100% + 1.3px);
        height: 80px;
    }

    .fill-default {
        fill: #172b4d;
    }

    /* Asegurar que el texto sea legible */
    .header h1 {
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
        position: relative;
        z-index: 11;
        letter-spacing: 0.5px;
    }

    /* Ajuste para el margen negativo del contenedor */
    .container.mt--8 {
        margin-top: -8rem !important;
        position: relative;
        z-index: 20;
    }

    /* Asegurar que el card del formulario esté por encima */
    .card {
        position: relative;
        z-index: 25;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .header {
            min-height: 400px;
            padding-bottom: 6rem !important;
        }
        
        .separator-skew > svg {
            height: 60px;
        }

        .header-content {
            padding-top: 2rem;
        }

        .header h1 {
            font-size: 1.5rem;
        }
    }

    @media (max-width: 576px) {
        .header {
            min-height: 350px;
        }
    }
</style>

 {{-- <div class="header bg-gradient-primary py-7 py-lg-6">
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
</div>   --}}