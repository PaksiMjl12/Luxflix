<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
             'name' => 'Paksi mijil kanaeru',
             'username' => 'paksi',
             'email' => 'paksi@gmail.com',
             'password' => bcrypt('luxflix123'),
             'is_admin' => true
        ]);
        Genre::create([
            'name' => 'action',
            'slug' => 'action',
            'image' => 'images/genres/action.jpg'
        ]);
        
        Genre::create([
            'name' => 'comedy',
            'slug' => 'comedy',
            'image' => 'images/genres/comedy.jpg'
        ]);
        
        Genre::create([
            'name' => 'thriller',
            'slug' => 'thriller',
            'image' => 'images/genres/thriller.webp'
        ]);
        
        Genre::create([
            'name' => 'horror',
            'slug' => 'horror',
            'image' => 'images/genres/horror.jpg'
        ]);
        
        Genre::create([
            'name' => 'adventure',
            'slug' => 'adventure',
            'image' => 'images/genres/adventure.jpg'
        ]);
        
        Genre::create([
            'name' => 'animated',
            'slug' => 'animated',
            'image' => 'images/genres/animated.jpg'
        ]);
        
        Genre::create([
            'name' => 'psychological',
            'slug' => 'psychological',
            'image' => 'images/genres/pyschologic.jpg'
        ]);
        
        Genre::create([
            'name' => 'sci-fi',
            'slug' => 'sci-fi',
            'image' => 'images/genres/sci-fi.jpg'
        ]);
        
        Movie::create([
          'title' => 'red notice',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2021,
          'duration' => 150,
          'genre_id' => 1,
          'score' => 6.4,
          'image' => 'images/movies/red-notice.jpg'
        ]);
        Movie::create([
          'title' => 'Spider-Man: Homecoming',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2017,
          'duration' => 150,
          'genre_id' => 1,
          'score' => 8.2,
          'image' => 'images/movies/spider-men.jpg'
        ]);
        Movie::create([
          'title' => 'The Matrix Resurrections',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2021,
          'duration' => 150,
          'genre_id' => 8,
          'score' => 7.4,
          'image' => 'images/movies/matrix.jpg'
        ]);
        Movie::create([
          'title' => 'Eternals',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2021,
          'duration' => 150,
          'genre_id' => 5,
          'score' => 8.2,
          'image' => 'images/movies/eternals.jpg'
        ]);
        Movie::create([
          'title' => 'Dune',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2021,
          'duration' => 150,
          'genre_id' => 8,
          'score' => 7.2,
          'image' => 'images/movies/dune.jpg'
        ]);
        Movie::create([
          'title' => '1917',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2019,
          'duration' => 150,
          'genre_id' => 1,
          'score' => 8.2,
          'image' => 'images/movies/1917.jpg'
        ]);
        
        Movie::create([
          'title' => 'The Dark Knight',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2008,
          'duration' => 160,
          'genre_id' => 1,
          'score' => 8.2,
          'image' => 'images/movies/dark-knight.jpg'
        ]);
        Movie::create([
          'title' => 'Black Panther',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2018,
          'duration' => 150,
          'genre_id' => 1,
          'score' => 8.2,
          'image' => 'images/movies/panther.jpg'
        ]);
        Movie::create([
          'title' => 'Venom',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2018,
          'duration' => 150,
          'genre_id' => 1,
          'score' => 8.2,
          'image' => 'images/movies/venom.jpg'
        ]);
        Movie::create([
          'title' => 'Interstellar',
          'synopsis' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
          'year' => 2014,
          'duration' => 150,
          'genre_id' => 8,
          'score' => 8.2,
          'image' => 'images/movies/interstaller.jpg'
        ]);
    }
}
