@extends('layouts.main-layout')

@section('page_title', $serie_details["title"])

@section('main_class', "single-serie-details")


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

    {{-- Inizio Info Bottom Section --}}
    <section class="info-bottom">
        <div class="container">
            {{-- Inizio Talent Info --}}
            <div class="talents-info">
                <h3>Talent</h3>
                <div class="artists-container">
                    <span>Art by:</span>
                    <div class="artists">
                        @foreach ($serie_details["artists"] as $artist)
                            <a href="#">{{ $artist }}</a>{{!$loop->last ? "," : ""}}
                        @endforeach
                    </div>
                </div>
                <div class="writers-container">
                    <span>Written by:</span>

                    <div class="artists">
                        @foreach ($serie_details["writers"] as $writer)
                            <a href="#">{{$writer}}</a>{{!$loop->last ? "," : ""}}
                        @endforeach
                    </div>
                </div>
            </div>
            {{-- Fine Talent Info --}}

            {{-- Inizio Specs Info --}}
            <div class="specs-info">
                <h3>Specs</h3>
                <div class="serie-series-name">
                    <span>Series:</span>
                    <a href="#">
                        {{ $serie_details["series"] }}
                    </a>
                </div>
                <div class="serie-price">
                    <span>U.S. Price:</span>
                    <span class="price">
                        {{ $serie_details["price"] }}
                    </span>
                </div>
                <div class="serie-osd">
                    <span>On Sale Date:</span>
                    <span class="date">
                        {{ $serie_details["sale_date"] }}
                    </span>
                </div>
            </div>
            {{-- Fine Specs Info --}}
        </div>

        {{-- Inizio Banner Bottom --}}
        <div class="large-container">
            <div class="container">
                <ul class="bottom-banner">
                    @foreach ($img_links as $element)
                        <li>
                            <div class="single-banner">
                                <a href="#">{{$element["title"]}}</a>
                                <img src="{{ asset($element["url"]) }}" alt="Buy Link">
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- Fine Banner Bottom --}}
    </section>
    {{-- Fine Info Bottom Section --}}

@endsection
