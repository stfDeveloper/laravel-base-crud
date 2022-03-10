@extends('layout.home')
@section('title','ComicsList')
@section('content')
<div class="container">
    <h1>
        Crea
    </h1>
    <form action="{{route("comics.store")}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">title</label>
        <input type="text" class="form-control" name="title" id="" placeholder="inserisci il nuovo titolo">
    </div> 

    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" name="description" id="" placeholder="inserisci il nuovo titolo">
    </div>

    <div class="form-group">
        <label for="thumb">thumb</label>
        <input type="text" class="form-control" name="thumb" id="" placeholder="inserisci il nuovo titolo">
    </div>

    <div class="form-group">
        <label for="price">price</label>
        <input type="text" class="form-control" name="price" id="" placeholder="inserisci il nuovo titolo">
    </div>

    <div class="form-group">
        <label for="series">series</label>
        <input type="text" class="form-control" name="series" id="" placeholder="inserisci il nuovo titolo">
    </div>

    <div class="form-group">
        <label for="sale_date">sale_date</label>
        <input type="text" class="form-control" name="sale_date" id="" placeholder="inserisci il nuovo titolo">
    </div>

    <div class="form-group">
        <label for="type">type</label>
        <input type="text" class="form-control" name="type" id="" placeholder="inserisci il nuovo titolo">
    </div>
    <button type="submit">Aggiungi</button>
    </form>
</div>
    
@endsection
    



