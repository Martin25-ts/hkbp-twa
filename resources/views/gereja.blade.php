@extends('main')

@section('title', 'HKBP - TWA')


@push('style-content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main-header-navbar-footer-conten.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/gambar.css/demo.css') }}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/gambar.css/style.css') }}"> --}}
@endpush


@push('script-content')
    <script src="{{ asset('js/main-navbar-responsive.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
@endpush


@section('navbar')
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @auth
            <a class="navbar-brand" href="/dashboard"><img width="100%" src="{{ asset('asset/Logo/Logo-HKBP-TWA.svg') }}"
                    alt="hkbp-error"></a>
        @else
            <a class="navbar-brand" href="/"><img width="150px" src="{{ asset('asset/Logo/Logo-HKBP-TWA.svg') }}"
                    alt="hkbp-error"></a>
        @endauth

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item active">
                        <a class="nav-link" href="/dashboard">Home<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li class="nav-item active">
                        <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
                    </li>
                @endauth

                <li class="nav-item">
                    <a class="nav-link" href="/gereja">GEREJA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">PARHALADO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">KEGIATAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="https://www.google.com/maps/place/HKBP+Taman+Wisma+Asri/@-6.2146786,107.0258995,21z/data=!4m6!3m5!1s0x2e698f2853638a39:0x158fdb038dac775!8m2!3d-6.2147623!4d107.0258807!16s%2Fg%2F11hy3sjp9s?entry=ttu">MAP</a>
                </li>
            </ul>
            <span class="navbar-text">
                @auth
                    <button class="button-popup-logout" id="button-popup-logout">

                    </button>
                @else
                    <button class="button-popup-login" id="button-popup-login">
                        <img src="https://img.icons8.com/ios-filled/50/login-rounded-right.png" alt="">
                        LOGIN
                    </button>
                @endauth
            </span>
        </div>
    </nav>
@endsection




@section('content')



@endsection
