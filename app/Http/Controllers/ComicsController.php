<?php

namespace App\Http\Controllers;

use App\Comic;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required|string|max:200|unique:comics",
            "description"=>"required|string|max:2000",
            "thumb"=>"nullable|url",
            "price"=>"required|string|max:50",
            "series"=>"required|string|max:100",
            "sale_date"=>"required|string|max:20",
            "type"=>"required|string|max:50",
        ]);
        $data = $request->all();
        // $comic = new Comic();
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->thumb = $data["thumb"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];
        // $comic->save();
        $comic = Comic::create($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            "title"=>"required|string|max:200|unique:comics,title,{$comic->id}",
            "description"=>"required|string|max:2000",
            "thumb"=>"nullable|url",
            "price"=>"required|string|max:50",
            "series"=>"required|string|max:100",
            "sale_date"=>"required|string|max:20",
            "type"=>"required|string|max:50",
        ]);
        $data = $request->all();
        // $comic = new Comic();
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->thumb = $data["thumb"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // $comic->type = $data["type"];

        // $comic->save();
        $comic->update($data);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
