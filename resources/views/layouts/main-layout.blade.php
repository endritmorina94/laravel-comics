<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            @yield('title_tag')
        </title>

        <link rel="stylesheet" href="{{ asset("css/app.css")}}">
    </head>
    <body>

        {{-- Includo il file header dalla cartella partials --}}
        @include('partials.header')

        <main>
            {{-- Questo è il segnalibro che indica dove verrà inserito
            il contenuto della section main_content --}}
            @yield('main_section')
        </main>

        {{-- Includo il file footer dalla cartella partials --}}
        @include('partials.footer')

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
