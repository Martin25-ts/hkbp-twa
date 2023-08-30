@extends('main')

@section('title', 'HKBP - TWA')


@push('style-content')

    <link rel="stylesheet" href="{{ asset('css/gereja.css') }}">
    <link rel="stylesheet" href="{{ asset('css/card.css') }}">

@endpush


@push('script-content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Clamp.js/0.5.1/clamp.min.js"></script>
    <script src="{{ asset('js/gallery.js') }}"></script>

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
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">HOME<span class="sr-only">(current)</span></a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME<span class="sr-only">(current)</span></a>
                    </li>
                @endauth

                <li class="nav-item active" >
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

                @auth
                    @if (Auth::user()->role->role === 'Admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/">ACCOUNT</a>
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
                        <img src="https://img.icons8.com/ios-filled/50/login-rounded-right.png" alt="">
                        LOGIN
                    </button>
                @endauth
            </span>
        </div>
    </nav>

@endsection




@section('content')

    <Section class="all-content">
        <div class="container-gallery-main">
            <div class="row-gallery">
                <h2>GALLERY</h2>
            </div>
            <div class="row-gallery back">
                <img src="{{ asset('asset/Denah/BANGKU-JEMAAT.JPG') }}" alt="..." class="img-thumbnail">
                <img src="{{ asset('asset/Denah/ALTAR_KANAN.JPG') }}" alt="..." class="img-thumbnail">
                <img src="{{ asset('asset/Denah/BANGKU-JEMAAT -KANAN.JPG') }}" alt="..." class="img-thumbnail">
            </div>
            <div class="row-gallery back">
                <img src="{{ asset('asset/Denah/BANGKU-JEMAAT-KIRI.JPG') }}" alt="..." class="img-thumbnail">
                <img src="{{ asset('asset/Denah/PENDETA.JPG') }}" alt="..." class="img-thumbnail">
                <img src="{{ asset('asset/Denah/TAMPILAN-BELAKANG.JPG') }}" alt="..." class="img-thumbnail">
            </div>
        </div>

        <div class="row-gallery" id="point-up">
            <h2>HISTORY</h2>
        </div>

        <div class="projcard-container">


            <div class="projcard projcard-blue">
                <div class="projcard-innerbox">
                    <img class="projcard-img" src="{{ asset('asset/Live-Stream/IMG_2066.JPG') }}" />
                    <div class="projcard-textbox">
                        <div class="projcard-title">Pesta Pembangunan</div>
                        <div class="projcard-subtitle">Minggu, 25 Juni 2023</div>
                        <div class="projcard-bar"></div>
                        <div class="projcard-description">Pesta Pembangunan" adalah tentang perayaan bersama yang diadakan
                            untuk membangun gereja baru. Dalam acara ini, komunitas gereja berkumpul untuk menggalang dana
                            dan memberikan kontribusi dalam rangka merencanakan dan membangun gereja yang lebih besar dan
                            lebih baik.
                        </div>
                    </div>
                </div>
            </div>

            <div class="projcard projcard-red">
                <div class="projcard-innerbox">
                    <img class="projcard-img" src="{{ asset('asset/PENGURUS/PARHALADO/PH-S.MUSIk.jpeg') }}" />
                    <div class="projcard-textbox">
                        <div class="projcard-title">That's Another Card</div>
                        <div class="projcard-subtitle">I don't really think that I need to explain anything here</div>
                        <div class="projcard-bar"></div>
                        <div class="projcard-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                            dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum.
                        </div>
                    </div>
                </div>
            </div>

            <div class="projcard projcard-green">
                <div class="projcard-innerbox">
                    <img class="projcard-img" src="{{ asset('asset/Live-Stream/IMG_2066.JPG') }}" />
                    <div class="projcard-textbox">
                        <div class="projcard-title">And a Third Card</div>
                        <div class="projcard-subtitle">You know what this is by now</div>
                        <div class="projcard-bar"></div>
                        <div class="projcard-description">Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</div>
                    </div>
                </div>
            </div>

            <div class="container-action" style="display: flex; gap: 20px; width: fit-content">

                <a href="#point-up">
                    <button class="up-button">
                        ↑
                    </button>
                </a>


                @auth
                    @if (Auth::user()->role->role === 'Admin')
                        <button type="button" class="button-item">
                            <span class="button__text">Add Item</span>
                            <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"
                                    stroke="currentColor" height="24" fill="none" class="svg">
                                    <line y2="19" y1="5" x2="12" x1="12"></line>
                                    <line y2="12" y1="12" x2="19" x1="5"></line>
                                </svg></span>
                        </button>
                    @endif

                @endauth

            </div>
        </div>

    </Section>

@endsection
