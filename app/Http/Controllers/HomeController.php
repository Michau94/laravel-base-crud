<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class HomeController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        $cards = config('bonus_Card');
        return view('comics.index', ['comics' => $comics, 'cards' => $cards]);
    }
}
