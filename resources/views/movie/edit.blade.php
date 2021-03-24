@extends('movie.base')

@section('edit-content')
    @include('movie.form', ['edit' => true])
@endsection
