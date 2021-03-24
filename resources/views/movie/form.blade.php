
@php

if (isset($edit) && !empty($edit)){

    $method = 'PUT';
    $action = route('movie.update' , compact('movie'));
}else{

    $method = 'POST';
    $action = route('movie.store');
}



@endphp


<form action="{{$action}}" method="post">

    @csrf
    @method($method)

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' : ''}}" placeholder="Title" value="{{isset($movie) ? $movie->title : ''}}"
      name="title">

    </div>
    <div class="form-group">
      <label for="cover">Insert Cover's Url</label>
      <input type="text" class="form-control {{$errors->has('cover') ? 'is-invalid' : ''}}"  placeholder="Cover's Url" value="{{isset($movie) ? $movie->cover : ''}}"
      name="cover">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
