@extends('layouts.app')

@section('content')
    <div class="my-4 col-12 col-sm-1 col-md-5 mb-8">
        <form action="" method="get">   
            <div class="input-group mb-3">
                <input type="text" class="form-control"  placeholder="nyari apa hayo..." name="nyari apa hayo...">
                <button class="input-group-text btn btn-dark" >Search</button>
            </div>
        </form>
    </div>
    <h1>All Movies <br>
        @auth
        <a href="{{ 'movies/create' }}" class="btn btn-primary btn-sm">Create New Movies</i></a> 
        @endauth
    </h1>
    @unless (count($movies))
    <p>No movies</p>
    @endunless

    <div class="row">
        @if (count($movies))             
    @foreach ($movies as $movie)
    <div class="col-md-4">
        <div class="card">
            <img src="{{ $movie->image }}" class="card-image-top">
            <div class="card-body">
                <div class="text-danger">
                <h3><a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary btn-sm">{{ $movie->title }}</a></h3>
                @for ($i = 1; $i <= $movie->rating_star; $i++)
                <i class="fas fa-star"></i>
                @endfor                  
                </div>
               
                <p>{{ Str::limit($movie->description, 100) }}</p>
            </div>
        </div>
    </div>
    @endforeach
    @endif  
</div>
@endsection