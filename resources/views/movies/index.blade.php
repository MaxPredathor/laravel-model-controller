@extends('layouts.app')

@section('title', 'Index')

@section('content')
<main>
    <h1>Index</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
            <div class="col-4">
                <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                <h2>{{ $movie->title }}</h2>
                <a class="btn btn-primary" href="{{ route('movies.show', $movie->id) }}">Details</a>
            </div>
             @endforeach
        </div>
    </div>
</main>
@endsection
