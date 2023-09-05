@extends('main')

@section('title', 'HKBP - TWA')

@section('home', 'active')
@push('style-content')
    @auth
        @if (Auth::user()->role->role === 'Admin')
            <link rel="stylesheet" href="{{ asset('css/admin/admin.css') }}">
        @endif
    @endauth
    <link rel="stylesheet" href="{{ asset('css/dashboard-content.css') }}">
@endpush

@push('script-content')
    @auth
        @if (Auth::user()->role->role === 'Admin')
            <script>
                var sundayData = @json($sunday);
                var beritas = @json($beritas);

                delete sundayData.accountid;

                console.log(sundayData);
                console.log(beritas);
            </script>
            <script src="{{ asset('js/admin.js') }}"></script>
        @else
        @endif

    @endauth
@endpush

@section('content')

    <Section class="all-cantent" style="padding: 50px 0 50px 0">
        <div class="content-container">

            <div class="card-deck" style="max-width: 100%;">

                <div class="card">

                    <img loading="lazy" class="card-img-top"
                        src="{{ asset('asset/Live-Stream/' . $displayDate->format('Y-m-d') . '/thumbnail.png') }}"
                        alt="Card image cap" >

                    <div class="card-body" style="padding-bottom: 70px">
                        <h5 class="card-title">LIVE STREAMING
                            <br>
                            <p>{{ $displayDate->format('l, d F Y') }}</p>
                        </h5>
                        <p class="card-text">{{ $sunday->sundaydescription }}
                        </p>
                    </div>
                    <div class="content-change">
                        <div class="file-content">
                            <a
                                href="{{ asset('asset/Live-Stream/' . $displayDate->format('Y-m-d') . '/' . $sunday->sundayagenda) }}"><img
                                    width="40px" height="40px" src="https://img.icons8.com/ios/50/book--v1.png"
                                    alt="Kertas-Acara" ></a>
                            <a
                                href="{{ asset('asset/Live-Stream/' . $displayDate->format('Y-m-d') . '/' . $sunday->sundaywarta) }}"><img
                                    width="40px" height="40px" src="https://img.icons8.com/ios/50/news.png"
                                    alt="Warta" loading="lazy"></a>
                        </div>

                        <button class="Btn-lihat">
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
                            @if (Auth::user()->role->role === 'Admin')
                                <div class="controller-admin" style="display: flex; gap: 0.5rem">
                                    <button class="update-button" id="update-sunday">Update</button>
                                    <button class="cssbuttons-io-button" style="z-index: 999999" id="add-sunday-button">
                                        <svg id="sunday-add-button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                            width="24" height="24">
                                            <path fill="none" d="M0 0h24v24H0z"></path>
                                            <path fill="currentColor" d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z"></path>
                                        </svg>
                                        <span id="sunday-add-button">new</span>
                                    </button>
                                </div>
                            @endif
                        @endauth

                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated {{ $sunday->updated_at->diffForHumans() }}</small>
                    </div>
                </div>


                <div class="card">

                    <img loading="lazy" height="269px" class="card-img-top"
                        src="{{ asset('asset/Dashboard/naposo/thumbnail-naposo.png') }}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Naposo</h5>
                        <p class="card-text">Marsitangiangan, Marsiurupan, Marsihaposan
                        </p>
                    </div>
                    <div class="card-footer" style="display: flex; justify-content: space-between">
                        <small class="text-muted">Last updated 3 mins ago</small>
                        <div class="button-card" style="display: flex;">
                            <button class="Btn-lihat">

                                <div class="sign"><svg viewBox="0 0 512 512">
                                        <path
                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="text-link">
                                    <a style="color: white"href="{{ route('naposo') }}">Lihat</a>
                                </div>
                            </button>
                            @auth
                                @if (Auth::user()->role->role === 'Admin' || Auth::user()->role->role === 'Naposo')
                                    <button class="update-button" id="update-sunday">Update</button>
                                @endif
                            @endauth
                        </div>


                    </div>

                </div>

                <div class="card">
                    <img loading="lazy" height="269px" class="card-img-top"
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
                            <button class="Btn-lihat">

                                <div class="sign"><svg viewBox="0 0 512 512">
                                        <path
                                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z">
                                        </path>
                                    </svg>
                                </div>

                                <div class="text-link">
                                    <a style="color: white"href="{{ route('remaja') }}">Lihat</a>
                                </div>
                            </button>
                            @auth
                                @if (Auth::user()->role->role === 'Admin' || Auth::user()->role->role === 'Remaja')
                                    <button class="update-button" id="update-sunday">Update</button>
                                @endif
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
                    <div class="card-news" >
                        {{-- image beritanya --}}
                        <div class="card-news-image">
                            <img loading="lazy" style=" width: 100%"
                                src="{{ asset('asset/Dashboard/berita/' . $berita->beritaimage) }}" class="img-fluid"
                                alt="Responsive image">
                        </div>

                        {{-- card title --}}
                        <div class="card-news-title" style="display: flex; align-items: center">
                            <h1 class="display-1">{{ $berita->beritatitle }}</h1>
                            @auth
                                @if (Auth::user()->role->role === 'Admin')
                                    <div class="access-admin" style="display: flex; gap: 10px; height: 80%;">
                                        <button class="update-button" id="update-sunday">Update</button>
                                        {{-- <button class="button-delete">
                                            <svg viewBox="0 0 448 512" class="svgIcon">
                                                <path
                                                    d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z">
                                                </path>
                                            </svg>
                                        </button> --}}
                                    </div>
                                @endif

                            @endauth
                        </div>

                        {{-- card description --}}
                        <div class="card-news-description">
                            <h4>{{ $berita->beritadeskripsi }}</h4>
                        </div>
                    </div>
                @endforeach




                @auth
                    @if (Auth::user()->role->role === 'Admin')
                        <style>

                        </style>
                        <button type="button" class="button-item"  style="margin-top: 20px">

                            <span class="button__text" >Add Item</span>
                            <span class="button__icon" id="button-add-berita"><svg id="button-add-berita" xmlns="http://www.w3.org/2000/svg" width="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round"
                                    stroke="currentColor" height="24" fill="none" class="svg">
                                    <line id="button-add-berita" y2="19" y1="5" x2="12" x1="12"></line>
                                    <line id="button-add-berita" y2="12" y1="12" x2="19" x1="5"></line>
                                </svg></span>
                        </button>
                    @endif
                @endauth
            </div>
        </div>
    </Section>

