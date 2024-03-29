<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// Importo la classe Movie
use App\Models\Movie;

class HomeController extends Controller
{
    //
    public function __invoke()
    {
        // Restituisce tutte le istanze della tabella movies
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
