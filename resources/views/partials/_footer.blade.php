<footer>
    <nav class="container d-flex justify-content-between h-100">
        <div class="wrap-image">
            <a href="{{ route('homepage') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </a>
        </div> 
        <ul class="d-flex gap-4 align-items-center">
            <li>
                <a href="{{ route('characters') }}">
                    CHARACTERS  
                </a>
            </li>
            <li>
                <a href="{{ route('comics') }}">
                    COMICS
                </a>
            </li>
            <li>
                <a href="{{ route('movies') }}">
                    Movies
                </a>
            </li>
            <li>
                <a href="{{ route('tv') }}">
                    TV
                </a>
            </li>
            <li>
                <a href="{{ route('games') }}">
                    GAMES
                </a>
            </li>
            <li>
                <a href="{{ route('collectors') }}">
                    COLLECTORS
                </a>
            </li>
     
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav>
</footer>