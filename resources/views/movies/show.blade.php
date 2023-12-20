@extends('layouts.app')

@section('title', 'Index')

@section('content')
<main>
    <h1>Index</h1>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                <h2>Title: {{ $movie->title }}</h2>
                <h4>Original title: {{ $movie->original_title }}</h4>
                <p>Language: {{ $movie->language }}</p>
                <p>Vote: {{ $movie->vote }}</p>
            </div>
        </div>
    </div>
</main>
@endsection
