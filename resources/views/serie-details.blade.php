@extends('layouts.main-layout')

@section('tag_title')
    {{ $serie_details["title"] }}
@endsection

@section('main_class')
    single-serie-details
@endsection

@section('main_section')
    {{-- Inizio Top Banner --}}
    <div class="top-banner">
        <div class="container">
            <div class="poster-frame">
                <div class="serie-type">
                    {{ $serie_details["type"] }}
                </div>
                <div class="poster-container">
                    <img src="{{ $serie_details["thumb"] }}" alt="{{ $serie_details["title"] }}">
                </div>
                <div class="view-gallery">
                    <a href="#">View Gallery</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Fine Top Banner --}}

    {{-- Inizio Info Top Section --}}
    <section class="info-top">
        <div class="container">
            <div class="general-info">
                {{-- Titolo --}}
                <h1>{{ $serie_details["title"] }}</h1>
                {{-- Call to Action/Controllo disponibilità --}}
                <div class="availability">
                    <div class="price">
                        <span>U.S. Price:</span> {{ $serie_details["price"] }}
                        <span class="result">AVAILABLE</span>
                    </div>
                    <div class="check-available">
                        <span>Check Availability <i class="fas fa-caret-down"></i></span>
                    </div>
                </div>
                {{-- Descrizione --}}
                <p>
                    {{ $serie_details["description"] }}
                </p>
            </div>

            <div class="adv-banner">
                <span>ADVERTISEMENT</span>
                <img src="{{ asset("img/adv.jpg")}}" alt="adv">
            </div>
        </div>
    </section>
    {{-- Fine Info Top Section --}}

@endsection
