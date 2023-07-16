@extends('main')

@section('title', 'HKBP - TWA')


@push('style-content')
    <link rel="stylesheet" href="{{ asset('css/dashboard-content.css') }}">
@endpush

@push('script-content')
    <script>
        var sundayData = @json($sunday);
        var beritas = @json($beritas);

        delete sundayData.accountid;

        console.log(sundayData);
        console.log(beritas);


    </script>
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

                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/">ACCOUNT</a>
                    </li>
                @endauth

            </ul>
            <span class="navbar-text">
                @auth
                    <style>
                        .button-logout {
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            padding: 6px 12px;
                            gap: 8px;
                            height: 36px;
                            width: 120px;
                            border: none;
                            background: #5e41de33;
                            border-radius: 20px;
                            cursor: pointer;
                            outline: none;
                        }

                        .lable {
                            line-height: 20px;
                            font-size: 17px;
                            color: #5D41DE;
                            font-family: sans-serif;
                            letter-spacing: 1px;
                        }

                        .button-logout:hover {
                            background: #5e41de4d;
                        }

                        .button-logout:hover .svg-icon {
                            animation: spin 2s linear infinite;
                        }

                        .button-logout:focus {
                            outline: none;
                        }

                        @keyframes spin {
                            0% {
                                transform: rotate(0deg);
                            }

                            100% {
                                transform: rotate(360deg);
                            }
                        }
                    </style>
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

    <Section class="all-cantent" style="padding: 50px 0 50px 0">
        <div class="content-container">

            <div class="card-deck" style="max-width: 100%;">

                <div class="card">

                    <img class="card-img-top"
                        src="{{ asset('asset/Live-Stream/' . $displayDate->format('Y-m-d') . '/thumbnail.png') }}"
                        alt="Card image cap">

                    <div class="card-body" style="padding-bottom: 70px">
                        <h5 class="card-title">LIVE STREAMING
                            <br>
                            <p>{{ $displayDate->format('l, d F Y') }}</p>
                        </h5>
                        <p class="card-text">Live Streaming akan di adakan setiap hari minggu pada ibadah pukul 11.15
                        </p>
                    </div>
                    <div class="content-change">
                        <div class="file-content">
                            <a
                                href="{{ asset('asset/Live-Stream/' . $displayDate->format('Y-m-d') . '/' . $sunday->sundayagenda) }}"><img
                                    width="40px" height="40px" src="https://img.icons8.com/ios/50/book--v1.png"
                                    alt="Kertas-Acara"></a>
                            <a
                                href="{{ asset('asset/Live-Stream/' . $displayDate->format('Y-m-d') . '/' . $sunday->sundaywarta) }}"><img
                                    width="40px" height="40px" src="https://img.icons8.com/ios/50/news.png"
                                    alt="Warta"></a>
                        </div>

                        <button class="Btn">

                            <div class="sign"><svg viewBox="0 0 512 512">
                                    <path
                                        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                    </path>
                                </svg>
                            </div>

                            <div class="text-link">
                                <a style="color: white"href="{{ $sunday->sundaylive }}">Live</a>
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
                        <small class="text-muted">Last updated {{ $sunday->updated_at->diffForHumans() }}</small>
                    </div>
                </div>


                <div class="card">

                    <img height="269px" class="card-img-top"
                        src="{{ asset('asset/Dashboard/naposo/thumbnail-naposo.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Naposo</h5>
                        <p class="card-text">Marsitangiangan, Marsiurupan, Marsihaposan
                        </p>
                    </div>
                    <div class="card-footer" style="display: flex; justify-content: space-between">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <div class="button-card" style="display: flex;">
                            <button class="Btn">

                                <div class="sign"><svg viewBox="0 0 512 512">
                                        <path
                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="text-link">
                                    <a style="color: white"href="/naposo">Lihat</a>
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


                    </div>

                </div>

                <div class="card">
                    <img height="269px" class="card-img-top"
                        src="{{ asset('asset/Dashboard/remaja/thumbnail-remaja.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Remaja</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                    </div>
                    <div class="card-footer" style="display: flex; justify-content: space-between">
                        <small class="text-muted">Last updated 3 mins ago</small>

                        <div class="button-card" style="display: flex;">
                            <button class="Btn">

                                <div class="sign"><svg viewBox="0 0 512 512">
                                        <path
                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="text-link">
                                    <a style="color: white"href="/remaja">Lihat</a>
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
                    </div>
                </div>
            </div>

            {{-- Section Berita --}}
            <div class="title-berita" style="width: 100v; display: flex; justify-content: center; padding: 50px 0">
                {{-- title berita --}}
                <h2>Berita</h2>

            </div>



            {{-- containert bertia --}}
            <div class="berita card-content" style="">
                {{-- setiap card untuk berita --}}
                @foreach ($beritas as $berita)
                    <div class="card-news" style="max-width: 70vw">
                        {{-- image beritanya --}}
                        <div class="card-news-image">
                            <img style="max-width: 67vw; width: auto"
                                src="{{ asset('asset/Dashboard/berita/' . $berita->beritaimage) }}" class="img-fluid"
                                alt="Responsive image">
                        </div>

                        {{-- style button remove berita --}}

                        {{-- card title --}}
                        <div class="card-news-title" style="display: flex">
                            <h1 class="display-1">{{ $berita->beritatitle }}</h1>
                            @auth
                                <div class="access-admin" style="display: flex; gap: 10px">
                                    <div style="padding-left: 10px" class="admin-update">
                                        <form action="">
                                            <input type="button" value="Update">
                                        </form>
                                    </div>
                                    <style>
                                        .button-delete {
                                            width: 50px;
                                            height: 50px;
                                            border-radius: 50%;
                                            background-color: rgb(20, 20, 20);
                                            border: none;
                                            font-weight: 600;
                                            display: flex;
                                            align-items: center;
                                            justify-content: center;
                                            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.164);
                                            cursor: pointer;
                                            transition-duration: .3s;
                                            overflow: hidden;
                                            position: relative;
                                        }

                                        .svgIcon {
                                            width: 12px;
                                            transition-duration: .3s;
                                        }

                                        .svgIcon path {
                                            fill: white;
                                        }

                                        .button-delete:hover {
                                            width: 140px;
                                            border-radius: 50px;
                                            transition-duration: .3s;
                                            background-color: rgb(255, 69, 69);
                                            align-items: center;
                                        }

                                        .button-delete:hover .svgIcon {
                                            width: 50px;
                                            transition-duration: .3s;
                                            transform: translateY(60%);
                                        }

                                        .button-delete::before {
                                            position: absolute;
                                            top: -20px;
                                            content: "Delete";
                                            color: white;
                                            transition-duration: .3s;
                                            font-size: 2px;
                                        }

                                        .button-delete:hover::before {
                                            font-size: 13px;
                                            opacity: 1;
                                            transform: translateY(30px);
                                            transition-duration: .3s;
                                        }

                                        .button-delete:focus {
                                            outline: none;
                                        }
                                    </style>
                                    <button class="button-delete">
                                        <svg viewBox="0 0 448 512" class="svgIcon">
                                            <path
                                                d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                            @endauth
                        </div>

                        {{-- card description --}}
                        <div class="card-news-description">
                            <span style="max-width: 50vw">{{ $berita->beritadeskripsi }}</span>
                        </div>
                    </div>
                @endforeach




                @auth
                    <style>
                        .button {
                            position: relative;
                            width: 150px;
                            height: 40px;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            border: 1px solid #34974d;
                            background-color: #3aa856;
                        }

                        .button,
                        .button__icon,
                        .button__text {
                            transition: all 0.3s;
                        }

                        .button .button__text {
                            transform: translateX(30px);
                            color: #fff;
                            font-weight: 600;
                        }

                        .button .button__icon {
                            position: absolute;
                            transform: translateX(109px);
                            height: 100%;
                            width: 39px;
                            background-color: #34974d;
                            display: flex;
                            align-items: center;
                            justify-content: center;
                        }

                        .button .svg {
                            width: 30px;
                            stroke: #fff;
                        }

                        .button:hover {
                            background: #34974d;
                        }

                        .button:hover .button__text {
                            color: transparent;
                        }

                        .button:hover .button__icon {
                            width: 148px;
                            transform: translateX(0);
                        }

                        .button:active .button__icon {
                            background-color: #2e8644;
                        }

                        .button:active {
                            border: 1px solid #2e8644;
                        }

                        .button:focus {
                            outline: none;
                        }
                    </style>
                    <button type="button" class="button" style="margin-top: 20px">

                        <span class="button__text">Add Item</span>
                        <span class="button__icon"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"
                                stroke="currentColor" height="24" fill="none" class="svg">
                                <line y2="19" y1="5" x2="12" x1="12"></line>
                                <line y2="12" y1="12" x2="19" x1="5"></line>
                            </svg></span>
                    </button>
                @endauth
            </div>
        </div>
    </Section>

@endsection
