<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Client\Request;
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
        return view("guest.show", compact("comic"));
    }

    public function create()
    {

        return view("admin.create");
    }

    public function store(HttpRequest $request)
    {
        $data = $request->all();

        $new_comic = new Comic();

        $new_comic->title = $data["title"];
        $new_comic->description = $data["description"];
        $new_comic->thumb = $data["thumb"];
        $new_comic->price = $data["price"];
        $new_comic->series = $data["series"];

        $new_comic->save();

        return redirect()->route("comic", $new_comic->id);
    }
}
