@extends('template.main')

@section('container')
  
    @include('fragments.header')
    
    <main>
  
        <!--
          - #BANNER SECTION
        -->
        
        <section class="banner">
          <div class="banner-card">
  
            <img src="images/John-Wick-3.jpg" class="banner-img" alt="">
  
            <div class="card-content">
              <div class="card-info">
  
                <div class="genre">
                  <ion-icon name="film"></ion-icon>
                  <span>Action/Thriller</span>
                </div>
  
                <div class="year">
                  <ion-icon name="calendar"></ion-icon>
                  <span>2019</span>
                </div>
  
                <div class="duration">
                  <ion-icon name="time"></ion-icon>
                  <span>2h 11m</span>
                </div>
  
                <div class="quality">4K</div>
  
              </div>
  
              <h2 class="card-title">John Wick: Chapter 3 - Parabellum</h2>
            </div>
  
          </div>
        </section>
        <!--
          - #MOVIES SECTION
        -->
        <section class="movies">
          <!--
            - movies grid
          -->
  
          <div class="movies-grid">
            @foreach($movies as $movie)
              @include('fragments.card')
            @endforeach
          </div>

  
        </section>
        
        <!--
          - #CATEGORY SECTION
        -->
        <section class="category" id="category">
  
          <h2 class="section-heading">Genre</h2>
  
          <div class="category-grid">
            @foreach($genres as $genre)
              <a href="/genre/{{$genre->slug}}" class="category-card">
                <img src="{{ asset('/storage/' . $genre->image) }}" alt="" class="card-img">
                <div class="name">{{$genre->name}}</div>
                <div class="total">{{$genre->movies->count()}}</div>
              </a>
            @endforeach
          </div>
  
        </section>
  
      </main>
  
    @include('fragments.footer')
@endsection