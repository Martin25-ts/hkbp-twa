<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('js/pop-up-login-account.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    @stack('script-content')
    <Script>
        $(document).ready(function() {
            $(window).on('resize', function() {
                var screenWidth = $(window).width();
                var screenHeight = $(window).height();

                console.log("Lebar Layar: " + screenWidth);
                console.log("Tinggi Layar: " + screenHeight);
            });
        });
    </Script>



    @stack('style-content')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main-header-navbar-footer-conten.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop-up-login-account.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            transition: filter 0.3s ease-out;
        }

        .blur {
            filter: blur(4px);
        }
    </style>



    @stack('font-content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">


    <link rel="shortcut icon" href="{{ asset('asset/Logo/Logo-Hkbp.png') }}">

    <title>@yield('title')</title>


</head>

<body>
    @yield('navbar')

    <header style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
        <img id="header-image" src="{{ asset('asset/Denah/ALTAR.JPG') }}" class="img-fluid" alt="Responsive image">
    </header>

    @yield('content')

    <footer class="footer-01">
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
</body>
@auth


    <div class="card-profile" style="display: none">
        <video width="100" height="100" preload="none"
            style="background: transparent  url('https://cdn-icons-png.flaticon.com/512/11186/11186790.png') 50% 50% / fit no-repeat;"
            autoplay="autoplay" loop="true" muted="muted" playsinline="" __idm_id__="1622017">
            <source src="https://cdn-icons-mp4.flaticon.com/512/11186/11186790.mp4" type="video/mp4">
        </video>
        <p class="cookieHeading">Role {{ Auth::user()->role->role}}</p>
        <p class="cookieDescription">{{Auth::user()->jemaat->jemaatfname}} {{Auth::user()->jemaat->jemaatlname}}</p>

        <div class="buttonContainer">
            <form action="/logout" method="get">
                <button class="acceptButton">Logout</button>
            </form>

            <button class="declineButton" id="declineButton">Close</button>
        </div>


    </div>
@else
    <div class="login-box" style="display: none">
        <p>Login</p>
        <form action="/login" method="POST">
            @csrf
            <div class="user-box">
                <input required name="email" id="email" type="text" value={{Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : ""}}>
                <label>Email</label>
                <small style="display: none">error</small>

            </div>
            <div class="user-box">
                <input required name="password" id="password" type="password" value={{Cookie::get('mypassword') !== null ? Cookie::get('mypassword') : ""}}>
                <label>Password</label>
                <small style="display: none">error</small>
            </div>
            <div class="content" style="display: flex; gap: 8px; color: white">
                <label class="checkBox">
                    <input id="ch1" type="checkbox" name="remember" id="remember">
                    <div class="transition"></div>

                </label>
                <label for="checkbox">Remember Me</label>
            </div>
            <button class="a2" type="submit" value="Login">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Login
            </button>
        </form>
    </div>
@endauth

</html>
