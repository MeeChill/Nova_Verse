@extends('layouts.app')
<div class="sidebar">
    <div class="logo">
        <h2>ReviewTracker</h2>
    </div>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('movies.index') }}"></i> Movies</a></li>
        <li><a href="{{ route('comics.index') }}" class="active"></i> Comics</a></li>
        <li><a href="{{ route('novels.index') }}"></i> Novels</a></li>
        <li><a href="#">Cartoons</a></li>
        <li><a href="#">Reports</a></li>
    </ul>
</div>

<div class="main-content">
@section('content')
<h1>Edit Comic</h1>
<a class="btn" href="{{ route("comics.index") }}">Back To Dashboard</a>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('comics.update', $comic->id) }}" method="POST"  enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $comic->title }}" required>
    </div>

    <div class="form-group">
        <label for="poster">Poster (Image)</label>
        <input type="file" name="poster" id="poster" accept="image/*">
        @if($comic->poster)
            <p>Current poster:</p>
            <img src="{{ asset('storage/' . $comic->poster) }}" alt="comic Poster" style="max-width: 200px;">
        @endif
    </div>


    <div class="form-group">
        <label for="author">Author</label>
        <input type="text" name="author" class="form-control" value="{{ $comic->author }}" required>
    </div>

    <div class="form-group">
        <label for="publisher">Publisher</label>
        <input type="text" name="publisher" class="form-control" value="{{ $comic->publisher }}" required>
    </div>

    <div class="form-group">
        <label for="release_date">Release Date</label>
        <input type="date" name="release_date" class="form-control" value="{{ $comic->release_date }}" required>
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" class="form-control" value="{{ $comic->genre }}" required>
    </div>

    <div class="form-group">
        <label for="number_of_pages">Number of Pages</label>
        <input type="number" name="number_of_pages" class="form-control" value="{{ $comic->number_of_pages }}">
    </div>

    <div class="form-group">
        <label for="synopsis">Synopsis</label>
        <textarea name="synopsis" class="form-control" required>{{ $comic->synopsis }}</textarea>
    </div>

    <div class="form-group">
        <label for="main_characters">Main Characters</label>
        <input type="text" name="main_characters" class="form-control" value="{{ $comic->main_characters }}" required>
    </div>

    <button type="submit" class="btn btn-primary">Update Comic</button>
</form>
</div>
@endsection
