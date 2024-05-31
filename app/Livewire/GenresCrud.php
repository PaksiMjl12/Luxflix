<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use App\Models\Genre;
use App\Models\Movie;

class GenresCrud extends Component
{  
    use WithFileUploads;
    public $isOpen = false;
    public $name;
    public $image;
    
    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }
    
    public function createGenre()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $slug = Str::slug($this->name);

        Genre::create([
            'name' => $this->name,
            'slug' => $slug,
            'image' => $this->image->store('images/genres', 'public'),
        ]);

        session()->flash('message', 'Genre created successfully.');

        $this->closeModal();
    }
    
    public function deleteGenre($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();
        session()->flash('message', 'Movie successfully deleted.');
    }
    
    public function render()
    {
        return view('livewire.genres-crud', [
          'genres' => Genre::all(),
          'movies' => Movie::all()
        ]);
    }
}
