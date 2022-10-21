@extends('layouts.app')

@section('content')
<div class="card my-4">
    <img class="card-image-top" src="{{ $cast->image }}" width="200">
    <div class="card-body">
        <h1>{{ $cast->name }}</h1>
        <p>All Movies of {{ $cast->name }}</p>
        <ul class="list-group list-group-flush">
            @if (count($cast->movies))
                @foreach ($cast->movies as $movie)
                <li class="list-group-item">
                    <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary mt-2 float-right">{{ $movie->title }}</a>
                </li>
                @endforeach
            @endif
        </ul>
    </div>
    <div class="card-footer">
        <form action="{{ route('casts.destroy', $cast->id) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger mt-2 float-right">Delete</button>
        </form>
    </div>
</div>
@endsection