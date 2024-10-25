@extends('layouts.app')
<div class="sidebar">
    <div class="logo">
        <h2>ReviewTracker</h2>
    </div>
    <ul>
        <li><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('movies.index') }}" class="active"></i> Movies</a></li>
        <li><a href="{{ route('comics.index') }}"></i> Comics</a></li>
        <li><a href="{{ route('novels.index') }}"></i> Novels</a></li>
        <li><a href="#">Cartoons</a></li>
        <li><a href="#">Reports</a></li>
    </ul>
</div>

<div class="main-content">
@section('content')
<h1>Edit Movie</h1>
<a class="btn" href="{{ route("movies.index") }}">Back To Dashboard</a>

<form action="{{ route('movies.update', $movie->ID_Movie) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-grid-horizontal">
    <div class="form-group">
        <label for="title">Judul</label>
        <input type="text" name="title" id="title" required maxlength="50" value="{{ $movie->title }}">
    </div>
    <div class="form-group">
        <label for="director">Director</label>
        <input type="text" name="director" id="director" required maxlength="50" value="{{ $movie->director }}">
    </div>
    <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" required maxlength="50" value="{{ $movie->genre }}">
    </div>
    <div class="form-group">
        <label for="producer">Produser</label>
        <input type="text" name="producer" id="producer" required maxlength="50" value="{{ $movie->producer }}">
    </div>
    <div class="form-group">
        <label for="release_date">Tanggal Rilis</label>
        <input type="date" name="release_date" id="release_date" required value="{{ $movie->release_date }}">
    </div>
    <div class="form-group">
        <label for="duration">Durasi (menit)</label>
        <input type="number" name="duration" id="duration" required value="{{ $movie->duration }}">
    </div>
    <div class="form-group">
        <label for="main_cast">Pemeran Utama</label>
        <textarea name="main_cast" id="main_cast" required>{{ $movie->main_cast }}</textarea>
    </div>
    <div class="form-group">
        <label for="synopsis">Sinopsis</label>
        <textarea name="synopsis" id="synopsis" required>{{ $movie->synopsis }}</textarea>
    </div>

    <div class="form-group">
        <label for="trailer">Trailer (Video)</label>
        <input type="file" name="trailer" id="trailer" accept="video/*">
        @if($movie->trailer)
            <video width="320" height="240" controls>
                <source src="{{ asset('storage/' . $movie->trailer) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        @endif
    </div>

    <div class="form-group">
        <label for="poster">Poster (Image)</label>
        <input type="file" name="poster" id="poster" accept="image/*">
        @if($movie->poster)
            <p>Current poster:</p>
            <img src="{{ asset('storage/' . $movie->poster) }}" alt="Movie Poster" style="max-width: 200px;">
        @endif
    </div>
    </div>

    <button type="submit" class="btn btn-primary">Update Movie</button>
</form>
</div>
@endsection
