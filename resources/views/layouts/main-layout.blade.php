<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title_tag')
    </title>

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@300;400;500;600&display=swap" rel="stylesheet">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    {{-- Foglio CSS --}}
    <link rel="stylesheet" href="{{ asset("css/app.css")}}">
</head>

<body>

    {{-- Includo il file header dalla cartella partials --}}
    @include('partials.header')

    <main class="@yield('main_class')">
        {{-- Questo è il segnalibro che indica dove verrà inserito
            il contenuto della section main_content --}}
        @yield('main_section')
    </main>

    {{-- Includo il file footer dalla cartella partials --}}
    @include('partials.footer')

    {{-- Foglio JS --}}
    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>
