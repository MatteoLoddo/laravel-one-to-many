@extends('layouts.admin')
@section('page_title', 'Mostra tema ' . $theme->id )
@section('page_content')
<div class="container">
  <img src="{{$theme->image_url}}" alt="">
</div>

<h3>{{$theme->title}}</h3>
<span>{{$theme->updating_date}}</span>
<p>{{$theme->description}}</p>
    <form action="{{route('admin.themes.destroy', $theme->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-danger">Cancella</button>
    </form>
@endsection