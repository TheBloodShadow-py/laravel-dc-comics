<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

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
}
