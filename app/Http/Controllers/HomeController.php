<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// utilizzo il model includendolo nel controller
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        // assegno una variabile alla classe MOVIE così da poter leggere l'intero database
        $movies = Movie::all();
        // passo i dati al $data così che siano letti poi nella pagina home

        $data = [

            'movies' => $movies
        ];
        return view('home', $data);
    }
}
