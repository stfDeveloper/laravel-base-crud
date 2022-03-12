@extends('layout.home')

@section('content')
<div class="container">
    <h1>modifica</h1>
    <form action="{{route("comics.update" ,$comic->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">title</label>
            <input type="text" class="form-control" name="title" id="" placeholder="inserisci il nuovo titolo" value="{{$comic->title}}">
        </div> 
        <div class="form-group">
            <label for="description">description</label>
            <input type="text" class="form-control" name="description" id="" placeholder="inserisci la nuova descrizione" value="{{$comic->description}}">
        </div>
        <div class="form-group">
            <label for="thumb">thumb</label>
            <input type="text" class="form-control" name="thumb" id="" placeholder="inserisci la nuova thumb" value="{{$comic->thumb}}">
        </div>
        <div class="form-group">
            <label for="price">price</label>
            <input type="text" class="form-control" name="price" id="" placeholder="inserisci il nuovo prezzo" value="{{$comic->price}}">
        </div>
        <div class="form-group">
            <label for="series">series</label>
            <input type="text" class="form-control" name="series" id="" placeholder="inserisci le nuove serie" value="{{$comic->series}}">
        </div>
        <div class="form-group">
            <label for="sale_date">sale_date</label>
            <input type="text" class="form-control" name="sale_date" id="" placeholder="inserisci il sale_date" value="{{$comic->sale_date}}">
        </div>
        <div class="form-group">
            <label for="type">type</label>
            <input type="text" class="form-control" name="type" id="" placeholder="inserisci il tipo" value="{{$comic->type}}">
        </div>
        <button type="submit">salva</button>
    </form>
</div>
    
@endsection