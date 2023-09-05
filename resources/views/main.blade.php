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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/main-header-navbar-footer-conten.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pop-up-login-account.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content/button.css') }}">
    <link rel="stylesheet" href="{{ asset('css/content/toast.css') }}">
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

    {{--
        memberikan notification dalam bentuk pop up toast
        command berupa succes atau error dengan type messege "Berhasil" jika
        succes selain itu akan dianggap error
        --}}
    @if (session('success'))
        <div class="toast success" id="successToast">
            <div class="success__icon">
                <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                        d="m12 1c-6.075 0-11 4.925-11 11s4.925 11 11 11 11-4.925 11-11-4.925-11-11-11zm4.768 9.14c.0878-.1004.1546-.21726.1966-.34383.0419-.12657.0581-.26026.0477-.39319-.0105-.13293-.0475-.26242-.1087-.38085-.0613-.11844-.1456-.22342-.2481-.30879-.1024-.08536-.2209-.14938-.3484-.18828s-.2616-.0519-.3942-.03823c-.1327.01366-.2612.05372-.3782.1178-.1169.06409-.2198.15091-.3027.25537l-4.3 5.159-2.225-2.226c-.1886-.1822-.4412-.283-.7034-.2807s-.51301.1075-.69842.2929-.29058.4362-.29285.6984c-.00228.2622.09851.5148.28067.7034l3 3c.0983.0982.2159.1748.3454.2251.1295.0502.2681.0729.4069.0665.1387-.0063.2747-.0414.3991-.1032.1244-.0617.2347-.1487.3236-.2554z"
                        fill="#393a37" fill-rule="evenodd"></path>
                </svg>
            </div>
            <div class="success__title" id="success__title">
                {{ session('success') }}
                {{-- pesan sukses akan ditampilkan di sini --}}
            </div>
        </div>
    @endif

    @if ($errors->any())



        <div class="toast error"  id="errorToast" >
            <div class="error__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" height="24" fill="none">
                    <path fill="#393a37"
                        d="m13 13h-2v-6h2zm0 4h-2v-2h2zm-1-15c-1.3132 0-2.61358.25866-3.82683.7612-1.21326.50255-2.31565 1.23915-3.24424 2.16773-1.87536 1.87537-2.92893 4.41891-2.92893 7.07107 0 2.6522 1.05357 5.1957 2.92893 7.0711.92859.9286 2.03098 1.6651 3.24424 2.1677 1.21325.5025 2.51363.7612 3.82683.7612 2.6522 0 5.1957-1.0536 7.0711-2.9289 1.8753-1.8754 2.9289-4.4189 2.9289-7.0711 0-1.3132-.2587-2.61358-.7612-3.82683-.5026-1.21326-1.2391-2.31565-2.1677-3.24424-.9286-.92858-2.031-1.66518-3.2443-2.16773-1.2132-.50254-2.5136-.7612-3.8268-.7612z">
                    </path>
                </svg>
            </div>
            <div style="display: flex; flex-direction: column;">
                @foreach ($errors->all() as $error)
                    @if ($loop->first)
                        <div class="error__title" id="error__title">
                    @else
                        <div class="error__title" id="error__title" style="margin-top: 15px">
                    @endif
                        {{ $error }}
                    </div>
                @endforeach
            </div>

        </div>
    @endif

    @yield('navbar')


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        @auth
            <a class="navbar-brand" href="{{ route('dashboard') }}"><img  width="100%" src="{{ asset('asset/Logo/Logo-HKBP-TWA.svg') }}"
                    alt="hkbp-error" loading="lazy"></a>
        @else
            <a class="navbar-brand" href="{{ route('/') }}"><img width="150px" src="{{ asset('asset/Logo/Logo-HKBP-TWA.svg') }}"
                    alt="hkbp-error" loading="lazy"></a>
        @endauth

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item @yield('home')">
                        <a class="nav-link" href="{{ route('dashboard') }}">HOME<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li class="nav-item @yield('home')">
                        <a class="nav-link" href="{{ route('/') }}">HOME<span class="sr-only">(current)</span></a>
                    </li>
                @endauth

                <li class="nav-item @yield('gereja')">
                    <a class="nav-link" href="{{ route('gereja')}}">GEREJA</a>
                </li>
                <li class="nav-item @yield('parhalado')">
                    <a class="nav-link " href="/">PARHALADO</a>
                </li>
                <li class="nav-item @yield('kegiatan')">
                    <a class="nav-link" href="/">KEGIATAN</a>
                </li>
                <li class="nav-item @yield('tentang')">
                    <a class="nav-link" href="/">TENTANG</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"
                        href="https://www.google.com/maps/place/HKBP+Taman+Wisma+Asri/@-6.2146786,107.0258995,21z/data=!4m6!3m5!1s0x2e698f2853638a39:0x158fdb038dac775!8m2!3d-6.2147623!4d107.0258807!16s%2Fg%2F11hy3sjp9s?entry=ttu">MAP</a>
                </li>

                @auth
                    @if (Auth::user()->role->role === 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/">ADMIN</a>
                        </li>
                    @endif
                @endauth

            </ul>
            <span class="navbar-text">
                @auth
                    <button class="button-logout" id="button-logout">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" height="20" fill="none"
                            class="svg-icon">
                            <g stroke-width="1.5" stroke-linecap="round" stroke="#5d41de">
                                <circle r="2.5" cy="10" cx="10"></circle>
                                <path fill-rule="evenodd"
                                    d="m8.39079 2.80235c.53842-1.51424 2.67991-1.51424 3.21831-.00001.3392.95358 1.4284 1.40477 2.3425.97027 1.4514-.68995 2.9657.82427 2.2758 2.27575-.4345.91407.0166 2.00334.9702 2.34248 1.5143.53842 1.5143 2.67996 0 3.21836-.9536.3391-1.4047 1.4284-.9702 2.3425.6899 1.4514-.8244 2.9656-2.2758 2.2757-.9141-.4345-2.0033.0167-2.3425.9703-.5384 1.5142-2.67989 1.5142-3.21831 0-.33914-.9536-1.4284-1.4048-2.34247-.9703-1.45148.6899-2.96571-.8243-2.27575-2.2757.43449-.9141-.01669-2.0034-.97028-2.3425-1.51422-.5384-1.51422-2.67994.00001-3.21836.95358-.33914 1.40476-1.42841.97027-2.34248-.68996-1.45148.82427-2.9657 2.27575-2.27575.91407.4345 2.00333-.01669 2.34247-.97026z"
                                    clip-rule="evenodd"></path>
                            </g>
                        </svg>
                        <span class="lable">Profile</span>
                    </button>
                @else
                    <div class="warning">
                        <div class="warning__icon">
                            <svg fill="none" height="24" viewBox="0 0 24 24" width="24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="m13 14h-2v-5h2zm0 4h-2v-2h2zm-12 3h22l-11-19z" fill="#393a37"></path>
                            </svg>
                        </div>
                        <div class="warning__title">Not Support Device</div>
                    </div>
                    <button class="button-popup-login" id="button-popup-login">
                        <img loading="lazy" src="https://img.icons8.com/ios-filled/50/login-rounded-right.png" alt="">
                        LOGIN
                    </button>
                @endauth
            </span>
        </div>
    </nav>

    <header style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
        <img loading="lazy" id="header-image" src="{{ asset('asset/Denah/ALTAR.JPG') }}" class="img-fluid" alt="Responsive image">
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

    <script src="{{ asset('js/toaser.js') }}"></script>
    <script>

        var flashSuccessMessage = @json(session('success'));
        window.flashSuccessMessage = flashSuccessMessage;

        var errorMessages = @json($errors->all());
        window.errorMessages = errorMessages;
    </script>
</body>

{{--
    sectiont buat pop up log in dan logout
    ketika ada masuk auth akan menampilkan page logout
    begitu juga sebaliknya.
--}}

@auth
    <div class="card-profile" style="display: none">
        <video width="100" height="100" preload="none"
            style="background: transparent  url('https://cdn-icons-png.flaticon.com/512/11186/11186790.png') 50% 50% / fit no-repeat;"
            autoplay="autoplay" loop="true" muted="muted" playsinline="" __idm_id__="1622017">
            <source src="https://cdn-icons-mp4.flaticon.com/512/11186/11186790.mp4" type="video/mp4">
        </video>
        <p class="cookieHeading">Role {{ Auth::user()->role->role }}</p>
        <p class="cookieDescription">{{ Auth::user()->jemaat->jemaatfname }} {{ Auth::user()->jemaat->jemaatlname }}</p>

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
                <input required name="email" id="email" type="text"
                    value={{ Cookie::get('mycookie') !== null ? Cookie::get('mycookie') : '' }}>
                <label>Email</label>
                <small style="display: none">error</small>

            </div>
            <div class="user-box">
                <input required name="password" id="password" type="password"
                    value={{ Cookie::get('mypassword') !== null ? Cookie::get('mypassword') : '' }}>
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

{{--
    Buat mengatur pop-up update atau pop-up controll lainnya
    berdasarkna kebutuhan pagenya
--}}
@yield('pop-up-controller')

</html>
