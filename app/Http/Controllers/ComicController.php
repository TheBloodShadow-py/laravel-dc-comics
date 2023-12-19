<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request as HttpRequest;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view("guest.index", compact("comics"));
    }

    public function show(Comic $comic)
    {

        $comics_number = Comic::count();
        return view("guest.show", compact("comic", "comics_number"));
    }



    public function create()
    {

        return view("admin.create");
    }

    public function store(HttpRequest $request)
    {
        $data = $request->all();

        // Comic::create([

        // ]);

        $new_comic = new Comic();
        $new_comic->title = $data["title"];
        $new_comic->description = $data["description"];
        $new_comic->thumb = $data["thumb"];
        $new_comic->price = $data["price"];
        $new_comic->series = $data["series"];

        $new_comic->save();

        return redirect()->route("comic", $new_comic->id);
    }

    public function edit(Comic $comic)
    {
        return view("admin.edit", compact("comic"));
    }

    public function update(HttpRequest $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);



        return redirect()->route("comic", $comic->id);
    }

    public function delete(Comic $comic)
    {
        $comic->delete();
        return redirect()->route("home");
    }
}
