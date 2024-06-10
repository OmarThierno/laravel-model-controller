@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1>Movie</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-5 g-3">
            @foreach ($movieList as $movie)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->original_title }}</p>
                            {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
