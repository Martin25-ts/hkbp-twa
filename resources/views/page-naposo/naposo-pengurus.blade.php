@extends('page-naposo.naposo-main')

@section('title', 'Naposo - Pengurus')
@section('pengurus', 'active')

@push('style-content')
    <link rel="stylesheet" href="{{ asset('css/naposo/profile-card.css') }}">
    <link rel="stylesheet" href="{{ asset('css/naposo/naposo-pengurus.css') }}">
@endpush


@section('content')
    <main style="margin-top: 3rem">
        <section class="pengurus">
            <div class="title-deck">
                <h1>Pengurus Naposo</h1>
            </div>

            <div class="ketua-wakil-profile deck">
                <div class="profile-deck">
                    @foreach ($pengurus as $pr)
                        @if ($pr->positionid >= 'PS010' && $pr->positionid <= 'PS011')
                            <div class="card-profile">
                                <div class="imgbox">
                                    <div class="profile-img">
                                        @if ($pr->jemaatimg === NULL)
                                        <img src="https://i1.sndcdn.com/avatars-000225974941-3icznp-t500x500.jpg" alt="">
                                        @else
                                            <img src="{{ asset($pr->jemaatimg) }}" alt="">
                                        @endif

                                    </div>
                                </div>
                                <div class="profile-details">
                                    <h2 class="title">{{ $pr->jemaatfname }} {{ $pr->jemaatlname }}</h2>
                                    <span class="caption">{{ $pr->position->position }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            <div class="sekretaris-bendahara deck">
                <div class="profile-deck">
                    @foreach ($pengurus as $pr)
                        @if ($pr->positionid >= 'PS012' && $pr->positionid <= 'PS013')
                            <div class="card-profile">
                                <div class="imgbox">
                                    <div class="profile-img">
                                        @if ($pr->jemaatimg === NULL)
                                            <img src="https://i1.sndcdn.com/avatars-000225974941-3icznp-t500x500.jpg" alt="">
                                        @else
                                            <img src="{{ asset($pr->jemaatimg) }}" alt="">
                                        @endif

                                    </div>
                                </div>
                                <div class="profile-details">
                                    <h2 class="title">{{ $pr->jemaatfname }} {{ $pr->jemaatlname }}</h2>
                                    <span class="caption">{{ $pr->position->position }}</span>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
    </main>
@endsection




@push('script-content')
    <script>
        var getnaposoPengurus = @json($pengurus);
        console.log(getnaposoPengurus);
    </script>
@endpush
