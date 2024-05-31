<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Genre;

class MainController extends Controller
{
    public function index(){
      return view('welcome', [
        'title' => 'Movies',
        'genres' => Genre::all(),
        'movies' => Movie::get()->take(10)
      ]);
    }
    
    public function single(string $id){
      $movie = Movie::findOrFail($id);
      return view('detail', [
        'title' => 'Movie detail',
        'movie' => $movie
      ]);
    }
    
    public function search(Request $request)
    {
        $search = $request->input('search');
        $results = Movie::where('title', 'like', "%$search%")->get();
    
        return view('welcome', [
          'movies' => $results,
          'genres' => Genre::all(),
        ]);
    }

    public function genre(string $slug){
      return view('genreMovie', [
        'title' => 'Movie genre',
        'genres' => Genre::where('name', 'like', $slug)->get()
      ]);
    }
}
