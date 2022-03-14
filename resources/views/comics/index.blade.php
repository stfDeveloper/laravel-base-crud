@extends('layout.home')

@section('title', 'ComicsList')
@section('content')

<a href="{{route("comics.create")}}"><button>nuovo</button></a>
<table class="ComicsSection">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col"thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
            <th scope="row"> {{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td><a href="{{route("comics.show", $comic->id)}}"><button type="button">vedi</button></a>
                <a href="{{route("comics.edit", $comic->id)}}"><button type="button">edit</button></a>
                <form action="{{route("comics.destroy", $comic->id)}}" onsubmit="return confirm('cancellare?')" method="POST" >
                    @csrf
                    @method("DELETE")
                    <button type="submit">delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection

