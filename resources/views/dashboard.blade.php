@extends('main')

@section('title', 'HKBP - TWA')


@push('style-content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main-header-navbar-footer-conten.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard-content.css') }}">
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

    <Section class="all-cantent" style="padding: 50px 0 50px 0">
        <div class="content-container">
            <div class="berita card-content">
                {{-- content for news --}}
            </div>
            <div class="card-deck" style="max-width: 100%;">

                <div class="card">

                    <img class="card-img-top" src="{{ asset('asset/Live-Stream/19-02-2023.webp') }}" alt="Card image cap">

                    <div class="card-body" style="padding-bottom: 70px">
                        <h5 class="card-title">LIVE STREAMING
                            <br>
                            <p>Minggu, 25 Juni 2023</p>
                        </h5>
                        <p class="card-text">Live Streaming akan di adakan setiap hari minggu pada ibadah pukul 11.15
                        </p>
                    </div>
                    <div class="content-change">
                        <div class="file-content">
                            <a href="{{ asset('asset/file-acara/2023-06-25/acara.pdf') }}"><img width="40px"
                                    height="40px" src="https://img.icons8.com/ios/50/book--v1.png" alt="Kertas-Acara"></a>
                            <a href="{{ asset('asset/file-acara/2023-06-25/warta.pdf') }}"><img width="40px"
                                    height="40px" src="https://img.icons8.com/ios/50/news.png" alt="Warta"></a>
                        </div>
                        <button class="Btn">

                            <div class="sign"><svg viewBox="0 0 512 512">
                                    <path
                                        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                    </path>
                                </svg>
                            </div>

                            <div class="text-link">
                                <a style="color: white"href="https://www.youtube.com/watch?v=2TtGvKbwQgk&t=3980s">Live</a>
                            </div>
                        </button>
                        @auth
                            <div style="padding-left: 10px" class="admin-update">
                                <form action="">
                                    <input type="button" value="Update">
                                </form>
                            </div>
                        @endauth

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card">
                    <img height="269px" class="card-img-top"
                        src="https://scontent.fcgk18-1.fna.fbcdn.net/v/t1.6435-9/65737690_1257667491069975_4203680605096902656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=NWdiCvG_n-cAX9dH5ah&_nc_ht=scontent.fcgk18-1.fna&oh=00_AfCkzS4d7GS2dDOgF5tDFdko1dOAFCKgR7yO_yIQiI8l1A&oe=64BD1666"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Naposo</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card" style="margin-right: 0">
                    <img height="269px" class="card-img-top"
                        src="https://scontent.fcgk18-1.fna.fbcdn.net/v/t1.6435-9/65737690_1257667491069975_4203680605096902656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=NWdiCvG_n-cAX9dH5ah&_nc_ht=scontent.fcgk18-1.fna&oh=00_AfCkzS4d7GS2dDOgF5tDFdko1dOAFCKgR7yO_yIQiI8l1A&oe=64BD1666"
                        alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Remaja</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </Section>

@endsection
