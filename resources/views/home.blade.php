@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>Home Page</h1>
    <a href="{{ route('movies.index') }}" class="btn btn-primary">Movies</a>
</main>

@endsection
