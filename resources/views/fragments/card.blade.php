<a href="/movie/{{ $movie->id }}" class="movie-card">

    <div class="card-head">
        <img src="{{ asset('storage/' . $movie->image) }}" alt="" class="card-img">

        <div class="card-overlay">

            <div class="bookmark">
                <ion-icon name="bookmark-outline"></ion-icon>
            </div>

            <div class="rating">
                <ion-icon name="star-outline"></ion-icon>
                <span>{{ $movie->score }}</span>
            </div>

            <div class="play">
                <ion-icon name="play-circle-outline"></ion-icon>
            </div>

        </div>
    </div>

    <div class="card-body">
        <h3 class="card-title">{{ $movie->title }}</h3>

        <div class="card-info">
            <span class="genre">{{ $movie->genre->name }}</span>
            <span class="year">{{ $movie->year }}</span>
        </div>
    </div>

</a>
