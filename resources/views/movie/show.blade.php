@extends('movie.base')

@section('show-content')

<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$movie->cover}}" alt="Card image cap">
    <div class="card-body">
      <p class="card-text">{{$movie->title}}</p>
    </div>
  </div>

@endsection
