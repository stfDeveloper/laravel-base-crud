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
</table>

@endsection

