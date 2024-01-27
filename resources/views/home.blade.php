@extends ('layouts.app')

@section('content')
    <div class="container">
        <ul class="list-unstyled d-flex flex-wrap">
            @foreach ($comics as $comic)
                <li class="col-md-2 mb-2 pe-3">
                    <a href="/info">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="img-fluid square-image ">
                    </a>
                    <h4> {{ $comic['series']}}</h4>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
