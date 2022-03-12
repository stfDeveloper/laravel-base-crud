@extends('layout.home')
@section('title','ComicsList')
@section('content')
<div class="container">
    <h1>{{$comic->title}}</h1>
    <p>{{$comic->description}}</p>
    <img src="{{$comic->thumb}}" alt="">
</div>
<form action="{{route("comics.destroy", $comic->id)}}"onsubmit="return confirm ('cancellare?') "method="POST" >
    @csrf
    @method("DELETE")
    <td><button type="submit">delete</button></td>
</form>
<a href="{{route("comics.index")}}"><button type="button">back</button></a>
@endsection