@endsection



@section('pop-up-controller')
    @auth
        @if (Auth::user()->role->role === 'Admin')

            {{--
                form untuk mengupload data minggu ke database
                dengan method POST dan dengan action /sundaypost
            --}}

            <div class="form-sundays" style="display: none;">
                <div class="container-form-sundays">
                    <span style="text-align: center; margin: 10px 100px; font-size: 40px; font-weight: 400">Acara Minggu</span>
                    <script>
                        $(document).ready(function() {
                            // Fungsi untuk mengubah teks pada elemen <span> ketika ada file yang diunggah
                            function showFileName(input, targetSpan) {
                                const fileName = input.files[0].name;
                                $(targetSpan).text(fileName);
                            }

                            // Mengikat peristiwa "change" pada elemen <input type="file"> untuk thumbnail
                            $('#sundaythumbnail').on('change', function() {
                                showFileName(this, '#thumbnailFileName');
                            });

                            // Mengikat peristiwa "change" pada elemen <input type="file"> untuk agenda
                            $('#sundayagenda').on('change', function() {
                                showFileName(this, '#agendaFileName');
                            });

                            // Mengikat peristiwa "change" pada elemen <input type="file"> untuk warta
                            $('#sundaywarta').on('change', function() {
                                showFileName(this, '#wartaFileName');
                            });
                        });
                    </script>
                    <form style="margin-bottom: 10px" class="sundayForm" action="/sundaypost" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="gambar">
                            <label for="sundaythumbnail" class="up-file">
                                <img width="64" height="64"
                                    src="https://img.icons8.com/pastel-glyph/64/image-file-add.png" alt="image-file-add" />
                                <span id="thumbnailFileName">Thuhmbnail Minggu</span>
                                <input style="display: none;" type="file" name="sundaythumbnail" id="sundaythumbnail">
                            </label>

                        </div>
                        <div class="file-agenda-warta">
                            <div class="agenda">
                                <label for="sundayagenda" class="up-file">
                                    <img width="50" height="50"
                                        src="https://img.icons8.com/ios-filled/50/pdf-2--v1.png" alt="pdf-2--v1" />
                                    <span id="agendaFileName">File Agenda</span>
                                    <input style="display: none;" type="file" name="sundayagenda" id="sundayagenda">
                                </label>

                            </div>

                            <div class="warta">
                                <label for="sundaywarta" class="up-file">
                                    <img width="50" height="50"
                                        src="https://img.icons8.com/ios-filled/50/pdf-2--v1.png" alt="pdf-2--v1" />
                                    <span id="wartaFileName">File Warta</span>
                                    <input style="display: none;" type="file" name="sundaywarta" id="sundaywarta">
                                </label>
                            </div>
                        </div>

                        <div class="date ipt">
                            <label for="sundaydate">Tanggal Minggu</label>
                            <input type="date" name="sundaydate" id="sundaydate">
                        </div>
                        <div class="description ipt">
                            <label for="sundaydescription">Deskripsi Minggu</label>
                            <textarea name="sundaydescription" id="sundaydescription" maxlength="255"></textarea>
                        </div>

                        <div class="live ipt">
                            <label for="sundaylive">Link Live</label>
                            <input type="url" name="sundaylive" id="sundaylive">
                        </div>
                        <div>
                            <button style="padding-top: 10px" class="sunday-save-button" type="submit">UPLOAD</button>
                        </div>

                    </form>
                </div>
            </div>


            {{--
                form untuk mengupdate minggu terakhir yang ada di database
                dengan method POST dan dengan action /sundayupdate
            --}}

            <div class="form-sunday-update" style="display: none">
                <div class="container-form-sunday-update">
                    <span style="text-align: center; margin: 10px 100px; font-size: 40px; font-weight: 400">Acara Minggu Update</span>
                    <form style="margin-bottom: 10px" class="sundayForm-update" action="/sundayupdate" method="POST"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="gambar">
                            <label for="sundaythumbnail" class="up-file">
                                <img width="64" height="64"
                                    src="https://img.icons8.com/pastel-glyph/64/image-file-add.png" alt="image-file-add" />
                                <span id="thumbnailFileName">{{$sunday->sundaythumbnail}}</span>
                                <input style="display: none;" type="file" name="sundaythumbnail" id="sundaythumbnail">
                            </label>

                        </div>
                        <div class="file-agenda-warta">
                            <div class="agenda">
                                <label for="sundayagenda" class="up-file">
                                    <img width="50" height="50"
                                        src="https://img.icons8.com/ios-filled/50/pdf-2--v1.png" alt="pdf-2--v1" />
                                    <span id="agendaFileName">{{$sunday->sundayagenda}}</span>
                                    <input style="display: none;" type="file" name="sundayagenda" id="sundayagenda">
                                </label>

                            </div>

                            <div class="warta">
                                <label for="sundaywarta" class="up-file">
                                    <img width="50" height="50"
                                        src="https://img.icons8.com/ios-filled/50/pdf-2--v1.png" alt="pdf-2--v1" />
                                    <span id="wartaFileName">{{$sunday->sundaywarta}}</span>
                                    <input style="display: none;" type="file" name="sundaywarta" id="sundaywarta">
                                </label>
                            </div>
                        </div>

                        <div class="date ipt">
                            <label for="sundaydate">Tanggal Minggu</label>
                            <input type="date" name="sundaydate" id="sundaydate" value="{{$sunday->sundaydate}}">
                        </div>
                        <div class="description ipt">
                            <label for="sundaydescription">Deskripsi Minggu</label>
                            <textarea name="sundaydescription" id="sundaydescription" maxlength="255">{{$sunday->sundaydescription}}</textarea>
                        </div>

                        <div class="live ipt">
                            <label for="sundaylive">Link Live</label>
                            <input type="url" name="sundaylive" id="sundaylive" value="{{$sunday->sundaylive}}">
                        </div>
                        <div>
                            <button style="padding-top: 10px" class="sunday-save-button" type="submit">UPDATE</button>
                        </div>
                    </form>

                </div>
            </div>

            {{-- pop up menambah berita --}}
            {{-- request
                1. berita image
                2. berita tilte
                3. berita description
                4. berita time (range diberitakan)
                --}}
            <div class="form-add-berita" id="form-add-berita" style="display: none">
                <div class="title-form-berita">
                    <h1 class="title-berita">Form Berita</h1>
                </div>
                <form class="form-berita" action="{{ route('berita.post')}}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="img-berita">
                        <label for="beritaimage" style="width: 100%; display: flex; flex-direction: row; align-items: center; gap: 2px;margin: 0 0 0 7px">
                            <img id="empty" type="image" width="45px"  src="https://img.icons8.com/quill/50/picture.png" alt="">
                            <img id="fill" type="image" width="45px" style="display: none" src="https://img.icons8.com/matisse/100/picture.png" alt="">
                            <span id="filename">Berita Thumbnail</span>
                            <input type="file" name="beritaimage" id="beritaimage" style="display: none">
                        </label>
                    </div>

                    <div class="berita-tile ipt">
                        <label for="beritatitle">Judul Berita</label>
                        <input type="text" name="beritatitle" id="beritatitle">
                    </div>

                    <div class="berita-description ipt">
                        <label for="beritadescription">Deskripsi Berita</label>
                        <textarea type="text" name="beritadescription" id="beritadescription"></textarea>
                    </div>

                    <div class="berita-time ipt">
                        <label for="beritatime">Batas Waktu Berita</label>
                        <input type="date" name="beritatime" id="beritatime">
                    </div>

                    <button type="submit" class="button-post-berita" style="margin-top: 0.5rem">Post Berita</button>

                </form>
            </div>

        @else
        @endif
    @endauth
@endsection
