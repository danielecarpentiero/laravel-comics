<footer>
    <div class="upper-footer">
        <div class="container">
            <nav>
                @foreach ($items as $item)
                    <div class="menu">
                        <ul>
                            <h3>{{ $item['sectionName'] }}</h3>
                            @foreach ($item['content'] as $menuItem)
                                <li>
                                    <a href="{{ $menuItem['link'] }}" target="{{ $menuItem['target'] }}">{{ $menuItem['text'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </nav>
        </div>
    </div>
    <div class="lower-footer">
        <div class="container d-flex justify-content-between">
            <button>SIGN UP NOW!!</button>
            <nav>
                <ul class="d-flex">
                    @foreach ($socials as $social)
                        <li class="list unstyled">
                            <img src="{{ $social['icon'] }}" alt="" srcset="">
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</footer>
