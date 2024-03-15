


<header >
    <div class="container d-flex justify-content-center">

        <img src="." alt="">
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
        </ul>
    </div>
</header>