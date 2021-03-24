@extends('movie.base')

@section('index-content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Cover</th>

      </tr>
    </thead>
    <tbody>
        @foreach ( $movie as $film )
        <tr>
            <th scope="row">{{$film->id}}</th>
            <td>{{$film->title}}</td>
            <td><img src="{{$film->cover}}" alt=""></td>

          </tr>
        @endforeach


    </tbody>
  </table>
@endsection
