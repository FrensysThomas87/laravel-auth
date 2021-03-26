@extends('movie.base')

@section('index-content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Cover</th>
        <th scope="col">Actions</th>

      </tr>
    </thead>
    <tbody>
        @foreach ( $movie as $film )
        <tr>
            <th scope="row">{{$film->id}}</th>
            <td><a href="{{route('movie.create')}}">{{$film->title}}</a></td>
            <td><img src="{{$film->cover}}" alt=""></td>

            @if(Auth::check())
            <td>
                <a href="{{route('movie.edit', ['movie' => $film])}}">
                    <button class="btn btn-primary">
                        <i class="fas fa-edit"></i>
                    </button>
                </a>


                    <button type="button" class="btn btn-danger bool-btn-destroy-index" data-toggle="modal" data-target="#exampleModalCenter{{$film->id}}">
                        <i class="fas fa-trash-alt"></i>
                            Elimina Film
                    </button>
                    @include('movie.modal')


            </td>



        </tr>
        @endif
        @endforeach


    </tbody>

  </table>


@endsection
