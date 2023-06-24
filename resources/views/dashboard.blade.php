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

    <section class="all-cantent" style="padding: 50px 0 50px 0">
        <div class="content-container">
            <div class="berita card-content">
                {{-- content for news --}}
            </div>
            <div class="card-deck" style="max-width: 100%;">

                <div class="card">
                    <a href="https://www.youtube.com/watch?v=xRZwIwJ8jNY&t=1973s" style="text-decoration: none; color: black">
                        <img class="card-img-top" src="{{ asset('asset/Live-Stream/19-02-2023.webp') }}"
                            alt="Card image cap">

                        <div class="card-body" style="padding-bottom: 70px">
                            <h5 class="card-title">LIVE STREAMING
                                <br>
                                <p>Minggu, 25 Juni 2023</p>
                            </h5>
                            <p class="card-text">Live Streaming akan di adakan setiap hari minggu pada ibadah pukul 11.15
                            </p>
                        </div>

                        <div class="card-footer">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </div>
                    </a>
                    <div class="content-change">
                        <div class="file-content">

                            <a href="{{ asset('asset/file-acara/2023-06-25/acara.pdf') }}" download><img
                                    width="40px" height="40px" src="https://img.icons8.com/ios/50/book--v1.png" alt="Kertas-Acara"></a>
                            <a href="{{ asset('asset/file-acara/2023-06-25/warta.pdf') }}" download><img
                                    width="40px" height="40px" src="https://img.icons8.com/ios/50/news.png" alt="Warta"></a>
                        </div>
                        @auth
                            <div class="admin-update">
                                <form action="">
                                    <input type="button" value="Update">
                                </form>
                            </div>
                        @endauth

                    </div>


                </div>
                <div class="card">
                    <img height="269px" class="card-img-top" src="https://scontent.fcgk18-1.fna.fbcdn.net/v/t1.6435-9/65737690_1257667491069975_4203680605096902656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=NWdiCvG_n-cAX9dH5ah&_nc_ht=scontent.fcgk18-1.fna&oh=00_AfCkzS4d7GS2dDOgF5tDFdko1dOAFCKgR7yO_yIQiI8l1A&oe=64BD1666" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Naposo</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
                <div class="card" style="margin-right: 0">
                    <img height="269px" class="card-img-top" src="https://scontent.fcgk18-1.fna.fbcdn.net/v/t1.6435-9/65737690_1257667491069975_4203680605096902656_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=NWdiCvG_n-cAX9dH5ah&_nc_ht=scontent.fcgk18-1.fna&oh=00_AfCkzS4d7GS2dDOgF5tDFdko1dOAFCKgR7yO_yIQiI8l1A&oe=64BD1666" alt="Card image cap">
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

    </section>
@endsection


@section('footer')

    <footer class="footer-01">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Colorlib</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top"
                                title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Pendeta</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded" style="background-image: url({{asset('asset/PENGURUS/PENDETA/PDT-E-L.png')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/parhalado">Pdt. XXXXX XXXXX</a>
                            </h3>
                            <div class="meta">
                                <div><span class="icon-calendar" style="color: white">Oct. 16, 2019</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded" style="background-image: url({{asset('asset/PENGURUS/PENDETA/PDT-J-S.png')}});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/parhalod">Pdt. XXXXX XXXXX</a>
                            </h3>
                            <div class="meta">
                                <div><span class="icon-calendar" style="color: white">Oct. 16, 2019</span> </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
                    <h2 class="footer-heading">Quick Links</h2>
                    <ul class="list-unstyled">
                        @auth
                            <li><a href="/dashboard" class="py-2 d-block">Home</a></li>
                        @else
                            <li><a href="/" class="py-2 d-block">Home</a></li>
                        @endauth

                        <li><a href="/gereja" class="py-2 d-block">Gereja</a></li>
                        <li><a href="/parhalado" class="py-2 d-block">Parhalado</a></li>
                        <li><a href="/kegiatan" class="py-2 d-block">Kegiatan</a></li>
                        <li><a href="/Tentang" class="py-2 d-block">Tentang</a></li>
                        <li><a href="https://www.google.com/maps/place/HKBP+Taman+Wisma+Asri/@-6.2146786,107.0258995,21z/data=!4m6!3m5!1s0x2e698f2853638a39:0x158fdb038dac775!8m2!3d-6.2147623!4d107.0258807!16s%2Fg%2F11hy3sjp9s?entry=ttu" class="py-2 d-block">Map</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon ion-ios-pin"></span><span class="text">203 Fake St. Mountain View, San
                                    Francisco, California, USA</span></li>
                            <li><a href="#"><span class="icon ion-ios-call"></span><span class="text">+2 392 3929
                                        210</span></a></li>
                            <li><a href="#"><span class="icon ion-ios-send"></span><span
                                        class="text">info@yourdomain.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12 text-center">

                    <p class="copyright">
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="ion-ios-heart"
                            aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
@endsection
