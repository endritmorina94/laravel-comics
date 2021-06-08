@extends('layouts.main-layout')

@section('tag_title')
    DC Comics
@endsection

@section('main_section')
    {{-- Inizio Sezion Series --}}
    <section class="series">

        <div class="container">
            {{-- Titolo del contenitore --}}
            <div class="title">
                <h1>Current Series</h1>
            </div>
            {{-- Fine Titolo del contenitore --}}

            {{-- Inizio Contenitore delle Serie --}}
            <div class="series-container">
                {{-- Inizio Singola Serie --}}
                @foreach ($series as $serie)
                    <div class="serie">
                        <img src="{{ $serie["thumb"] }}" alt="{{ $serie["title"] }}">

                        <div class="serie-name">
                            <p>
                                {{ $serie["series"] }}
                            </p>
                        </div>
                    </div>
                @endforeach
                {{-- Fine Singola Serie --}}
            </div>
            {{-- Fine Contenitore delle Serie --}}

            <a class="filled-btn" href="#">Load More</a>

        </div>
    </section>
    {{-- Fine Sezione Series --}}

    {{-- Inizio Bottom Banner --}}
    <section class="bottom-banner">
        <div class="container">
                <ul>
                    @foreach ($img_links as $img)
                        <li>
                            <img src="{{ asset($img["url"]) }}" alt="Buy Link">
                            <a href="#">{{$img["title"]}}</a>
                        </li>
                    @endforeach
                </ul>
        </div>
    </section>
    {{-- Fine Bottom Banner --}}

@endsection
