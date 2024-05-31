@extends('template.main')

@section('container')
  
    @include('fragments.header')
    <main>
        <section class="movies banner">
  
          <div class="movies-grid">
            @foreach ($genres as $genre)
              @foreach ($genre->movies as $movie)
                     @include('fragments.card')
              @endforeach
            @endforeach
          </div>
  
        </section>
  
      </main>
  
    @include('fragments.footer')
@endsection