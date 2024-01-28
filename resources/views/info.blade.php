@extends('layouts.app')

@section('content')
<div class="container">     
    <img src="{{ $comics[5]['thumb'] }}" alt="{{$comics[0]['series']}}">
    <h2>{{$comics[5]['title']}}</h2>
    <h5>{{$comics[5]['price']}}</h5>
    <p>{{$comics[5]['description']}}</p>
</div>
@endsection