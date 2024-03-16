


<header >
    <div class="top-bar d-flex align-items-center">
    <div class="container d-flex justify-content-end align-items-center">

        <p class="mx-2">DC POWER VISA </p>
        <p class="mx-2">ADDITIONAL DC SITE </p>
    </div>

    </div>
    <div class="container d-flex justify-content-center align-items-center ">

        <img class="DC-logo py-2" src="{{ url('/images/dc-logo.png')}}" alt="">
        <ul>
            <li>
            {{-- classe blade per fare la condizione --}}
                <a @class([
                   "active" => Route:: currentRouteName() == 'home'
                ])
                href="{{ route('home') }}"
                >Homepage</a>
            </li>
            <li>
                <a @if (Route:: currentRouteName() == 'characters') class="active" @endif  href="{{ route('characters') }}">Characters</a>
            </li>
            <li>
                <a @if (Route:: currentRouteName() == 'comics') class="active" @endif  href="{{ route('comics') }}">Comics</a>
            </li>
            <li>
                <a @if (Route:: currentRouteName() == 'movies') class="active" @endif  href="{{ route('movies') }}">Movies</a>
            </li>
            <li>
                <a @if (Route:: currentRouteName() == 'tv') class="active" @endif  href="{{ route('tv') }}">Tv</a>
            </li>
             <li>
                <a @if (Route:: currentRouteName() == 'collectibles') class="active" @endif  href="{{ route('collectibles') }}">Collectibles</a>
            </li>
              <li>
                <a @if (Route:: currentRouteName() == 'videos') class="active" @endif  href="{{ route('videos') }}">Videos</a>
            </li>
        </ul>
    </div>

    <div class="jumbotron-logo">
        <img class="jumbotron-logo-img" src="{{ url('/images/jumbotron.jpg')}}" alt="">

    </div>

</header>