<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/naposo/naposo-main.css') }}">

    @stack('style-content')


    <link rel="shortcut icon" href="{{ asset('asset/Logo/Logo-Hkbp.png') }}">
    <title>@yield('title')</title>



</head>

<body>

    {{-- header for naposo --}}

    <header>
        <img src="{{ asset('asset/Naposo/thumbnail-dasboard-naposo.png') }}" alt="...">
    </header>




    {{-- navbar for naposo --}}
    <nav>
        <ul class="nav nav-underline justify-content-center">
            <li class="nav-item">
                <a class="nav-link @yield('dashboard')" href="{{ route('naposo') }}">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('kegiatan')" href="{{ route('naposo-kegiatan') }}">Kegiatan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('galery')" href="{{ route('naposo-galery') }}">Galery</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('pengurus')" href="{{ route('naposo-pengurus') }}">Pengurus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @yield('tentang')" href="{{ route('naposo-tentang') }}">Tentang</a>
            </li>
        </ul>
    </nav>

    {{-- content for naposo --}}
    @yield('content')

    {{-- footer for naposo --}}
    <footer class="footer-01" >
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">HKBP Taman Wisma Asri</h2>
                    <p>Tim Pengembangan Web HKBP Taman Wisma Asri Segala Hak Cipta untuk konten dalam web ini adalah di
                        bawah hak cipta HKBP Taman Wisma Asri. Dilarang menyalin isi dari website ini tanpa
                        pemberitahuan dan izin dari HKBP Taman Wisma Asri.</p>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a style="text-align: center"
                                href="https://www.youtube.com/@hkbptamanwismaasri" data-toggle="tooltip"
                                data-placement="top" title="Youtube"><img class="ic-w" style="padding-top: 7px"
                                    src="https://img.icons8.com/material/24/youtube-play--v1.png" alt=""></a>
                        </li>
                        <li class="ftco-animate"><a style="text-align: center"
                                href="https://www.facebook.com/gereja.twa.52" data-toggle="tooltip" data-placement="top"
                                title="Facebook"><img class="ic-w" style="padding-top: 5px"
                                    src="https://img.icons8.com/ios-glyphs/30/facebook-new.png" alt=""></a></li>
                        <li class="ftco-animate"><a style="text-align: center"
                                href="https://www.instagram.com/hkbp_tamanwismaasri" data-toggle="tooltip"
                                data-placement="top" title="Instagram"><img class="ic-w" style="padding-top: 7px"
                                    src="https://img.icons8.com/material-outlined/24/instagram-new--v1.png"
                                    alt=""></a></li>
                    </ul>

                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Pendeta</h2>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded"
                            style="background-image: url({{ asset('asset/PENGURUS/PENDETA/PDT-J-S.png') }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/parhalado">Pdt.J.Sipahutar,S.Th.</a>
                            </h3>
                            <div class="meta">
                                <div><span class="icon-calendar" style="color: white">081370786358</span> </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-21 mb-4 d-flex">
                        <a class="img mr-4 rounded"
                            style="background-image: url({{ asset('asset/PENGURUS/PENDETA/PDT-B-S.png') }});"></a>
                        <div class="text">
                            <h3 class="heading"><a href="/parhalod">Pdt.B.Sinaga,S.Th.</a>
                            </h3>
                            <div class="meta">
                                <div><span class="icon-calendar" style="color: white">082165524500</span> </div>

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
                        <li><a href="https://www.google.com/maps/place/HKBP+Taman+Wisma+Asri/@-6.2146786,107.0258995,21z/data=!4m6!3m5!1s0x2e698f2853638a39:0x158fdb038dac775!8m2!3d-6.2147623!4d107.0258807!16s%2Fg%2F11hy3sjp9s?entry=ttu"
                                class="py-2 d-block">Map</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
                    <h2 class="footer-heading">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><img class="ic" width="30px" src="https://img.icons8.com/ios-filled/marker.png"
                                    alt=""><span class="text">Komplek Ruko Taman Wismaasri Asri Blok T No.
                                    7-10 Bekasi Utara 17121</span></li>
                            <li><a href="#"><img class="ic" style="padding-right: 5px" width="30px"
                                        src="https://img.icons8.com/material-rounded/phone--v1.png"
                                        alt=""><span class="text">+2 392 3929
                                        210</span></a></li>
                            <li><a href="#"><img class="ic" style="padding-right: 5px" width="30px"
                                        src="https://img.icons8.com/ios-glyphs/filled-sent.png" alt=""><span
                                        class="text">TamanWismaAsri.HKBP@gmail.com</span></a></li>
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
                        </script> All rights reserved | This website is under <img class="ic"
                            width="25px" src="https://img.icons8.com/ios-glyphs/filled-like.png"
                            alt=""></i> by <a href="https://hkbp-twa.com" target="_blank">hkbp-twa.com</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
        <style>
            .ic-w {
                filter: invert(1);
            }

            .ic {
                filter: brightness(100%) opacity(60%);
            }
        </style>
    </footer>


    @stack('script-content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
