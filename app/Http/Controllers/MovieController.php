<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index', [
          'title' => 'Dashboard admin',
          'movies' => Movie::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        dd($request);
        $request->validate([
          'title' => 'required',
          'synopsis' => 'required',
          'year' => 'required|numeric',
          'duration' => 'required|numeric',
          'genre_id' => 'required',
          'score' => 'required|numeric|min:1|max:10',
          'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
  
        Movie::create($request->all());
   
        return redirect()->route('products.index')->with('success','Movie
        berhasil ditambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        //
    }
}
