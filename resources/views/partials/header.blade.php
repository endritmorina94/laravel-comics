<header>

    <div class="top-bar">
        <div class="container">
            <span>
                DC POWER&trade; VISA&reg;
            </span>

            <span>
                ADDITIONAL DC SITES <i class="fas fa-caret-down"></i>
            </span>
        </div>
    </div>

    <nav>
        <div class="container">
            <a href="{{ route("home") }}">
                <div class="logo-container">
                    <img src="{{ asset("img/dc-logo.png") }}" alt="DC Logo">
                </div>
            </a>

            <ul class="menu">
                {{-- Toggliamo la classe tramite il seguente ternario.
                IN QUESTO CASO: Se è il nome della route corrisponde a characters verrà applicata la classe active--}}
                <li class="{{ Request::route()->getName() == 'characters' ? 'active' : '' }}">
                    <a href="{{ route("characters") }}">Characters</a>
                </li>
                <li class="{{ Request::route()->getName() == 'home' || Request::route()->getName() == 'serie-details' ? 'active' : '' }}">
                    <a href="{{ route("home") }}">Comics</a>
                </li>
                <li class="{{ Request::route()->getName() == 'movies' ? 'active' : '' }}">
                    <a href="{{ route("movies") }}">Movies</a>
                </li>
                <li>
                    <a href="#">Tv</a>
                </li>
                <li>
                    <a href="#">Games</a>
                </li>
                <li>
                    <a href="#">Collectibles</a>
                </li>
                <li>
                    <a href="#">Videos</a>
                </li>
                <li>
                    <a href="#">Fans</a>
                </li>
                <li>
                    <a href="#">News</a>
                </li>
                <li>
                    <a href="#">
                        Shop
                    <i class="fas fa-caret-down"></i>
                </a>
                </li>
            </ul>

            <div class="input-container">
                <input type="text" name="" value="" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </nav>

    <div class="banner"></div>

</header>
