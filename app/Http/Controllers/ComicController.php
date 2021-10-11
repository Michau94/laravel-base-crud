<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }

    public function show($id)
    {
        $id = $id + 1;
        $comic = Comic::find($id);
        return view('comic', compact('comic'));
    }
}
