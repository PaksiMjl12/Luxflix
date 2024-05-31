<?php
namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Movie;
use App\Models\Genre;

class MoviesCrud extends Component
{
    use WithFileUploads;

    public $isOpen = false;
    public $image;
    public $title;
    public $synopsis;
    public $genre_id;
    public $year;
    public $duration;
    public $score;

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function createMovie()
    {
        $this->validate([
            'image' => 'image|max:2048',
            'title' => 'required|string|max:255',
            'synopsis' => 'required|string',
            'genre_id' => 'required|exists:genres,id',
            'year' => 'required|digits:4|integer|min:1900',
            'duration' => 'required|integer',
            'score' => 'required|numeric|min:0|max:10',
        ]);

        $imagePath = $this->image->store('images/movies', 'public');

        Movie::create([
            'image' => $imagePath,
            'title' => $this->title,
            'synopsis' => $this->synopsis,
            'genre_id' => $this->genre_id,
            'year' => $this->year,
            'duration' => $this->duration,
            'score' => $this->score,
        ]);

        session()->flash('message', 'Movie successfully added.');

        $this->reset();
        $this->closeModal();
    }

    public function deleteMovie($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        session()->flash('message', 'Movie successfully deleted.');
    }

    public function render()
    {
        return view('livewire.movies-crud', [
            'genres' => Genre::all(),
            'movies' => Movie::all()
        ]);
    }
}
