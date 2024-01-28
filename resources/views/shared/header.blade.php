<header>
    <div class="container d-flex justify-content-between">
        <div class="logo">
            <a href="/">
                <img src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="logo">
            </a>
        </div>
        <nav>
            <ul class="list-unstyled d-flex">
                @foreach ($navItems as $navItem)
                    @if ($navItem['name'] === 'comics')
                        <li><a href="{{ $navItem['url'] }}">{{ $navItem['name'] }}</a></li>
                    @else
                        <li>{{ $navItem['name'] }}</li>
                    @endif
                @endforeach
            </ul>
        </nav>
    </div>
</header>
