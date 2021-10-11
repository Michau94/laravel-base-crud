<header>

    <div class="header-top">

        <div class="container">
            <div>DC POWER&trade; VISA&reg;</div>
            <div>ADDITIONAL DC SITES<i class="fas fa-caret-down"></i></div>
        </div>


    </div>
    <div class="header-bottom">

        <div class="container">
            <figure>
                <a href="{{ url('/') }}"><img src={{ asset('images/dc-logo.png') }} alt="Logo" /></a>
            </figure>
            <nav>
                <ul>
                    @foreach ($links as $link)
                        <li><a href="{{ route($link['route']) }}"
                                class="{{ Request::route()->getName() == $link['route'] ? 'active' : ' ' }}">{{ $link['text'] }}</a>
                        </li>
                    @endforeach

                </ul>
            </nav>
            <input type="search" placeholder="Search">
        </div>
    </div>
</header>
