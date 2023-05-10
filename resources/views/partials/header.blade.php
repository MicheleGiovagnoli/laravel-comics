<header>
    <header>
        <nav>
            <!-- Logo Brand -->
            <div class="brand">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="Dc Logo">
            </div>

            <!-- Links -->
            <ul class="navbar">
                @foreach($navLinks as $link)
                <li>
                    <a class="link" href="{{$link}}">{{$link}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </header>
</header>

